 <link rel="stylesheet" href="/notification/css/alertify.rtl.css">
<link rel="stylesheet" href="/notification/css/themes/default.rtl.css">
 <header id="header">
            <div class="quck-link">
                <div class="container">
                    <div class="mail"><a href="MailTo:info@eventplanning.com"><span class="icon icon-envelope"></span>info@entezaam.com</a></div>
                    <div class="right-link">
                        <ul>
                         <!--    <li><a href="register.html"><span class="icon icon-multi-user"></span>Become a Vendor</a></li>
                            <li><a href="#"><span class="icon icon-invite-friend"></span>Invite Friends</a></li> -->
                            <?php if(session('username') == True):?>
                            <li><a href="/Admin">My Account</a></li>
                             <li><a><?=session('username');?></a></li>
                             <li><a href="/Logout">Logout</a></li>
                            <?php else:?>
                            <li class="registration"><a href="javascript:;" data-toggle="modal" data-target="#registrationModal">Registration</a></li>
                            <li><a href="javascript:;" data-toggle="modal" data-target="#loginModal">Login</a></li>
                            <?php endif?>
                            
                        </ul>
                    </div>
                </div>    
            </div>
            <nav id="nav-main">
                <div class="container">
                    <div class="navbar navbar-inverse">
                        <div class="navbar-header">
                            <a href="/Home" class="navbar-brand"><img style="height: 100px;
    width: 164px;
    margin-top: -21px;" src="/frontend/images/En.png" alt=""></a>
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon1-barMenu"></span>
                                <span class="icon1-barMenu"></span>
                                <span class="icon1-barMenu"></span>
                            </button>
                            
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="single-col">
                                	<a href="/Home">Home</a>
                                </li>
                               
                                     <li class="single-col">
                                    <a href="">Services<span class="icon icon-arrow-down"></span></a>
                                    <ul>
                                        <li><a href="/FarmHouse/List">Farm House</a></li>
                                        <li><a href="/Transport/List">Transport</a></li>
                                        <li><a href="/Cattering/list">Catering</a></li>
                                    </ul>
                                </li>
                                 <li class="single-col">
                                    <a href="">Packages</a>
                                </li>
                         
                                 <li><a href="/AboutUs">About Us</a></li>
                                <li><a href="/Faqs">FAQ’s </a></li>
                                <li><a href="/ContactUs">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
         <div class="modal modal-vcenter fade" id="loginModal" tabindex="-1" role="dialog">
            <div class="modal-dialog login-popup" role="document">
                <div class="modal-content">
                    <div class="close-icon" aria-label="Close" data-dismiss="modal" ><img src="/frontend/images/close-icon.png" alt=""></div>
                    <div class="left-img"><img src="/frontend/images/login-leftImg.png" alt=""></div>
                     <form class="form account-form" method="POST" action="/l">
                    <div class="right-info">
                        <h1>Login</h1>
                        <div class="input-form">
                            <div class="input-box">
                                <div class="icon icon-user"></div>
                                   <input type="text" class="form-control" id="login-username" name="username" placeholder="Username" tabindex="1">
                             <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                            </div>
                            <div class="input-box">
                                <div class="icon icon-lock"></div>
                                  <input type="password" class="form-control" id="login-password" name="password" placeholder="Password" tabindex="2">
                            </div>
                            <div class="check-slide">
                                <div class="check">
                                    <label class="label_check" for="checkbox-02"><input type="checkbox" name="sample-checkbox-01" id="checkbox-02" value="1" checked="">Remember me</label>
                                    
                                </div>
                                <a href="#">Forgot password ?</a>
                            </div>
                            <div class="submit-slide">
                                <input type="submit" value="Login" class="btn check">
                            </div>
                        </div>
                        
                    </div>
                     </form>
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
                            <img style="height: 168px;width: 54%;margin-left: 82px;border-radius: 80%;" id="output"/>
                             <br><br>
                              <input type="file" id="file" style="display:none;" accept="image/*" onchange="loadFile(event)">
                             <button class="btn btn-secondary btn-block btn-lg image">Upload Image</button>
                        </div>
                        <div class="form-filde">
                            <div class="input-box">
                                 <input type="text" class="form-control" onclick="isValidEmailAddress()"  id="email" placeholder="Your Email" tabindex="1" required>
                            </div>
                            <div class="input-box">
                                 <input type="text" class="form-control"  id="username" placeholder="Username" tabindex="3" required>
                                <input type="hidden" id="token" value="{{ csrf_token() }}">
                            </div>
                            <div class="input-box">
                                <input type="password" class="form-control" id="password" placeholder="Password" tabindex="4" required>
                            </div>
                            <div class="check-slide">
                                <label class="label_check" for="checkbox-03"><input type="checkbox" name="sample-checkbox-01" id="checkbox-03" value="1" checked="">By signing up, I agree to Entezaam terms of services</label>
                            </div>
                            <div class="submit-slide">
                                <input type="submit" value="Register" class="btn submit">
                            </div>
                        </div>
                    </div>

                </div>    
            </div>
        </div>


   
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