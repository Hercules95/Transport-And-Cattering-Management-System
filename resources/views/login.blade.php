<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <title>Entezaam</title>

  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">

  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300,700">
  <link rel="stylesheet" href="/login/css/font-awesome.min.css">
  <link rel="stylesheet" href="/login/js/libs/css/ui-lightness/jquery-ui-1.9.2.custom.min.css">
  <link rel="stylesheet" href="/login/css/bootstrap.min.css">

    <!-- App CSS -->
  <link rel="stylesheet" href="/login/css/target-admin.css">
  <link rel="stylesheet" href="/login/css/custom.css">

  <style type="text/css">
    .pic 
    {
    background: url('/frontend/images/img5.jpg') no-repeat center center fixed;
    -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;

    }  
  </style>
</head>

<body class="account-bg pic">

<div class="account-wrapper">

  <div>
    <a href="/Home"><img style="height:100%;" src="/frontend/images/entezaam.png" alt="Target Admin"></a>
  </div>

    <div class="account-body">

      <h3 class="account-body-title">Welcome.</h3>

      <h5 class="account-body-subtitle">Please sign in to get access.</h5>

      <form class="form account-form" method="POST" action="/l">
      
        <div class="form-group">
          <label for="login-username" class="placeholder-hidden">Username</label>
          <input type="text" class="form-control" id="login-username" name="username" placeholder="Username" tabindex="1">
          <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">

        </div> <!-- /.form-group -->

        <div class="form-group">
          <label for="login-password" class="placeholder-hidden">Password</label>
          <input type="password" class="form-control" id="login-password" name="password" placeholder="Password" tabindex="2">
        </div> <!-- /.form-group -->

        

        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block btn-lg" tabindex="4">
            Signin &nbsp; <i class="fa fa-play-circle"></i>
          </button>
        </div> <!-- /.form-group -->

      </form>
      <div class="account-footer">
      <p>
      Don't have an account? &nbsp;
      <a href="/signup" class="">Create an Account!</a>
      </p>
    </div>


    </div> <!-- /.account-body -->

     <!-- /.account-footer -->

  </div> <!-- /.account-wrapper -->



        

  <script src="/login/js/libs/jquery-1.10.1.min.js"></script>
  <script src="/login/js/libs/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="/login/js/libs/bootstrap.min.js"></script>

  <!--[if lt IE 9]>
  <script src="/login/js/libs/excanvas.compiled.js"></script>
  <![endif]-->
  <!-- App JS -->
  <script src="/login/js/target-admin.js"></script>
  
  <!-- Plugin JS -->
  <script src="/login/js/target-account.js"></script>

  


  

</body>
</html>
