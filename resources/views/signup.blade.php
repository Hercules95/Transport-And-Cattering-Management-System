<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
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
<link rel="stylesheet" href="/notification/css/alertify.rtl.css">
<link rel="stylesheet" href="/notification/css/themes/default.rtl.css">

<!-- include alertify script -->

    <!-- App CSS -->
  <link rel="stylesheet" href="/login/css/target-admin.css">
  <link rel="stylesheet" href="/login/css/custom.css">
  <link rel="stylesheet" href="/angular-ui-notification/demo/angular-ui-notification.min.css">

  <style type="text/css">
    .pic
    {
   background: url('/frontend/images/img5.jpg') no-repeat center center fixed;
   -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;}
   </style>
</head>
<body class="account-bg pic"> 
<div class="account-wrapper">
  <div>
  <img style="height:100%;" src="/frontend/images/entezaam.png" alt="Target Admin">
  </div>
  <div class="account-body">
      <h3 class="account-body-title">Get Started with a Free Account.</h3>
      <h5 class="account-body-subtitle">Fill all the details correctly.</h5>
      <div class="form account-form">
       <div class="form-group">
       	<img style="height: 168px;width: 54%;margin-left: 82px;border-radius: 80%;" id="output"/>
       	<br><br>
          <label  class="placeholder-hidden addFile">Image</label>
            <input type="file" id="file" style="display:none;" accept="image/*" onchange="loadFile(event)">
           <button class="btn btn-secondary btn-block btn-lg image">Upload Image</button>
         
        </div>
      <!--  -->
        <div class="form-group"> 
          <label for="signup-email" class="placeholder-hidden">Email Address</label>
          <input type="text" class="form-control" onclick="isValidEmailAddress()"  id="email" placeholder="Your Email" tabindex="1" required>
        </div> <!-- /.form-group -->
        <div class="form-group">
          <label for="signup-username" class="placeholder-hidden">Username</label>
          <input type="text" class="form-control"  id="username" placeholder="Username" tabindex="3" required>
          <input type="hidden" id="token" value="{{ csrf_token() }}">
        </div> <!-- /.form-group -->

        <div class="form-group">
          <label for="login-password" class="placeholder-hidden">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Password" tabindex="4" required>
        </div> 
        <div class="form-group">
          <button  class="btn btn-secondary btn-block btn-lg submit" tabindex="6">
          Create My Account &nbsp; <i class="fa fa-play-circle"></i>
          </button>
        </div> <!-- /.form-group -->
         <div class="account-footer">
      <p>
      Already have an account? &nbsp;
      <a href="/" class="">Login to your Account!</a>
      </p>
    </div>
      </div>

    </div> <!-- /.account-body -->

    <!-- /.account-footer -->

  </div> <!-- /.account-wrapper -->




  <script src="/login/js/libs/jquery-1.10.1.min.js"></script>
  <script src="/angular/angular.js"></script>
  <script src="/angular-ui-notification/demo/angular-ui-notification.min.js"></script>
  <script src="/login/js/libs/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="/login/js/libs/bootstrap.min.js"></script>

  <!--[if lt IE 9]>
  <script src="/login/js/libs/excanvas.compiled.js"></script>
  <![endif]-->
  <!-- App JS -->
  <script src="/login/js/target-admin.js"></script>
  <script src="/notification/alertify.js"></script>
  <!-- Plugin JS -->
  <script src="/login/js/target-account.js"></script>
<script type="text/javascript">
var file;
 var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
      file = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
 	$('.image').on('click',function(){
 		$('#file').click();
 	});
	$('.submit').on('click',function(){
		
		if($('#role_id').val() == "" || $('#username').val() == "" || $('#email').val() == "" || $('#password').val() == "")
		{
			alertify.set('notifier','position', 'top-center');
 			alertify.error('Please Fill All Details.');
		}
		else
		{

		
		var user = new Object();
		user.username = $('#username').val();
		user.email = $('#email').val();
		user.password = $('#password').val();
		user.file = file;
		 user._token =$('#token').val();
     var url = "/signup/submit";
    $.ajax({
        url: url,
        data: user,
        type: 'post',
   		success: function(response){
   		alertify.set('notifier','position', 'top-center');
 		alertify.success('Your Account Has Been Created.'); 
 		 window.setTimeout(function(){window.location.reload();},1000)
  		  }
  		});

		}
		
      });

</script>

 
</body>
</html>


