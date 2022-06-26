<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Avenger Admin Theme</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="Avenger Admin Theme">
    <meta name="author" content="KaijuThemes">

    <link href='http://fonts.googleapis.com/css?family=RobotoDraft:300,400,400italic,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600,700' rel='stylesheet' type='text/css'>

    <!--[if lt IE 10]>
        <script type="text/javascript" src="/assets/js/media.match.min.js"></script>
        <script type="text/javascript" src="/assets/js/placeholder.min.js"></script>
    <![endif]-->

    <link type="text/css" href="/assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">        <!-- Font Awesome -->
    <link type="text/css" href="/assets/css/styles.css" rel="stylesheet">                                     <!-- Core CSS with all styles -->

    <link type="text/css" href="/assets/plugins/jstree/dist/themes/avenger/style.min.css" rel="stylesheet">    <!-- jsTree -->
    <link type="text/css" href="/assets/plugins/codeprettifier/prettify.css" rel="stylesheet">                <!-- Code Prettifier -->
    <link type="text/css" href="/assets/plugins/iCheck/skins/minimal/blue.css" rel="stylesheet">              <!-- iCheck -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries. Placeholdr.js enables the placeholder attribute -->
    <!--[if lt IE 9]>
        <link type="text/css" href="/assets/css/ie8.css" rel="stylesheet">
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
        <script type="text/javascript" src="/assets/plugins/charts-flot/excanvas.min.js"></script>
        <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The following CSS are included as plugins and can be removed if unused-->
    
<link type="text/css" href="/assets/plugins/form-select2/select2.css" rel="stylesheet">                        <!-- Select2 -->
<link type="text/css" href="/assets/plugins/form-multiselect/css/multi-select.css" rel="stylesheet">           <!-- Multiselect -->
<link type="text/css" href="/assets/plugins/form-fseditor/fseditor.css" rel="stylesheet">                      <!-- FullScreen Editor -->
<link type="text/css" href="/assets/plugins/form-tokenfield/bootstrap-tokenfield.css" rel="stylesheet">        <!-- Tokenfield -->
<link type="text/css" href="/assets/plugins/switchery/switchery.css" rel="stylesheet">        					<!-- Switchery -->

<link type="text/css" href="/assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet"> <!-- Touchspin -->

<link type="text/css" href="/assets/js/jqueryui.css" rel="stylesheet">        									<!-- jQuery UI CSS -->

<link type="text/css" href="/assets/plugins/iCheck/skins/minimal/_all.css" rel="stylesheet">                   <!-- Custom Checkboxes / iCheck -->
<link type="text/css" href="/assets/plugins/iCheck/skins/flat/_all.css" rel="stylesheet">
<link type="text/css" href="/assets/plugins/iCheck/skins/square/_all.css" rel="stylesheet">

<link type="text/css" href="/assets/plugins/card/lib/css/card.css" rel="stylesheet"> 									<!-- Card -->

    </head>

    <body class="infobar-offcanvas">
        
    
   @include('header')

        <div id="wrapper">
            <div id="layout-static">
                <div class="static-sidebar-wrapper sidebar-midnightblue">
                    <div class="static-sidebar">
                @include('farmnav	')
                    </div>
                </div>
                <div class="static-content-wrapper">
                    <div class="static-content">
                        <div class="page-content">
                            <ol class="breadcrumb">
                                
								<li>Home</li>
								<li>Pacakges</li>
								<li class="active">Add</li>

                            </ol>
                            <div class="page-heading">            
                                <h1>Farm House Packages</h1>
                                <div class="options">
   								 <div class="btn-toolbar">
    						  
   								 </div>
								</div>
                            </div>
                            <div class="container-fluid">
                                

							<div data-widget-group="group1">

	<div class="panel panel-default" data-widget='{"draggable": "false"}'>
		
		<div class="panel-editbox" data-widget-controls=""></div>
		<div class="panel-body">
			<form action="" class="form-horizontal row-border">
				<div class="form-group">
					<label class="col-sm-1 control-label">Name</label>
					<div class="col-sm-4">
						<input type="text" class="form-control">
					</div>
					<label class="col-sm-1 control-label">Mobile Number</label>
					<div class="col-sm-4">
						<input type="number" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">No of Rooms</label>
					<div class="col-sm-4">
						<input type="text" class="form-control">
					</div>
					<label class="col-sm-1 control-label">No of Washrooms</label>
					<div class="col-sm-4">
						<input type="text" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label">No of beds</label>
					<div class="col-sm-4">
						<input type="text" class="form-control">
					</div>
					<label class="col-sm-1 control-label">Address</label>
					<div class="col-sm-4">
						<textarea class="form-control"></textarea>
					</div>
				</div>
				<div class="form-group">
						<label class="col-sm-2 control-label">Detail Information about Farm House</label>
					<div class="col-sm-8">
						<textarea class="form-control"></textarea>
					</div>
				</div>
				 <div class="form-group">
						<label class="col-sm-2 control-label"> From </label>
						<div class="col-sm-2">
							<div class="input-group">
								<span name="daterangepicker3" class="input-group-addon"><i class="fa fa-calendar"></i></span>
								<input for="daterangepicker3" type="date" class="form-control" id="daterangepicker3">
							</div>
						</div>
						<label class="col-sm-2 control-label">  To </label>
						<div class="col-sm-2">
							<div class="input-group">
								<span name="daterangepicker" class="input-group-addon"><i class="fa fa-calendar"></i></span>
								<input for="daterangepicker" type="date" class="form-control" id="daterangepicker">
							</div>
						</div>
					</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Upload Images</label>
					<div class="col-sm-3">
						<div class="fileinput fileinput-new" style="width: 100%;" data-provides="fileinput">
							<div class="fileinput-preview thumbnail mb20" data-trigger="fileinput" style="width: 100%; height: 150px;"></div>
							<div>
								<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
								<span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
								
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="fileinput fileinput-new" style="width: 100%;" data-provides="fileinput">
							<div class="fileinput-preview thumbnail mb20" data-trigger="fileinput" style="width: 100%; height: 150px;"></div>
							<div>
								<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
								<span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
								
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="fileinput fileinput-new" style="width: 100%;" data-provides="fileinput">
							<div class="fileinput-preview thumbnail mb20" data-trigger="fileinput" style="width: 100%; height: 150px;"></div>
							<div>
								<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
								<span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
								
							</div>
						</div>
					</div>
				</div>
			</form>
			<div class="panel-footer">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<button class="btn-primary btn">Submit</button>
					<!-- 	<button class="btn-default btn">Cancel</button> -->
					</div>
				</div>
			</div>
		</div>
	</div>
							</div>


                            </div> <!-- .container-fluid -->
                        </div> <!-- #page-content -->
                    </div>
                   @include('footer')
                </div>
            </div>
        </div>

<script type="text/javascript" src="/assets/js/jquery-1.10.2.min.js"></script> 							<!-- Load jQuery -->
<script type="text/javascript" src="/assets/js/jqueryui-1.9.2.min.js"></script> 							<!-- Load jQueryUI -->

<script type="text/javascript" src="/assets/js/bootstrap.min.js"></script> 								<!-- Load Bootstrap -->


<script type="text/javascript" src="/assets/plugins/easypiechart/jquery.easypiechart.js"></script> 		<!-- EasyPieChart-->
<script type="text/javascript" src="/assets/plugins/sparklines/jquery.sparklines.min.js"></script>  		<!-- Sparkline -->
<script type="text/javascript" src="/assets/plugins/jstree/dist/jstree.min.js"></script>  				<!-- jsTree -->

<script type="text/javascript" src="/assets/plugins/codeprettifier/prettify.js"></script> 				<!-- Code Prettifier  -->
<script type="text/javascript" src="/assets/plugins/bootstrap-switch/bootstrap-switch.js"></script> 		<!-- Swith/Toggle Button -->

<script type="text/javascript" src="/assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script>  <!-- Bootstrap Tabdrop -->

<script type="text/javascript" src="/assets/plugins/iCheck/icheck.min.js"></script>     					<!-- iCheck -->

<script type="text/javascript" src="/assets/js/enquire.min.js"></script> 									<!-- Enquire for Responsiveness -->

<script type="text/javascript" src="/assets/plugins/bootbox/bootbox.js"></script>							<!-- Bootbox -->

<script type="text/javascript" src="/assets/plugins/simpleWeather/jquery.simpleWeather.min.js"></script> <!-- Weather plugin-->

<script type="text/javascript" src="/assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js"></script> <!-- nano scroller -->

<script type="text/javascript" src="/assets/plugins/jquery-mousewheel/jquery.mousewheel.min.js"></script> 	<!-- Mousewheel support needed for jScrollPane -->

<script type="text/javascript" src="/assets/js/application.js"></script>
<script type="text/javascript" src="/assets/demo/demo.js"></script>
<script type="text/javascript" src="/assets/demo/demo-switcher.js"></script>

<!-- End loading site level scripts -->
    
    <!-- Load page level scripts-->
    
<script type="text/javascript" src="/assets/plugins/form-multiselect/js/jquery.multi-select.min.js"></script>  			<!-- Multiselect Plugin -->
<script type="text/javascript" src="/assets/plugins/quicksearch/jquery.quicksearch.min.js"></script>           			<!-- Quicksearch to go with Multisearch Plugin -->
<script type="text/javascript" src="/assets/plugins/form-typeahead/typeahead.bundle.min.js"></script>                 	<!-- Typeahead for Autocomplete -->
<script type="text/javascript" src="/assets/plugins/form-select2/select2.min.js"></script>                     			<!-- Advanced Select Boxes -->
<script type="text/javascript" src="/assets/plugins/form-autosize/jquery.autosize-min.js"></script>            			<!-- Autogrow Text Area -->
<script type="text/javascript" src="/assets/plugins/form-colorpicker/js/bootstrap-colorpicker.min.js"></script> 			<!-- Color Picker -->

<script type="text/javascript" src="/assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js"></script> <!-- Touchspin -->

<script type="text/javascript" src="/assets/plugins/form-fseditor/jquery.fseditor-min.js"></script>            			<!-- Fullscreen Editor -->
<script type="text/javascript" src="/assets/plugins/form-jasnyupload/fileinput.min.js"></script>               			<!-- File Input -->
<script type="text/javascript" src="/assets/plugins/form-tokenfield/bootstrap-tokenfield.min.js"></script>     			<!-- Tokenfield -->
<script type="text/javascript" src="/assets/plugins/switchery/switchery.js"></script>     								<!-- Switchery -->

<script type="text/javascript" src="/assets/plugins/card/lib/js/card.js"></script> 										<!-- Card -->

<!-- <script type="text/javascript" src="/assets/plugins/iCheck/icheck.min.js"></script>  -->    							<!-- iCheck // already included on site-level -->
<script type="text/javascript" src="/assets/plugins/bootstrap-switch/bootstrap-switch.js"></script>     					<!-- BS Switch -->

<script type="text/javascript" src="/assets/plugins/jquery-chained/jquery.chained.min.js"></script> 						<!-- Chained Select Boxes -->

<script type="text/javascript" src="/assets/plugins/jquery-mousewheel/jquery.mousewheel.min.js"></script> <!-- MouseWheel Support -->

<script type="text/javascript" src="/assets/demo/demo-formcomponents.js"></script>

<script type="text/javascript" src="/assets/plugins/wijets/wijets.js"></script>     	


						<!-- Wijet -->

    <!-- End loading page level scripts-->

    </body>
</html>