<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function aboutpage(){
        return view('frontend.pages.about-us');
    }
    public function contactpage(){
        return view('frontend.pages.contact-us');
    }


}
