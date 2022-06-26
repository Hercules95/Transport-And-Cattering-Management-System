<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from 115.160.244.10:8084/themeforest/event_planning/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Nov 2017 17:15:17 GMT -->
<head>
    <!-- Meta information -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"><!-- Mobile Specific Metas -->
    
    <!-- Title -->
   <title>Entezaam</title>
    
    <!-- favicon icon -->
    <link rel="shortcut icon" href="images/Favicon.ico">
    
    <!-- CSS Stylesheet -->
    <link href="/frontend/css/bootstrap.css" rel="stylesheet"><!-- bootstrap css -->
    <link href="/frontend/css/owl.carousel.css" rel="stylesheet"><!-- carousel Slider -->
    <link href="/frontend/css/styles.css" rel="stylesheet" /><!-- font css --> 
    <link href="/frontend/css/docs.css" rel="stylesheet"><!--  template structure css -->
    
    <!-- Used Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Domine:400,700%7COpen+Sans:300,300i,400,400i,600,600i,700,700i%7CRoboto:400,500" rel="stylesheet"> 
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<div class="page">
  		@include('frontend.header')
       @include('frontend.model')
        
        <section class="page-header">
            <div class="container">
            	<h1>contact us</h1>
            </div>
        </section>
        <section class="content">
            <div class="container">
                <div class="home-event">
                    <div class="heading">
                    	<div class="icon"><em class="icon icon-heading-icon"></em></div>
                        <div class="text">
                            <h2>Contact Us</h2>
                        </div>
                        <div class="info-text">All the information you will need is listed below, just click on the page you want to view and that's it.</div>
                        <div class="stickLine"></div>
                    </div>
                    <div class="row">
                      
                        <div class="col-sm-4">
                            <div class="contact-box">
                                <div class="contactIcon">
                                    <span class="icon icon-phone"></span>
                                </div>
                                <a href="telTo:4408007654321">033-13352098</a>
                               
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="contact-box">
                                <div class="contactIcon">
                                	<span class="icon icon-location-1"></span>
                                </div>
                            	<address>Bahria University near Dalmiya Road</address>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="contact-box">
                                <div class="contactIcon">
	                                <span class="icon icon-message"></span>
                                </div>
                                <span>Email - <a href="mailTo:info@eventplanning.com">info@entezaam.com</a></span>
                                <span>Website - <a href="#">entezaam.com</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="contackForm">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h2>Contact Form</h2>
                    </div>
                    <form class="has-validation-callback" action="http://115.160.244.10:8084/themeforest/event_planning/contact.php" method="post">
                        <div class="col-sm-6">
                        	<div class="input-box">
                                <label>Your Name <sup>*</sup></label>
                                <input type="text" data-validation="required" data-validation-error-msg="Name cannot be blank." name="name">
                            </div>
                            <div class="input-box">
                                <label>Your Email <sup>*</sup></label>
                                <input type="text" data-validation="email" data-validation-error-msg="Incorrect e-mail address" name="email">
                            </div>
                            <div class="input-box">
                                <label>Subject <sup>*</sup></label>
                                <input type="text" data-validation="required" data-validation-error-msg="Subject cannot be blank." name="subject">
                            </div>
                        </div>
                        <div class="col-sm-6">
                        	<div class="input-box">
                                <label>Your Message <sup>*</sup></label>
                                <textarea data-validation="required" data-validation-error-msg="Message cannot be blank." name="message"></textarea>
                            </div>
                            <input type="submit" class="btn" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </section>
      @include('frontend.footer')
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script type="text/javascript" src="/frontend/js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="/frontend/js/bootstrap.js"></script>
    <script type="text/javascript" src="/frontend/js/owl.carousel.js"></script>
    <script type="text/javascript" src="/frontend/js/jquery.selectbox-0.2.js"></script>
    <script type="text/javascript" src="/frontend/js/jquery.form-validator.min.js"></script>
    <script type="text/javascript" src="/frontend/js/placeholder.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="/frontend/js/map-styleMain.js"></script>
    <script type="text/javascript" src="/frontend/js/coustem.js"></script>

</body>

<!-- Mirrored from 115.160.244.10:8084/themeforest/event_planning/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Nov 2017 17:15:18 GMT -->
</html>
