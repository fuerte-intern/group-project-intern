<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\NewsDetail; // Include the NewsDetail model
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::with('details')->orderBy('created_at', 'DESC')->get(); // Eager load details
        return view('frontend.news.index', compact('news'));
    }

    public function Adminindex()
    {
        $news = News::with('details')->get(); // Eager load details
        return view('admin.news.index', compact('news'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'header' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|string',
            'details' => 'required|array',
            'details.*.short_title' => 'nullable|string|max:255',
            'details.*.short_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'details.*.short_description' => 'nullable|string',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        // Save the main news item
        $news = News::create([
            'header' => $validated['header'],
            'image' => $imagePath,
            'description' => $validated['description'],
        ]);

        // Filter and save valid details
        foreach ($validated['details'] as $detail) {
            if (!empty($detail['short_title']) && !empty($detail['short_description'])) {
                $shortImagePath = null;
                if (isset($detail['short_image'])) {
                    $shortImagePath = $detail['short_image']->store('images', 'public');
                }

                NewsDetail::create([
                    'news_id' => $news->id,
                    'short_title' => $detail['short_title'],
                    'short_image' => $shortImagePath,
                    'short_description' => $detail['short_description'],
                ]);
            }
        }

        return redirect()->route('news.admin')->with('success', 'News has been uploaded successfully!');
    }


    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->details()->delete();
        $news->delete();

        return redirect()->route('news.admin')->with('success', 'News has been deleted successfully!');
    }

    public function edit($id)
    {
        $news = News::with('details')->findOrFail($id); // Load details for editing
        return view('admin.news.create', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'header' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'details' => 'required|array',
            'details.*.id' => 'nullable|exists:news_details,id', // Ensure valid IDs for existing details
            'details.*.short_title' => 'required|string|max:255',
            'details.*.short_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'details.*.short_description' => 'required|string',
        ]);

        $news = News::findOrFail($id);
        $news->header = $validated['header'];
        $news->description = $validated['description'];

        if ($request->hasFile('image')) {
            $news->image = $request->file('image')->store('images', 'public');
        }

        $news->save();

        // Collect the IDs of the details from the request
        $detailIds = collect($validated['details'])->pluck('id')->filter();

        // Delete any old details not in the request
        $news->details()->whereNotIn('id', $detailIds)->delete();

        // Update or create new details
        foreach ($validated['details'] as $detail) {
            $newsDetail = $news->details()->find($detail['id'] ?? null);

            if ($newsDetail) {
                // Update existing detail
                $newsDetail->short_title = $detail['short_title'];
                $newsDetail->short_description = $detail['short_description'];

                if (isset($detail['short_image']) && $detail['short_image']) {
                    $newsDetail->short_image = $detail['short_image']->store('images', 'public');
                }

                $newsDetail->save();
            } else {
                // Create new detail
                $shortImagePath = isset($detail['short_image']) && $detail['short_image']
                    ? $detail['short_image']->store('images', 'public')
                    : null;

                NewsDetail::create([
                    'news_id' => $news->id,
                    'short_title' => $detail['short_title'],
                    'short_image' => $shortImagePath,
                    'short_description' => $detail['short_description'],
                ]);
            }
        }

        return redirect()->route('news.admin')->with('success', 'News updated successfully!');
    }


    public function create()
    {
        return view('admin.news.create');
    }

    public function newsview($id)
    {
        $article = News::with('details')->findOrFail($id); // Load details for frontend view
        return view('frontend.news.newsview', compact('article'));
    }
}
