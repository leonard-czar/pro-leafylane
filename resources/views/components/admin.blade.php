<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Corona Admin</title>
  <!-- plugins:css -->
  <!-- <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css"> -->
  <link rel="stylesheet" href={{asset('/assets/vendors/css/vendor.bundle.base.css')}}>
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href={{asset('/assets/vendors/jvectormap/jquery-jvectormap.css')}}>
  <link rel="stylesheet" href={{asset('/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}>
  <link rel="stylesheet" href={{asset('/assets/vendors/owl-carousel-2/owl.carousel.min.css')}}>
  <link rel="stylesheet" href={{asset('/assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}>
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.2.96/css/materialdesignicons.min.css">
  <link rel="stylesheet" href={{asset('/assets/css/style.css')}}>
  <!-- End layout styles -->
  <link rel="shortcut icon" href={{asset('/assets/images/favicon.png')}} />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap" rel="stylesheet">
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo baloo text-white text-decoration-none" href="index.html">
          <h3>Leafylane</h3>
        </a>
        <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg"
            alt="logo" /></a>
      </div>
      <ul class="nav">
        <li class="nav-item nav-category">
          <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="index.html">
            <span class="menu-icon">
              <i class="mdi mdi-home"></i>
            </span>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>

        <li class="nav-item menu-items">
          <a class="nav-link" href="#">
            <span class="menu-icon">
              <i class="mdi mdi-cart"></i>
            </span>
            <span class="menu-title">Orders</span>
          </a>
        </li>

        <li class="nav-item menu-items">
          <a class="nav-link" href="/allcat">
            <span class="menu-icon">
              <i class="mdi mdi-shape-plus"></i>
            </span>
            <span class="menu-title">Categories</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="#">
            <span class="menu-icon">
              <i class="mdi mdi-account-group"></i>
            </span>
            <span class="menu-title">Users</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="#">
            <span class="menu-icon">
              <i class="mdi mdi-fruit-cherries"></i>
            </span>
            <span class="menu-title">Products</span>
          </a>
        </li>

        <li class="nav-item menu-items">
          <a class="nav-link" href="#">
            <span class="menu-icon">
              <i class="mdi mdi-credit-card"></i>
            </span>
            <span class="menu-title">Payment</span>
          </a>
        </li>
      </ul>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg"
              alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <ul class="navbar-nav w-100">
            <li class="nav-item w-100">
              <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                <input type="text" class="form-control" placeholder="Search products">
              </form>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown">
              <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                <div class="navbar-profile">
                  <img class="img-xs rounded-circle" src="assets/images/faces/face15.jpg" alt="">
                  <p class="mb-0 d-none d-sm-block navbar-profile-name">Henry Klein</p>
                  <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                aria-labelledby="profileDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-logout text-danger"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1">Log out</p>
                  </div>
                </a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="mdi mdi-format-line-spacing"></span>
          </button>
        </div>
      </nav>

      <div class="main-panel">
        <div class="content-wrapper">


          @yield('content')
          {{-- @include('flash-message') --}}


          <footer class="footer m-sm-5">
            <div class="d-sm-flex justify-content-center justify-content-sm-around">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com
                2020</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src={{asset('/assets/vendors/js/vendor.bundle.base.js')}}></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src={{asset('/assets/vendors/chart.js/Chart.min.js')}}></script>
    <script src={{asset('/assets/vendors/progressbar.js/progressbar.min.js')}}></script>
    <script src={{asset('/assets/vendors/jvectormap/jquery-jvectormap.min.js')}}></script>
    <script src={{asset('/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}></script>
    <script src={{asset('/assets/vendors/owl-carousel-2/owl.carousel.min.js')}}></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src={{asset('/assets/js/off-canvas.js')}}></script>
    <script src={{asset('/assets/js/hoverable-collapse.js')}}></script>
    <script src={{asset('/assets/js/misc.js')}}></script>
    <script src={{asset('/assets/js/settings.js')}}></script>
    <script src={{asset('/assets/js/todolist.js')}}></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src={{asset('/assets/js/dashboard.js')}}></script>
    <!-- End custom js for this page -->
    <script src={{asset('/assets/js/jquery.js')}}></script>


    {{-- <script>
      // <![CDATA[  <-- For SVG support
      if ('WebSocket' in window) {
        (function () {
          function refreshCSS() {
            var sheets = [].slice.call(document.getElementsByTagName("link"));
            var head = document.getElementsByTagName("head")[0];
            for (var i = 0; i < sheets.length; ++i) {
              var elem = sheets[i];
              var parent = elem.parentElement || head;
              parent.removeChild(elem);
              var rel = elem.rel;
              if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
                var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
              }
              parent.appendChild(elem);
            }
          }
          var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
          var address = protocol + window.location.host + window.location.pathname + '/ws';
          var socket = new WebSocket(address);
          socket.onmessage = function (msg) {
            if (msg.data == 'reload') window.location.reload();
            else if (msg.data == 'refreshcss') refreshCSS();
          };
          if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
            console.log('Live reload enabled.');
            sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
          }
        })();
      }
      else {
        console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
      }
      // ]]>
    </script> --}}
</body>

</html>