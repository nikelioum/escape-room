<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive admin dashboard and web application ui kit. Create the skeleton of your app with popular pre-designed layouts.">
    <meta name="keywords" content="layouts, boxed">

    <title>Welcome {{ Auth::user()->name }}</title>

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
                <a class="menu-link" href="/admin">
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

          <div class="col-lg-12">
            <div class="card">
              <h4 class="card-title"><strong>Appointments</strong></h4>

              <div class="card-body">

                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Date submited</th>
                      <th>Date</th>
                      <th>Starting time</th>
                      <th>Ending time</th>
                      <th>Status</th>
                      <th>Rating</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($appointments as $appointment)
                    <tr>
                      <td>{{$appointment->created_at}}</td>
                      <td>{{$appointment->date}}</td>
                      <td>{{$appointment->starting_time}}</td>
                      <td>{{$appointment->ending_time}}</td>
                      <td>{{$appointment->status}}</td>
                      @if ($appointment->rate === null)
                      <td>Not yet rating</td>
                      @else
                      <td>fsdfsdf</td>
                      @endif
                      @if ($appointment->status === 'pending')
                      <td><a href="/aprove/{{$appointment->id}}"><span class="text-danger">Aprove</span></a> or <a href="/reject/{{$appointment->id}}"><span class="text-danger">Reject</span></a></td>
                      @else
                      <td></td>
                      @endif
                    </tr>
                    @endforeach
                  </tbody>
                </table>


              </div>
            </div>
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
