<!-- Include Font Awesome (for icons) -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

<!-- Include Material Design Icons -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.css" rel="stylesheet">

<style>
  /* Ensure the navbar container uses flexbox */
  .navbar .container-fluid {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  /* Center the search bar within the available space */
  .search-container {
    display: flex;
    justify-content: flex-end;
    flex-grow: 1;
    position: relative;
  }

  /* Align the logo to the left corner */
  .navbar-logo {
    max-width: 200px; /* Set a max width for the logo */
    width: auto;
  }

  /* Style for the search bar and input field */
  .search-container input {
    width: 0;
    opacity: 0;
    transition: width 0.3s ease, opacity 0.3s ease;
    padding: 10px;
  }

  .search-container.active input {
    width: 200px;
    opacity: 1;
  }

  /* Optional: Style for the search icon */
  .search-container .material-icons {
    cursor: pointer;
    align-items: center;
  }

  /* Style for the sub-navbar */
  .navbar-nav {
    display: flex;
    width: 100%; /* Make navbar-nav take up full width */
  }

  .navbar-nav .left-group {
    display: flex;
    justify-content: flex-start;
    flex-grow: 1;
  }

  .navbar-nav .right-group {
    display: flex;
    justify-content: flex-end;
  }

  .navbar-nav .nav-item {
    padding: 0 15px; /* Adjust padding to space out items further if necessary */
  }
</style>

<!-- Main Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    
    <!-- Logo (Left-aligned) -->
    <a href="#">
      <img class="navbar-brand navbar-logo w-5" src="//vashiisl.com/cdn/shop/files/logo_f3ec1b43-cd32-4afd-8b30-9c59aa0c4746_500x126.png?v=1664344683" alt="">
    </a>
    
    <!-- Search Bar (Centered) -->
    <div class="search-container px-3">
      <form class="d-flex w-50" role="search">
        <input class="form-control me-2 w-100" type="search" placeholder="Search" aria-label="Search">
        <span class="material-icons d-flex" onclick="toggleSearch()">search</span> <!-- Search Icon -->
      </form>
    </div>
    
    <!-- Admin and Dropdown (Right Side) -->
    <div class="d-flex">
      <!-- Admin Icon -->
      <span class="navbar-text me-3">
        <i class="fas fa-user-cog"></i> Admin
      </span>
      
      <!-- Language Dropdown with Flag Icon -->
      <div class="dropdown me-3">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fas fa-flag"></i> Language
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <li><a class="dropdown-item" href="#">English</a></li>
          <li><a class="dropdown-item" href="#">Spanish</a></li>
          <li><a class="dropdown-item" href="#">French</a></li>
        </ul>
      </div>
      
      <!-- Download Button -->
      <a href="#" class="btn btn-primary">Download</a>
    </div>
  </div>
</nav>

<!-- Sub Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Brand</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav w-100">
        <!-- Left Group - Space items on the left -->
        <div class="left-group">
          <li class="nav-item">
            <a class="nav-link" href="#">Category</a>
          </li>
        </div>

        <!-- Right Group - Space items on the right -->
        <div class="right-group">
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
        </div>
      </ul>
    </div>
  </div>
</nav>

<script>
  function toggleSearch() {
    const searchContainer = document.querySelector('.search-container');
    searchContainer.classList.toggle('active');
  }
</script>
