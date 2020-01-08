
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive admin dashboard and web application ui kit. Create the skeleton of your app with popular pre-designed layouts.">
    <meta name="keywords" content="layouts, boxed">

    <title>{{ Auth::user()->name }} make new appointment</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i" rel="stylesheet">

    <!-- Styles -->
    <link href="../assets/css/core.min.css" rel="stylesheet">
    <link href="../assets/css/app.min.css" rel="stylesheet">
    <link href="../assets/css/style.min.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../assets/img/apple-touch-icon.png">
    <link rel="icon" href="../assets/img/favicon.png">
  </head>

  <body>

    <!-- Preloader -->
    <div class="preloader">
      <div class="spinner-dots">
        <span class="dot1"></span>
        <span class="dot2"></span>
        <span class="dot3"></span>
      </div>
    </div>





    <!-- Topbar -->
    <header class="topbar topbar-expand-lg">
      <div class="container">
        <div class="topbar-left">
          <span class="topbar-btn topbar-menu-toggler"><i>&#9776;</i></span>
          <span class="topbar-brand"><img src="../assets/img/logo.png" alt="logo"></span>

          <div class="topbar-divider d-none d-xl-block"></div>

          <nav class="topbar-navigation">
            <ul class="menu">

              <li class="menu-item">
                <a class="menu-link" href="/home">
                  <span class="title">Dashboard</span>
                </a>
              </li>


              <li class="menu-item">
                <a class="menu-link" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                  <span class="title">Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </li>

            </ul>
          </nav>
        </div>

      </div>
    </header>
    <!-- END Topbar -->





    <!-- Main container -->
    <main class="main-container">

      <div class="main-content container">

        <div class="row">

          <div class="col-md-12">
            <a href="/home" class="btn btn-md btn-info mb-3">Back to my appointments</a>
          </div>

        </div>


        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


        <div class="row">

          <div class="col-lg-12">
            <form class="card" method="POST" action="submit-appointment">
              @csrf

              <h4 class="card-title"><strong>Create a new appointment</strong></h4>

              <div class="card-body">

                <div class="form-group">
                  <label>Request Date</label>
                  <input type="text" name="date" id="date" class="form-control" data-provide="datepicker" data-date-today-highlight="true" data-autoclose="true">
                </div>

                <div class="form-group">
                  <label>Starting time</label>
                  <input type="text" name="starting_time" id="starting_time" class="form-control" value="09:30" data-provide="clockpicker" data-autoclose="true">
                </div>


                <div class="form-group">
                  <label>Select room</label>
                  <select class="form-control" name="room" id="room">
                    <option value="Room 1">Room 1</option>
                    <option value="Room 2">Room 2</option>
                    <option value="Room 3">Room 3</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Number of participants</label>
                  <input class="form-control" name="participants" id="participants" type="number">
                </div>

                <div class="form-group">
                  <input class="form-control" value="{{ Auth::user()->id }}" name="user_id" id="user_id" type="hidden">
                </div>

              </div>

              <footer class="card-footer text-right">
                <button class="btn btn-primary" type="submit">Submit</button>
              </footer>
            </form>
          </div>



        </div>




      </div><!--/.main-content -->


      <!-- Footer -->
      <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <p class="text-center text-md-left">Copyright © 2019 by Liaropoulos Dimitrios. All rights reserved.</p>
            </div>
          </div>
        </div>
      </footer>
      <!-- END Footer -->

    </main>
    <!-- END Main container -->



    <!-- Global quickview -->
    <div id="qv-global" class="quickview" data-url="../assets/data/quickview-global.html">
      <div class="spinner-linear">
        <div class="line"></div>
      </div>
    </div>
    <!-- END Global quickview -->



    <!-- Scripts -->
    <script src="../assets/js/core.min.js"></script>
    <script src="../assets/js/app.min.js"></script>
    <script src="../assets/js/script.min.js"></script>

  </body>
</html>
