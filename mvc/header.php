<div class="container-fluid p-0">
  <nav class="navbar navbar-expand-lg" style="background-color:#E2E2E2;">
    <div class="container">
      <a class="navbar-brand" href="<?php echo $site_url; ?>/">
        <img src="<?php echo $site_url; ?>/images/mobilelagbe_logo.png" width="175px" alt="logo" class="logo rounded">
      </a>
      <button class="navbar-toggler p-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#menuCanvas" aria-controls="menuCanvas">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="menuCanvas">
        <div class="offcanvas-header bg-info text-white">
          <h5 class="offcanvas-title">Menu</h5>
          <button type="button" class="btn-close text-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo $site_url; ?>/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $site_url; ?>/brands/">Brands</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $site_url; ?>/compare/">Compare</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $site_url; ?>/top_phones/">Top Phones</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $site_url; ?>/top_ratings/">Top Ratings</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Showrooms
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Showrooms</a></li>
                <li><a class="dropdown-item" href="#">Showrooms Add</a></li>
                <li><a class="dropdown-item" href="#">Service Center</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Category
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Smartphone</a></li>
                <li><a class="dropdown-item" href="#">Feature Phone</a></li>
                <li><a class="dropdown-item" href="#">Tablet</a></li>
                <li><a class="dropdown-item" href="#">Smart Watch</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Reviews
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Features</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                News
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?php echo $site_url; ?>/news_list">News</a></li>
                <li><a class="dropdown-item" href="#">Tips</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $site_url; ?>/advance_search">Advanced Search</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</div>



