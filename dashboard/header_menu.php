

<div class="container-fluid p-0">
  <nav class="navbar navbar-expand-lg" style="background-color:#E2E2E2;">
    <div class="container">
      <a class="navbar-brand" href="./">
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
              <a class="nav-link active" aria-current="page" href="./">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?target=mobile_list">Mobile list</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?target=mobile_add">Mobile Add</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?target=brand_list">Brand List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?target=brand_add">Brand Add</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?target=news_list">News List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?target=news_add">News Add</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?target=changepassword">Change Password</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</div>


