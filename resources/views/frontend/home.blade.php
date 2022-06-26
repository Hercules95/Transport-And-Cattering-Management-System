<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from 115.160.244.10:8084/themeforest/event_planning/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Nov 2017 16:59:08 GMT -->
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
    <link href="/frontend/css/datepicker.css" rel="stylesheet" /><!-- Date picker css -->
    <link href="/frontend/css/loader.css" rel="stylesheet"><!-- Loader Box css -->
    <link href="/frontend/css/docs.css" rel="stylesheet"><!--  template structure css -->

   
    <link href="/hover/css/hover.css" rel="stylesheet" media="all">
    
    
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
       	<div id="loader-wrapper">
			<div id="loader"><img src="/frontend/images/loader.gif" alt=""></div>
			<div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
		</div>
       @include('frontend.header')
        <div class="modal modal-vcenter fade" id="loginModal" tabindex="-1" role="dialog">
            <div class="modal-dialog login-popup" role="document">
                <div class="modal-content">
                    <div class="close-icon" aria-label="Close" data-dismiss="modal" ><img src="/frontend/images/close-icon.png" alt=""></div>
                    <div class="left-img"><img src="/frontend/images/login-leftImg.png" alt=""></div>
                    <div class="right-info">
                        <h1>Login</h1>
                        <div class="input-form">
                            <div class="input-box">
                                <div class="icon icon-user"></div>
                                <input type="text" placeholder="Username">
                            </div>
                            <div class="input-box">
                                <div class="icon icon-lock"></div>
                                <input type="text" placeholder="Password">
                            </div>
                            <div class="check-slide">
                                <div class="check">
                                    <label class="label_check" for="checkbox-02"><input type="checkbox" name="sample-checkbox-01" id="checkbox-02" value="1" checked="">Remember me</label>
                                    
                                </div>
                                <a href="#">Forgot password ?</a>
                            </div>
                            <div class="submit-slide">
                                <input type="submit" value="Login" class="btn">
                            </div>
                        </div>
                        <div class="signUp-link">Haven’t signed up yet? <a href="javascript:void(0);">Sign Up</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal modal-vcenter fade" id="registrationModal" tabindex="-1" role="dialog">
            <div class="modal-dialog registration-popup" role="document">
                <div class="modal-content">
                    <div class="close-icon" aria-label="Close" data-dismiss="modal" ><img src="/frontend/images/close-icon.png" alt=""></div>
                    <h1>New Member Registration</h1>
                    <div class="registration-form">
                        <div class="info">
                            <h2>Why to sign up</h2>
                            <ul>
                                <li>Exclusive discounts for all bookings</li>
                                <li>Full access all discounted prices</li>
                                <li>Dedicated wed-ordinator for your event</li>
                                <li>Custom event planner for your event</li>
                            </ul>
                        </div>
                        <div class="form-filde">
                            <div class="input-box">
                                <input type="text" placeholder="Email ID">
                            </div>
                            <div class="input-box">
                                <input type="text" placeholder="Username">
                            </div>
                            <div class="input-box">
                                <input type="text" placeholder="Password">
                            </div>
                            <div class="input-box">
                                <input type="text" placeholder="Phone">
                            </div>
                            <div class="captcha-box">
                                <input type="text" placeholder="Enter Captcha">
                                <div class="captcha-img"><img src="/frontend/images/capcha-img.png" alt=""></div>
                            </div>
                            <div class="note">Can’t Read ?<a href="#">Refresh</a></div>
                            <div class="check-slide">
                                <label class="label_check" for="checkbox-03"><input type="checkbox" name="sample-checkbox-01" id="checkbox-03" value="1" checked="">By signing up, I agree to EventPlanning terms of services</label>
                            </div>
                            <div class="submit-slide">
                                <input type="submit" value="Register" class="btn">
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
        
        <section class="banner">
            <div class="carousel" id="mainBnner">
                <div class="item"><img src="/assets/img/2.jpg" alt=""></div>
                <div class="item"><img src="/assets/img/59.jpg" alt=""></div>
                <div class="item"><img src="/assets/img/6.jpg" alt=""></div>
            </div>
            <div class="banner-nav">
                <div class="prev"><span class="icon icon-arrow-left"></span></div>
                <div class="next"><span class="icon icon-arrow-right"></span></div>
            </div>
            <div id="Search"></div>
           
        </section>
        <section class="service-type">
            <div class="container">
                <div class="heading">
                    <div class="icon"><em class="icon icon-heading-icon"></em></div>
                    <div class="text">
                        <h2>Our Services</h2>
                    </div>
                    <div class="info-text">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                </div>
                <div class="service-catagari">
                    <ul>
                        <li>
                            <a>
                                <span class="icon icon-caterers hvr-wobble-horizontal"></span>
                                <span class="text">Caterers</span>
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class="icon icon-flower-pot hvr-wobble-horizontal"></span>
                                <span class="text">Farm House</span>
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class="icon icon-calander  hvr-wobble-horizontal"></span>
                                <span class="text">Transport</span>
                            </a>
                        </li>
                    </ul>
            
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container">
                <div class="home-event">
                    <div class="heading">
                        <div class="icon"><em class="icon icon-heading-icon"></em></div>
                        <div class="text">
                            <h2>Events Overview</h2>
                        </div>
                        <div class="info-text">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                    </div>
                    <div class="row">
                        <div class="event-slider">
                            <div class="item">
                                <div class="event-box">
                                    <div class="img">
                                        <a href="/FarmHouse/List">
                                            <img src="/assets/img/4.jpg" alt="">
                                            <span class="capsan">
                                                <span>Farm House</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="name">Farm House</div>
                                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s ype specimen book. It has survived not only five centuries,</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="event-box">
                                    <div class="img">
                                        <a href="/Cattering/list">
                                            <img src="/assets/img/23.jpg" alt="">
                                            <span class="capsan">
                                                <span>Cattering</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="name">Cattering</div>
                                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s ype specimen book. It has survived not only five centuries,</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="event-box">
                                    <div class="img">
                                        <a href="#">
                                            <img src="/assets/img/77.jpg" alt="">
                                            <span class="capsan">
                                                <span>Transport</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="name">Transport</div>
                                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s ype specimen book. It has survived not only five centuries,</p>
                                </div>
                            </div>
                         </div>
                    </div>
                </div>
            </div>
        </section>
       
        <section class="news-view">
            <div class="container">
                <div class="heading">
                    <div class="icon"><em class="icon icon-heading-icon"></em></div>
                    <div class="text">
                        <h2>Latest Updates</h2>
                    </div>
                    <div class="info-text">Find our lastest farm house,Catering,Transport Services just one click away from your picnic</div>
                </div>
             
                    <div class="col-sm-12 col-md-4 hvr-bob">
                        <div class="news-box style3">
                            <img style="height:361px;width:100%;" src="/CatteringShopImages/<?php echo $cat->shop_image?>" alt="">
                            <div class="text">

                                <div class="news-title">
                                 <span>Catering</span>
                                    <h3><?php echo $cat->name?></h3>
                                    <span>Address: <?php echo $cat->address?></span>
                                </div>
                                <span>Price :<?php echo $cat->price?></span><br>
                                <span>Capacity :<?php echo $cat->capacity?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 hvr-bob">
                        <div class="news-box style3">
                            <img style="height:361px;width: 100%;" src="/FarmHouseImages/<?php echo $fa->image_one?>" alt="">
                            <div class="text">
                                <div class="news-title">
                                 <span>Farm House</span>
                                    <h3><?php echo $fa->name?></h3>
                                    <span>Address: <?php echo $fa->address?></span>
                                </div>
                                  <span>Price :<?php echo $fa->price?></span><br>
                                <span>Capacity :<?php echo $fa->capacity?></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-4 hvr-bob">
                        <div class="news-box style3">
                            <img style="height:361px;width: 100%;" src="/TransportImage/<?php echo $tran->image?>" alt="">
                            <div class="text">
                                <div class="news-title">
                                 <span>Transport</span>
                                    <h3><?php echo $tran->name?></h3>
                                    <span>Address: <?php echo $tran->address?></span>
                                </div>
                                  <span>Price :<?php echo $tran->price?></span><br>
                                <span>No of Passenger :<?php echo $tran->passenger?></span>
                            </div>
                        </div>
                    </div>
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
    <script type="text/javascript" src="/frontend/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="/frontend/js/placeholder.js"></script>
    <script type="text/javascript" src="/frontend/js/coustem.js"></script>
    <script type="text/javascript" src="/dist/Frontend/Search/bundleSearch.js"></script>
</body>

<!-- Mirrored from 115.160.244.10:8084/themeforest/event_planning/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Nov 2017 17:01:23 GMT -->
</html>

   