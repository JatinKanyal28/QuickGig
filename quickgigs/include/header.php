<?php if(!isset($_SESSION['username'])){ ?>
<header id="site-header" class="fixed-top">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=New+Tegomin&display=swap" rel="stylesheet">
  <section class="w3l-header-4">
      <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light">
              <h1><a class="navbar-brand" href="index.php"><span class="fa fa-newspaper-o" aria-hidden="true"></span>
                      Quick<span>Gig</span>
                  </a></h1>
              <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav"
                  aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="fa icon-expand fa-bars"></span>
                  <span class="fa icon-close fa-times"></span>
              </button>

               <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                      
                      <li class="nav-item @@about__active">
                          <a class="nav-link" href="login.php">Post a Project</a>
                      </li>
                      <li class="nav-item @@services__active">
                          <a class="nav-link" href="show.php">Projects</a>
                      </li>
                   <!--   <li class="nav-item"><a href="logout.php"
                              class="fa fa-search" style="margin-left: 18px;"></a></li> -->
                  </ul>
                  
                  <ul class="navbar-nav search-right mt-lg-0 mt-2">

                      <li class="nav-item"><a href="signup.php"
                              class="btn btn-primary d-none d-lg-block btn-style mr-2">Sign Up</a></li>
                      <li class="nav-item"><a href="login.php"
                              class="btn btn-primary d-none d-lg-block btn-style mr-2">Login</a></li>
                  </ul>
                  <!-- //toggle switch for light and dark theme -->
                  <!-- search popup -->
                  <div id="search" class="pop-overlay">
                      <div class="popup">
                          <form action="#" method="GET" class="d-sm-flex">
                              <input type="search" placeholder="Search.." name="search" required="required" autofocus>
                              <button type="submit">Search</button>
                              <a class="close" href="#url">&times;</a>
                          </form>
                      </div>
                  </div>
                  <!-- /search popup -->
              </div>
              <!-- toggle switch for light and dark theme -->
              <div class="mobile-position">
                  <nav class="navigation">
                      <div class="theme-switch-wrapper">
                          <label class="theme-switch" for="checkbox">
                              <input type="checkbox" id="checkbox">
                              <div class="mode-container">
                                  <i class="gg-sun"></i>
                                  <i class="gg-moon"></i>
                              </div>
                          </label>
                      </div>
                  </nav>
              </div>
          </nav>
      </div>
  </section>
</header>

<?php }else{ ?>
  
<header id="site-header" class="fixed-top">
  <section class="w3l-header-4">
      <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light">
              <h1><a class="navbar-brand" href="index.php"><span class="fa fa-newspaper-o" aria-hidden="true"></span>
                      Quick<span>Gig</span>
                  </a></h1>
              <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav"
                  aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="fa icon-expand fa-bars"></span>
                  <span class="fa icon-close fa-times"></span>
              </button>

               <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">

                    <li class="nav-item @@about__active">
                          <a class="nav-link" href="dashboard.php">Dashboard</a>
                      </li>
                      
                      <li class="nav-item @@about__active">
                          <a class="nav-link" href="addgig.php">Post a Project</a>
                      </li>
                      <li class="nav-item @@services__active">
                          <a class="nav-link" href="show.php">Projects</a>
                      <!--     <li class="nav-item"><a href="logout.php"
                              class="fa fa-search" style="margin-left: 18px;"></a></li> -->
                      </li>
                     
                  </ul>
                  
                  <ul class="navbar-nav search-right mt-lg-0 mt-2">

                    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle-o fa-3x"></i></a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="profile.php">Edit Profile</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>

                    <!-- <li class="nav-item @@about__active"> -->
                    <!-- <span class="fa fa-newspaper-o" aria-hidden="true">Span</span> -->
                          <!-- <a class="fa fa-user-circle-o fa-3x"  href="profile.php" style="margin-right: 15px;"></a>
                      </li>
 -->
                     <!--  <li class="nav-item"><a href="logout.php"
                              class="btn btn-primary d-none d-lg-block btn-style mr-2">Logout</a></li> -->
                  
                  </ul>

                  <!-- //toggle switch for light and dark theme -->
                  <!-- search popup -->
                  <div id="search" class="pop-overlay">
                      <div class="popup">
                          <form action="#" method="GET" class="d-sm-flex">
                              <input type="search" placeholder="Search.." name="search" required="required" autofocus>
                              <button type="submit">Search</button>
                              <a class="close" href="#url">&times;</a>
                          </form>
                      </div>
                  </div>
                  <!-- /search popup -->
              </div>
              <!-- toggle switch for light and dark theme -->
              <div class="mobile-position">
                  <nav class="navigation">
                      <div class="theme-switch-wrapper">
                          <label class="theme-switch" for="checkbox">
                              <input type="checkbox" id="checkbox">
                              <div class="mode-container">
                                  <i class="gg-sun"></i>
                                  <i class="gg-moon"></i>
                              </div>
                          </label>
                      </div>
                  </nav>
              </div>
          </nav>
      </div>
  </section>
</header>
<?php } ?>