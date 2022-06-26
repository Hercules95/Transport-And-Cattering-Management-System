<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from 115.160.244.10:8084/themeforest/event_planning/search_detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Nov 2017 17:11:54 GMT -->
<head>
    <!-- Meta information -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"><!-- Mobile Specific Metas --> 
    
    <!-- Title -->
   <title>Entezaam</title>
    
    <!-- favicon icon -->
    <link rel="shortcut icon" href="/frontend/images/Favicon.ico">
    
    <!-- CSS Stylesheet -->
    <link href="/frontend/css/bootstrap.css" rel="stylesheet"><!-- bootstrap css -->
    <link href="/frontend/css/owl.carousel.css" rel="stylesheet"><!-- carousel Slider -->
    <link href="/frontend/css/styles.css" rel="stylesheet" /><!-- font css --> 
    <link href="/frontend/css/lightbox.css" rel="stylesheet"><!-- Light Box css -->
	<link href="/frontend/css/jquery.selectbox.css" rel="stylesheet" /><!-- select Box css -->
    <link href="/frontend/css/docs.css" rel="stylesheet"><!--  template structure css -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.12/semantic.min.css"></link>

    
    <!-- Used Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Domine:400,700%7COpen+Sans:300,300i,400,400i,600,600i,700,700i%7CRoboto:400,500" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="inner-page">
	<div class="page">
    	 @include('frontend.header')
            @include('frontend.model')
        <div class="simple-banner">
        	<div class="banner-img">
                <img src="/frontend/images/bus1.jpg" alt="">
            </div>
            <div class="text">
            	<div class="inner-text">
                	<h2>Transport</h2>
                    <p>Details</p>
                </div>
            </div>
        </div>
        <section class="content">
        	<div class="breadcrumb">
            	<div class="container">
                	<ul>
                    	<li><a href="#">Home</a>/</li>
                        <li><a href="#">Transport</a>/</li>
                        <li class="active">Details</li>
                    </ul>
                </div>
            </div>
        	<div class="search-resultPage">
                <div class="fiexd-nav">
                    <div class="container">
                        <div class="back-link"><a href="/Transport/List"><span class="icon icon-back-filled"></span>Back</a></div>
                        <ul>
                            <li>
                                <a href="javascript:;">
                                    <span class="icon icon-info"></span>
                                    <span class="text">Information</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <span class="icon icon-hands"></span>
                                    <span class="text">Amenities</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <span class="icon icon-thumb-image"></span>
                                    <span class="text">Photo Gallery</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <span class="icon icon-term-condition"></span>
                                    <span class="text"> Terms & Conditions</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <span class="icon icon-cancellation-policy"></span>
                                    <span class="text">Feed Back</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-sm-9 col-md-9">
                            <div class="hotel-info tab-content">
                               <h2>About The <b style="color:orange;"><?php echo $get[0]->name?></b></h2>
                                <div class="inner-info">
                                <div class="col-md-6">
                                    <p><h3>Van Type</h3><?php echo $get[0]->vantype?> <h3>No of Passenger Capacity</h3><?php echo $get[0]->passenger?></p>
                                    </div>
                                     <div class="col-md-6">
                                    <p><h3>Vehicle Number</h3><?php echo $get[0]->vehicleno?> <h3>Chasis Number</h3><?php echo $get[0]->chasisno?></p>
                                    </div>
                                    <div class="address">
                                        <div class="address-view">
                                            <h3>Address :</h3>
                                            <div class="address-slide full">
                                                <div class="icon icon-location-2"></div>
                                                <label><?php echo $get[0]->address?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="amenities-list tab-content">
                                <h2>Facilities In The Transport</h2>
                               
                                <div class="amenities-view">
                               
                                <?php if($get[0]->ac == true):?>
                                    
                                    <div class="amenities-box">
                                        <div class="icon icon-tea"></div>
                                        <span>Ac</span>
                                    </div>
                                    <?php endif?>
                                     <?php if($get[0]->luxury == true):?>

                                        <div class="amenities-box">
                                        <div class="icon icon-tea"></div>
                                        <span>luxury</span>
                                    </div>
                                    <?php endif?>
                                     <?php if($get[0]->soundsystem == true):?>
                                        <div class="amenities-box">
                                        <div class="icon icon-tea"></div>
                                        <span>Sound System</span>
                                    </div>
                                    <?php endif?>
                                     
                                     
                                </div>

                           
                            </div>
                          
                            <div class="photo-gallery tab-content">
                                <h2>Photo Gallery</h2>
                                <div class="gallery-view">
                                    <div class="row">
                                    <?php foreach($images as $img):?>
                                        <div class="col-sm-4 col-xs-6">
                                            <div class="img">
                                             <a href="/TransportImage/<?php echo $img->image?>" data-lightbox="example-set">
                                            <img  style="height: 150px;"src="/TransportImage/<?php echo $img->image?>" alt="">
                                             </a>
                                            </div>
                                        </div>
                                    <?php endforeach?>
                                  
                                    </div>
                                </div>
                            </div>
                            <div class="terms-conditions tab-content">
                                <h2>Terms & Conditions</h2>
                                <div class="conditions">
                                <p>Before doing selection of picnic arrangement services you should first read our Terms & Condition shared on this page.</p>
                                    <h3>Our Service Responsibility</h3>
                                    <p>- We take care of all your needs and once you make an order we will guarantee you that you will get best service. - We make sure that our team provides you the best services on your proposed deadline.</p>
                                    <h3>Ordering Policy </h3>
                                    <p>- Customers are required to Sign-Up and registered themselves on Entizam.pk registration portal.
                                    - After Registration, every customer will be given a User ID 
                                    - Customer is required to select farmhouse of their choice along with catering and transport services if they wish to.
                                    - Entizam.pk has strict Payment Policies and we will follow the Payment Terms mentioned to the customers at the time of making an Order. 
                                    </p>
                                    <h3>Payment Procedure </h3>
                                    <p>- Once the Client has made the order he is required to make arrangement to pay for the services they have acquired 
                                    - Customers will have to pay full payment as per our payment policy once they have made the order so that administrator can start working on the acquired services. 
                                    </p>

                                    <h3>Service Terms </h3>
                                    <p>- Entizam.pk are dedicated to provide services to only genuine customers and we wont take orders from any illegal sources. 
                                    - Entizam.pk will only start working on your Acquired services once after the full payment is received. 
                                    - We work according to the instruction made by our customers at the time of making an order but if there is any extra additional task from customer side so we would charge extra for that.</p>
                                    <h3>Customer Services Policy </h3>
                                    <p>- Our customers can get in touch with our customers at any time of the day through our live chat, telephone and email. Our representative will be available for you 24/7 to answer all your queries. 
                                    - Our representatives will be guiding your through our procedures and ordering process and will be updating you regarding the progress of your work if requested.</p>
                                </div>
                            </div>
                            <div class="cancellation-policy tab-content">
                               
                                <div class="policy">
                                  <!-- 
                                    <div id="feedback"></div> -->
                                   
                                  <!-- 
                                    <div id="feedback"></div> -->
                                    <div id="feedback"></div>

                                </div>
                                    
                                </div>
                            </div>
                            
                            
                 
                        <div class="col-log-3 col-sm-3 col-md-3">
                        <div class="booking-formMain">
                        <div class="book-title">Contact Details</div>    
                        <div class="book-form">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-box has-error">
                                        <label>Name:  <label style="color:orange;"><b><?php echo $get[0]->name?></b></label></label>
                                       
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="submit-box">
                                    <a href="javascript:;" data-toggle="modal" data-target="#contact">
                                        <input style="font-size: 13px;" type="submit" value="Contact Number" class="btn"></a>
                                    </div>
                                </div>
                                  <!-- <div class="col-sm-6">
                                    <div class="submit-box">
                                        <input style="font-size: 13px;" type="submit" value="Email" class="btn">
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        </div>
                            </div>
                    </div>

                    <div class="modal modal-vcenter fade" id="seatingModal" tabindex="-1" role="dialog">
                        <div class="modal-dialog seating-popup" role="document">
                            <div class="modal-content">
                                <div class="close-icon" aria-label="Close" data-dismiss="modal" ><img src="images/close-icon.png" alt=""></div>
                                <h1>Seating Availability</h1>
                                <div class="facility-view">
                                    <div class="facility-box">
                                        <div class="inner-box">
                                            <div class="radio-icon"></div>
                                            <div class="icon icon-theater"></div>
                                            <div class="name">Theatre</div>
                                            <div class="count">500</div>
                                        </div>
                                    </div>
                                    <div class="facility-box">
                                        <div class="inner-box">
                                            <div class="radio-icon"></div>
                                            <div class="icon icon-classroom"></div>
                                            <div class="name">Classroom</div>
                                            <div class="count">250</div>
                                        </div>
                                    </div>
                                    <div class="facility-box">
                                        <div class="inner-box">
                                            <div class="radio-icon"></div>
                                            <div class="icon icon-banquet"></div>
                                            <div class="name">Banquet</div>
                                            <div class="count">140</div>
                                        </div>
                                    </div>
                                    <div class="facility-box">
                                        <div class="inner-box">
                                            <div class="radio-icon"></div>
                                            <div class="icon icon-u-shape"></div>
                                            <div class="name">U-Shape</div>
                                            <div class="count">120</div>
                                        </div>
                                    </div>
                                    <div class="facility-box">
                                        <div class="inner-box">
                                            <div class="radio-icon"></div>
                                            <div class="icon icon-reception"></div>
                                            <div class="name">Reception</div>
                                            <div class="count">1000</div>
                                        </div>
                                    </div>
                                    <div class="facility-box active">
                                        <div class="inner-box">
                                            <div class="radio-icon"></div>
                                            <div class="icon icon-boardroom"></div>
                                            <div class="name">Boardroom</div>
                                            <div class="count">10</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="select-btn"><a href="javascript:;" class="btn">select</a></div>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        </section>
       @include('frontend.footer')
        <div class="booking-btnTop">book now</div>
    </div>
	


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="/frontend/js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="/frontend/js/bootstrap.js"></script>
    <script type="text/javascript" src="/frontend/js/owl.carousel.js"></script>
    <script type="text/javascript" src="/frontend/js/scroll.js"></script>
    <script type="text/javascript" src="/frontend/js/lightbox-plus-jquery.js"></script>
    <script type="text/javascript" src="/frontend/js/jquery.selectbox-0.2.js"></script>
    <script type="text/javascript" src="/frontend/js/jquery.form-validator.min.js"></script>
	<script type="text/javascript" src="/frontend/js/placeholder.js"></script>
    <script type="text/javascript" src="/frontend/js/coustem.js"></script>
    <script type="text/javascript" src="/dist/Frontend/FarmHouse/Feedback.js"></script>
    
    
</body>

<!-- Mirrored from 115.160.244.10:8084/themeforest/event_planning/search_detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Nov 2017 17:12:48 GMT -->
</html>
    

        <div class="modal modal-vcenter fade" id="contact" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Contact Details</h4>
        </div>
        <div class="modal-body">
         <i class="fa fa-phone"></i>&nbsp&nbsp<?php echo $get[0]->mobile_no?>
        </div>
      </div>
    </div>
  </div>
</div>
