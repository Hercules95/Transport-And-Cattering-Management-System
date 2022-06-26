<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Entezaam</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="Avenger Admin Theme">
    <meta name="author" content="KaijuThemes">

    <link href='http://fonts.googleapis.com/css?family=RobotoDraft:300,400,400italic,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600,700' rel='stylesheet' type='text/css'>

 
    <link type="text/css" href="/assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">        <!-- Font Awesome -->
    <link type="text/css" href="/assets/css/styles.css" rel="stylesheet">                                     <!-- Core CSS with all styles -->

    <link type="text/css" href="/assets/plugins/jstree/dist/themes/avenger/style.min.css" rel="stylesheet">    <!-- jsTree -->
    <link type="text/css" href="/assets/plugins/codeprettifier/prettify.css" rel="stylesheet">                <!-- Code Prettifier -->
    <link type="text/css" href="/assets/plugins/iCheck/skins/minimal/blue.css" rel="stylesheet">              <!-- iCheck -->

<link type="text/css" href="/assets/plugins/form-daterangepicker/daterangepicker-bs3.css" rel="stylesheet"> 	<!-- DateRangePicker -->
<link type="text/css" href="/assets/plugins/fullcalendar/fullcalendar.css" rel="stylesheet"> 					<!-- FullCalendar -->
<link type="text/css" href="/assets/plugins/charts-chartistjs/chartist.min.css" rel="stylesheet"> 				<!-- Chartist -->

    </head>

    <body class="infobar-offcanvas">
        


@include('header')

        <div id="wrapper">
            <div id="layout-static">
                <div class="static-sidebar-wrapper sidebar-midnightblue">
                    <div class="static-sidebar">
                       @include('nav')
                    </div>
                </div>
                <div class="static-content-wrapper">
                    <div class="static-content">
                        <div class="page-content">
                        <br>
                            <ol class="breadcrumb">
                            <li class="">
                            <a href="/Home">
                           <i class="fa fa-home" aria-hidden="true" style="font-size:15px;">&nbspBack To Home</i>
                            </a></li>
                          
                            </ol>
                             <ol class="breadcrumb">
                                <li>Home</li>
                                <li class="active">Dashboard</li>
                                
                              </ol>
                            <div class="page-heading">            
                               
                                <img style="margin-left: 635px;margin-top: -89px;" src="/frontend/images/En.png" alt="">
                                
                                  <h1>Your Product Details</h1>
                                <div class="options">

                              
                            </div>
                            </div>
                            <div class="container-fluid">
                            <div data-widget-group="group1">
                                    <?php if(session('username') == "admin"):?>
                                        
                                                    <div class="row">

            <div class="col-md-3">
                <div class="amazo-tile tile-success">
                    <div class="tile-heading">
                        <div class="title">Registred Farm House:</div>
                        
                    </div>
                    <div class="tile-body">
                        <div class="content"><?php echo $countadmin?> Farms</div>
                    </div>
                    <div class="tile-footer">
                        <span class="info-text text-right"><?php echo $countadmin?><i class="fa fa-level-up"></i></span>
                        <div id="sparkline-revenue" class="sparkline-line"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="amazo-tile tile-info" href="#"> 
                    <div class="tile-heading">
                        <div class="title">Active Farms House:</div>
                       
                    </div>
                    <div class="tile-body">
                        <div class="content"><?php echo $activeadmin?> Active</div>
                    </div>
                    <div class="tile-footer">
                        <span class="info-text text-right"><?php echo $activeadmin?></span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 82%"></div>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="col-md-3">
                <div class="amazo-tile tile-info" href="#"> 
                    <div class="tile-heading">
                        <div class="title">Active Farms House:</div>
                       
                    </div>
                    <div class="tile-body">
                        <div class="content"><?php echo $nonactivefarmadmin?> Non-Active</div>
                    </div>
                    <div class="tile-footer">
                        <span class="info-text text-right"><?php echo $nonactivefarmadmin?></span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 82%"></div>
                        </div>
                    </div>
                </div>
            </div>
                                        </div>
                                   
                 <div class="row">
                     <div class="col-md-3">
                         <div class="amazo-tile tile-success">
                            <div class="tile-heading">
                               <div class="title">Registred Catering:</div>
                        
                            </div>
                             <div class="tile-body">
                             <div class="content"><?php echo $getCateringadmin?> Catering</div>
                           </div>
                          <div class="tile-footer">
                        <span class="info-text text-right"><?php echo $getCateringadmin?><i class="fa fa-level-up"></i></span>
                        <div id="sparkline-revenue" class="sparkline-line"></div>
                        </div>
                     </div>
                </div>
                                        <div class="col-md-3">
                                         <div class="amazo-tile tile-info" href="#"> 
                    <div class="tile-heading">
                        <div class="title">Active Catering:</div>
                       
                    </div>
                    <div class="tile-body">
                        <div class="content"><?php echo $activeCateringadmin?> Active</div>
                    </div>
                    <div class="tile-footer">
                        <span class="info-text text-right"><?php echo $activeCateringadmin?></span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 82%"></div>
                        </div>
                    </div>
                                         </div>
                                        </div>
            
                 <div class="col-md-3">
                <div class="amazo-tile tile-info" href="#"> 
                    <div class="tile-heading">
                        <div class="title">Active Catering:</div>
                       
                    </div>
                    <div class="tile-body">
                        <div class="content"><?php echo $nonactiveCateringadmin?> Non-Active</div>
                    </div>
                    <div class="tile-footer">
                        <span class="info-text text-right"><?php echo $nonactiveCateringadmin?></span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 82%"></div>
                        </div>
                    </div>
                </div>
          </div>
            </div>
                                      
                                         <div class="row">
                                        <div class="col-md-3">
                                        <div class="amazo-tile tile-success">
                    <div class="tile-heading">
                        <div class="title">Registred Transport:</div>
                        
                    </div>
                    <div class="tile-body">
                        <div class="content"><?php echo $counttransportadmin?> Transport</div>
                    </div>
                    <div class="tile-footer">
                        <span class="info-text text-right"><?php echo $counttransportadmin?><i class="fa fa-level-up"></i></span>
                        <div id="sparkline-revenue" class="sparkline-line"></div>
                    </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                         <div class="amazo-tile tile-info" href="#"> 
                    <div class="tile-heading">
                        <div class="title">Active Transport:</div>
                       
                    </div>
                    <div class="tile-body">
                        <div class="content"><?php echo $activetransportadmin?> Active</div>
                    </div>
                    <div class="tile-footer">
                        <span class="info-text text-right"><?php echo $activetransportadmin?></span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 82%"></div>
                        </div>
                    </div>
                                         </div>
                                        </div>
            
                                        <div class="col-md-3">
                <div class="amazo-tile tile-info" href="#"> 
                    <div class="tile-heading">
                        <div class="title">Non-Active Transport:</div>
                       
                    </div>
                    <div class="tile-body">
                        <div class="content"><?php echo $nonactiveadmin?> Non-Active</div>
                    </div>
                    <div class="tile-footer">
                        <span class="info-text text-right"><?php echo $nonactiveadmin?></span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 82%"></div>
                        </div>
                    </div>
                </div>
                                        </div>
                                        </div>
                                   
                                    <?php else:?>
                                        <div class="row">
            <div class="col-md-3">
                <div class="amazo-tile tile-success">
                    <div class="tile-heading">
                        <div class="title">Registred Farm House:</div>
                        
                    </div>
                    <div class="tile-body">
                        <div class="content"><?php echo $count?> Farms</div>
                    </div>
                    <div class="tile-footer">
                        <span class="info-text text-right"><?php echo $count?><i class="fa fa-level-up"></i></span>
                        <div id="sparkline-revenue" class="sparkline-line"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="amazo-tile tile-info" href="#"> 
                    <div class="tile-heading">
                        <div class="title">Active Farms House:</div>
                       
                    </div>
                    <div class="tile-body">
                        <div class="content"><?php echo $active?> Active</div>
                    </div>
                    <div class="tile-footer">
                        <span class="info-text text-right"><?php echo $active?></span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 82%"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="amazo-tile tile-info" href="#"> 
                    <div class="tile-heading">
                        <div class="title">Active Farms House:</div>
                       
                    </div>
                    <div class="tile-body">
                        <div class="content"><?php echo $nonactivefarm?> Non-Active</div>
                    </div>
                    <div class="tile-footer">
                        <span class="info-text text-right"><?php echo $nonactivefarm?></span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 82%"></div>
                        </div>
                    </div>
                </div>
            </div>
                                        </div>
                                   
                 <div class="row">
                     <div class="col-md-3">
                         <div class="amazo-tile tile-success">
                            <div class="tile-heading">
                               <div class="title">Registred Catering:</div>
                        
                            </div>
                             <div class="tile-body">
                             <div class="content"><?php echo $getCatering?> Catering</div>
                           </div>
                          <div class="tile-footer">
                        <span class="info-text text-right"><?php echo $getCatering?><i class="fa fa-level-up"></i></span>
                        <div id="sparkline-revenue" class="sparkline-line"></div>
                        </div>
                     </div>
                </div>
                                        <div class="col-md-3">
                                         <div class="amazo-tile tile-info" href="#"> 
                    <div class="tile-heading">
                        <div class="title">Active Catering:</div>
                       
                    </div>
                    <div class="tile-body">
                        <div class="content"><?php echo $activeCatering?> Active</div>
                    </div>
                    <div class="tile-footer">
                        <span class="info-text text-right"><?php echo $activeCatering?></span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 82%"></div>
                        </div>
                    </div>
                                         </div>
                                        </div>
            
                 <div class="col-md-3">
                <div class="amazo-tile tile-info" href="#"> 
                    <div class="tile-heading">
                        <div class="title">Active Catering:</div>
                       
                    </div>
                    <div class="tile-body">
                        <div class="content"><?php echo $nonactiveCatering?> Non-Active</div>
                    </div>
                    <div class="tile-footer">
                        <span class="info-text text-right"><?php echo $nonactiveCatering?></span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 82%"></div>
                        </div>
                    </div>
                </div>
          </div>
            </div>
                                      
                                         <div class="row">
                                        <div class="col-md-3">
                                        <div class="amazo-tile tile-success">
                    <div class="tile-heading">
                        <div class="title">Registred Transport:</div>
                        
                    </div>
                    <div class="tile-body">
                        <div class="content"><?php echo $counttransport?> Transport</div>
                    </div>
                    <div class="tile-footer">
                        <span class="info-text text-right"><?php echo $counttransport?><i class="fa fa-level-up"></i></span>
                        <div id="sparkline-revenue" class="sparkline-line"></div>
                    </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                         <div class="amazo-tile tile-info" href="#"> 
                    <div class="tile-heading">
                        <div class="title">Active Transport:</div>
                       
                    </div>
                    <div class="tile-body">
                        <div class="content"><?php echo $activetransport?> Active</div>
                    </div>
                    <div class="tile-footer">
                        <span class="info-text text-right"><?php echo $activetransport?></span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 82%"></div>
                        </div>
                    </div>
                                         </div>
                                        </div>
            
                                        <div class="col-md-3">
                <div class="amazo-tile tile-info" href="#"> 
                    <div class="tile-heading">
                        <div class="title">Non-Active Transport:</div>
                       
                    </div>
                    <div class="tile-body">
                        <div class="content"><?php echo $nonactive?> Non-Active</div>
                    </div>
                    <div class="tile-footer">
                        <span class="info-text text-right"><?php echo $nonactive?></span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 82%"></div>
                        </div>
                    </div>
                </div>
                                        </div>
                                        </div>
                                   <?php endif?>
                                </div>
                            </div> <!-- .container-fluid -->
                        </div> <!-- #page-content -->
                    </div>
                 @include('footer')
                </div>
            </div>
        </div>
<script type="text/javascript" src="/assets/js/jquery-1.10.2.min.js"></script> 							<!-- Load jQuery -->
<script type="text/javascript" src="/assets/js/jqueryui-1.9.2.min.js"></script>
<script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/assets/plugins/easypiechart/jquery.easypiechart.js"></script> 		<!-- EasyPieChart-->
<script type="text/javascript" src="/assets/plugins/sparklines/jquery.sparklines.min.js"></script>  		<!-- Sparkline -->
<script type="text/javascript" src="/assets/plugins/jstree/dist/jstree.min.js"></script> 
<script type="text/javascript" src="/assets/plugins/codeprettifier/prettify.js"></script> 
<script type="text/javascript" src="/assets/plugins/bootstrap-switch/bootstrap-switch.js"></script> 
<script type="text/javascript" src="/assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script> 
<script type="text/javascript" src="/assets/plugins/iCheck/icheck.min.js"></script>     					<!-- iCheck -->
<script type="text/javascript" src="/assets/js/enquire.min.js"></script>
<script type="text/javascript" src="/assets/plugins/bootbox/bootbox.js"></script>
<script type="text/javascript" src="/assets/plugins/simpleWeather/jquery.simpleWeather.min.js"></script> 
<script type="text/javascript" src="/assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js"></script>
<script type="text/javascript" src="/assets/plugins/jquery-mousewheel/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="/assets/js/application.js"></script>
<script type="text/javascript" src="/assets/demo/demo.js"></script>
<script type="text/javascript" src="/assets/demo/demo-switcher.js"></script>
<script type="text/javascript" src="/assets/plugins/fullcalendar/fullcalendar.min.js"></script> 
<script type="text/javascript" src="/assets/plugins/charts-chartistjs/chartist-plugin-tooltip.js"></script>
<script type="text/javascript" src="/assets/plugins/form-daterangepicker/daterangepicker.js"></script> 
<script type="text/javascript" src="/assets/demo/demo-index.js"></script>
</body>
</html>