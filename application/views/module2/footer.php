<div class="footer footer--dark" id="footer">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col col-lg-3 col-md-3 text-center ">


                <!-- Widget About -->

                <div class="widget w-about">

                    <a href="#" class="logo">
                        <div class="img-wrap">
                            <img src="<?php echo base_url();?>web_assets/img/logo-colored.png" alt="Make my exam">
                        </div>
                        <div class="title-block">
                            <h6 class="logo-title">Make my exam</h6>
                            <div class="sub-title">Knowledge Treasure</div>
                        </div>
                    </a>
                    <!--<p>Lorem ipsum dolor sit amet, consect adipisicing elit, sed do eiusmod por incidid ut labore et lorem.</p>-->
                   
                </div>

                <!-- ... end Widget About -->

            </div>

      
            <div class="col col-lg-12 col-md-12 col-sm-12 col-12">


                <!-- SUB Footer -->

                <div class="sub-footer-copyright">
                    <span>
						Copyright <a href="#">IBT India Private Limited </a> All Rights Reserved 2018
					</span>
                </div>

                <!-- ... end SUB Footer -->

            </div>
        </div>
    </div>
</div>

<!-- =====================Sign In Popup============================================== -->

<div style="display:none;" class="modal fade popup" id="registration-login-form-popup" tabindex="-1" role="dialog" aria-labelledby="registration-login-form-popup" aria-hidden="true">
    <div class="modal-dialog window-popup registration-login-form-popup" role="document">
        <div class="modal-content">
            <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                <svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
            </a>
            <div class="modal-body">
                <div class="registration-login-form">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#profile1" role="tab">
                                Login
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " data-toggle="tab" href="#home1" role="tab">
                                Register
                            </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        
                        <div class="tab-pane active" id="profile1" role="tabpanel" data-mh="log-tab">
                            
                            <form class="content" method="post" action="<?php echo site_url();?>login_register/login">
                            <div class="row">
                                <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group text-center">
                                        <p style="color:red; font-weight:400; height:16px;" id="formLoginErr"></p>
                                    </div>
                                    <div class="form-group label-floating is-empty">
                                        <!-- <label class="control-label">Your Email</label> -->
                                        <input class="form-control" placeholder="Your Email/Dams Id" type="email" id="username" name="username" required>
                                    </div>
                                    <div class="form-group label-floating is-empty">
                                        <!-- <label class="control-label">Your Password</label> -->
                                        <input class="form-control" placeholder="Your Password" type="password" id="password" name="password" type="password" required>
                                    </div>
            
                                    <div class="remember">
            
                                        <div class="checkbox">
                                            <label>
                                                <input name="optionsCheckboxes" type="checkbox">
                                                Remember Me
                                            </label>
                                        </div>
                                        <a href="forgot-Password.html" class="forgot">Forgot my Password</a>
                                    </div>
            
                                    
                                    <input type='button' id="loginData" class="btn btn-lg  btn-blue full-width" value="Login">
            
            
                                    <div class="or"></div> 
                                    <div class="social-login text-center">
<!--
                                    <fb:login-button scope="public_profile,email"  onlogin="checkLoginState();" class="btn btn-icon-left">
                                    </fb:login-button>
-->
                                    <?php $social_auth = social_login_authUrl();
                                     $google_authUrl = $social_auth['google_authUrl']; 
                                     $facebook_authUrl = $social_auth['facebook_authUrl'];
                                    ?>
                                    <!-- <a href="<?php echo $facebook_authUrl ?>" class="btn btn-control bg-facebook  btn-icon-left"><i class="fab fa-facebook-f" aria-hidden="true"></i></a> -->
                                    
                                   
                                    <!-- <a href="#" class="btn btn-control bg-twitter  btn-icon-left"><i class="fab fa-twitter" aria-hidden="true"></i></a> -->
                                    
                                    <a href="<?php echo $google_authUrl ?>" class="btn bg-google btn-lg full-width btn-icon-left"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a>
            
                                      <!-- <div class="g-signin2 btn" data-onsuccess="onSignIn"></div> -->
                                   
                                   <!-- <a href="" class="btn btn-control  bg-linkedin  btn-icon-left"><i class="fab fa-linkedin" aria-hidden="true"></i></a> -->
                                   <!-- <a href="https://www.linkedin.com/oauth/v2/authorization?response_type=code&client_id=81fnzlpte0oj7q&redirect_uri=http://app.egyanshala.com/egyan/egyanshala_project/index.php/HomeMain&oauth_callback=http://app.egyanshala.com/egyan/egyanshala_project/index.php/HomeMain/linkedin&state=987654321&scope=r_basicprofile" class="btn btn-control  bg-linkedin  btn-icon-left"><i class="fab fa-linkedin" aria-hidden="true"></i></a> -->
                                   

                                   
                                    <a  id="damsLog"  href="#" class="btn  btn-lg    full-width btn-border-think custom-color c-grey">Login with DAMS</a>
                                    </div>
            
                                    <p style="padding-bottom:8px;">Don’t you have an account? <a  href="#home1">Register Now!</a> it’s really simple and you can start enjoing all the benefits!</p>
                                </div>
                            </div>
                        </form>
                        </div>
                        <script>
                        </script>
                        <div class="tab-pane " id="home1" role="tabpanel" data-mh="log-tab">
                        
                            <form class="content" name="regForm" id="regForm">
                            <div class="row">
                                <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group text-center">
                                    <p style="color:red; font-weight:400; height:16px;" id="formErr"></p>
                                    </div>
                                </div>
                                <div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group label-floating is-empty">
                                        <!-- <label class="control-label">First Name</label> -->
                                        <input class="form-control" placeholder="First Name" type="text" name="first_name" id="first_name">
                                    </div>
                                </div>
                                <div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group label-floating is-empty">
                                        <!-- <label class="control-label">Last Name</label> -->
                                        <input class="form-control" placeholder="Last Name" type="text" name="last_name" id="last_name">
                                    </div>
                                </div>
                                <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group label-floating is-empty">
                                        <!-- <label class="control-label">Your Email</label> -->
                                        <input class="form-control" placeholder="Your Email" type="email" name="emailid" id="emailid">
                                    </div>
                                    <div class="form-group label-floating is-empty">
                                        <!-- <label class="control-label">Your Mobile</label> -->
                                        <input class="form-control" placeholder="Your Mobile" type="text" name="mobile" id="mobile" maxlength="10">
                                    </div>
                                    <div class="form-group label-floating is-empty">
                                        <!-- <label class="control-label">Your Password</label> -->
                                        <input class="form-control" placeholder="Your Password" type="password" name="pwd" id="pwd" >
                                    </div>
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Re Enter Password</label>
                                        <input class="form-control" placeholder="" type="password" name="cpwd" id="cpwd" >
                                    </div>
            
                                
                                
                                    <div class="remember">
                                        <div class="checkbox">
                                            <label>
                                                <input name="optionsCheckboxes" type="checkbox">
                                                I accept the <a href="#">Terms and Conditions</a> of the website
                                            </label>
                                        </div>
                                    </div>
            
                                    <input type="button" id="regData" class="btn btn-blue btn-lg full-width" value="Complete Registration!"/>
                                    
                                </div>
                            </div>
                        </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- =====================End ofSign In Popup============================================== -->
<div id="mobModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">Mobile Number Required</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('HomeMain/g_signUp'); ?>">
        <p><label>Mobile No :<input type="text" name="mob_g" maxlength="10"/></p>
        <p><input type="submit" class="btn btn-success"/>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!--==========================go to top======================-->
<a class="back-to-top" href="javascript:void(0)" onclick="topFunction()" id="myBtn" title="Go to top" style="display:none">
            <img src="<?php echo base_url(); ?>web_assets1/svg-icons/back-to-top.svg"  alt="arrow" class="back-icon">
        </a>
<script>

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

</script>
<!--==========================go to top======================-->
<!---------------------login with fb------------------>
 <script>
        
        window.fbAsyncInit = function() {
            FB.init({
            appId      : '1562473767189961',
            cookie     : true,
            xfbml      : true,
            version    : 'v3.1'
            });
            
            FB.AppEvents.logPageView();   
            
        };

        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

               
        FB.getLoginStatus(function(response) {
            statusChangeCallback(response);
        });
        
        function checkLoginState() {
            FB.getLoginStatus(function(response) {
                statusChangeCallback(response);
            });
        }
        function statusChangeCallback(response) {
            // for FB.getLoginStatus().
            if (response.status === 'connected') {
            // Logged into your app and Facebook.
            window.location.href="<?= site_url() ?>";
            testAPI();
            } 
        }
        
        



//  Form validation with ajax


</script>




