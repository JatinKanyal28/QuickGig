<header id="site-header" class="fixed-top">
  <section class="w3l-header-4">
      <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light">
              <h1><a class="navbar-brand" href=""><span class="fa fa-user" style="font-size:50px;padding-right: 10px;" aria-hidden="true">     </span>
                             Admin<span>Portal</span>
                  </a></h1>
              <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav"
                  aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="fa icon-expand fa-bars"></span>
                  <span class="fa icon-close fa-times"></span>
              </button>

               <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                      
                      <li class="nav-item @@about__active">
                          <a class="nav-link" href="regusers.php">Registered Users</a>
                      </li>
                      <li class="nav-item @@services__active">
                          <a class="nav-link" href="show2.php">Registered GIGs</a>
                      </li>

                      <!-- <li class="nav-item"><a href="logout.php"
                              class="fa fa-search" style="margin-left: 18px;"></a></li>
 -->
                  </ul>


                  <ul class="navbar-nav search-right mt-lg-0 mt-2">
                      <!-- <li class="nav-item"><a href="signup.php"
                              class="btn btn-primary d-none d-lg-block btn-style mr-2">Sign Up</a></li> -->
                      <li class="nav-item"><a href="admin.php"
                              class="btn btn-primary d-none d-lg-block btn-style mr-2">Logout</a></li>
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
              <!-- <div class="mobile-position">
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
              </div> -->
          </nav>
      </div>
  </section>
</header>

