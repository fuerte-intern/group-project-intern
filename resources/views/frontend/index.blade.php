@extends('layouts.app')

@section('title', 'Home Page')

@section('content')


<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="https://vashiisl.com/cdn/shop/files/W_C_web_1500x587.jpg?v=1731755899" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://vashiisl.com/cdn/shop/files/All_Products_web_1500x587.jpg?v=1731755899" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://vashiisl.com/cdn/shop/files/W_C_web_1500x587.jpg?v=1731755899" alt="Third slide">
      </div>
      {{-- <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('assets/silder/silder-3.jpg') }}" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('assets/silder/silder-3.jpg') }}" alt="Third slide">
      </div> --}}
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Category Slider Section -->
<div class="container my-5">
    <h2 class="text-center mb-4">Categories</h2> <!-- Added header -->
    <div id="categoryCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <!-- Carousel Item 1 -->
        <div class="carousel-item active">
          <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 g-4">
            <!-- Category Item 1 -->
            <div class="col">
              <div class="category-item text-center">
                <div class="icon-container">
                  <img src="https://via.placeholder.com/100" alt="Laptops" class="img-fluid rounded-circle"> <!-- Dummy image for Laptops -->
                </div>
                <h5>Laptops</h5>
              </div>
            </div>
            <!-- Category Item 2 -->
            <div class="col">
              <div class="category-item text-center">
                <div class="icon-container">
                  <img src="https://via.placeholder.com/100" alt="Mobiles" class="img-fluid rounded-circle"> <!-- Dummy image for Mobiles -->
                </div>
                <h5>Mobiles</h5>
              </div>
            </div>
            <!-- Category Item 3 -->
            <div class="col">
              <div class="category-item text-center">
                <div class="icon-container">
                  <img src="https://via.placeholder.com/100" alt="Accessories" class="img-fluid rounded-circle"> <!-- Dummy image for Accessories -->
                </div>
                <h5>Accessories</h5>
              </div>
            </div>
            <!-- Category Item 4 -->
            <div class="col">
              <div class="category-item text-center">
                <div class="icon-container">
                  <img src="https://via.placeholder.com/100" alt="Televisions" class="img-fluid rounded-circle"> <!-- Dummy image for Televisions -->
                </div>
                <h5>Televisions</h5>
              </div>
            </div>
            <!-- Category Item 5 -->
            <div class="col">
              <div class="category-item text-center">
                <div class="icon-container">
                  <img src="https://via.placeholder.com/100" alt="Furniture" class="img-fluid rounded-circle"> <!-- Dummy image for Furniture -->
                </div>
                <h5>Furniture</h5>
              </div>
            </div>
          </div>
        </div>
        <!-- Carousel Item 2 -->
        <div class="carousel-item">
          <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 g-4">
            <!-- Category Item 6 -->
            <div class="col">
              <div class="category-item text-center">
                <div class="icon-container">
                  <img src="https://via.placeholder.com/100" alt="Footwear" class="img-fluid rounded-circle"> <!-- Dummy image for Footwear -->
                </div>
                <h5>Footwear</h5>
              </div>
            </div>
            <!-- Category Item 7 -->
            <div class="col">
              <div class="category-item text-center">
                <div class="icon-container">
                  <img src="https://via.placeholder.com/100" alt="Books" class="img-fluid rounded-circle"> <!-- Dummy image for Books -->
                </div>
                <h5>Books</h5>
              </div>
            </div>
            <!-- Category Item 8 -->
            <div class="col">
              <div class="category-item text-center">
                <div class="icon-container">
                  <img src="https://via.placeholder.com/100" alt="Sports" class="img-fluid rounded-circle"> <!-- Dummy image for Sports -->
                </div>
                <h5>Sports</h5>
              </div>
            </div>
            <!-- Category Item 9 -->
            <div class="col">
              <div class="category-item text-center">
                <div class="icon-container">
                  <img src="https://via.placeholder.com/100" alt="Toys" class="img-fluid rounded-circle"> <!-- Dummy image for Toys -->
                </div>
                <h5>Toys</h5>
              </div>
            </div>
            <!-- Category Item 10 -->
            <div class="col">
              <div class="category-item text-center">
                <div class="icon-container">
                  <img src="https://via.placeholder.com/100" alt="Groceries" class="img-fluid rounded-circle"> <!-- Dummy image for Groceries -->
                </div>
                <h5>Groceries</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <!-- Carousel Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#categoryCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#categoryCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  
  
@endsection





<script>
    $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });
    });

</script>