<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive admin dashboard and web application ui kit. ">
    <meta name="keywords" content="register, signup">

    <title>Escape room - Register</title>

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


    <div class="row no-gutters min-h-fullscreen bg-white">
      <div class="col-md-6 col-lg-7 col-xl-8 d-none d-md-block bg-img" style="background-image: url(../assets/img/intro.jpg)" data-overlay="5">

        <div class="row h-100 pl-50">
          <div class="col-md-10 col-lg-8 align-self-end">
            <h1 class="text-white"><strong>CoderEscape1337</strong></h1>
            <br>
            <h4 class="text-white">Welcome to our portal.</h4>
            <p class="text-white">Sign up to book an appointment to our rooms.</p>
            <br><br>
            <br><br>
          </div>
        </div>

      </div>



      <div class="col-md-6 col-lg-5 col-xl-4 align-self-center">
        <div class="px-80 py-30">
          <h4>Register an account</h4>
          <p><small>All fields are required.</small></p>
          <br>

          <form class="form-type-material" method="POST" action="{{ route('register') }}">
            {{csrf_field()}}

            <div class="form-group">
              <input type="text" class="form-control" name="name" id="name" required>
              <label for="name">Full name</label>
            </div>

            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" required>
              <label for="email">Email address</label>
            </div>

            <div class="form-group">
              <input type="password" class="form-control" name="password" id="password" required>
              <label for="password">Password</label>
            </div>

            <div class="form-group">
              <input type="password" class="form-control" name="password_confirmation" id="password-confirm" required>
              <label for="password-confirm">Password (confirm)</label>
            </div>

            <div class="form-group">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input">
                <label class="custom-control-label">I agree to all <a class="text-primary" href="#">terms</a></label>
              </div>
            </div>

            <br>

            <button class="btn btn-bold btn-block btn-primary" type="submit">Register</button>

          </form>

          <hr class="w-30px">

          <p class="text-center text-muted fs-13 mt-20">Already have an account? <a class="text-primary fw-500" href="/login">Sign in</a></p>
        </div>
      </div>
    </div>




    <!-- Scripts -->
    <script src="../assets/js/core.min.js"></script>
    <script src="../assets/js/app.min.js"></script>
    <script src="../assets/js/script.min.js"></script>

  </body>
</html>
