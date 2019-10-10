<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$CI =& get_instance();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="<?=base_url(). 'public/';?>"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>uiCookies:Stack &mdash; Free Bootstrap Theme, Free Website Template</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,700">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <!-- Fixed navbar -->
    
    
    <nav class="navbar navbar-default navbar-fixed-top probootstrap-navbar">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html" title="uiCookies:Stack">Stack</a>
        </div>

        <div id="navbar-collapse" class="navbar-collapse collapse">
          <?php $CI->load->view('top_menu'); ?>
        </div>
      </div>
    </nav>

    <section class="flexslider">
      <ul class="slides">
        
        <li style="background-image: url(img/slider_3.jpg)" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="probootstrap-slider-text text-center">
                  <h1 class="probootstrap-heading">Get In Touch</h1>
                  <p class="probootstrap-subheading">Let's have a chat</p>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </section>

    <section class="probootstrap-section probootstrap-bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-5 probootstrap-animate" data-animate-effect="fadeIn">
            <h2>Drop us a line</h2>
            <?php if ($result) { ?>
              資料已送出
            <?php } else { ?>
            <form action="/home/docontact" method="post" class="probootstrap-form">
              <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" id="name" name="name">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
              </div>
              <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea cols="30" rows="10" class="form-control" id="message" name="message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Submit Form">
              </div>
            </form>
            <?php } ?>

          </div>
          <div class="col-md-6 col-md-push-1 probootstrap-animate" data-animate-effect="fadeIn">
            <h2>Get in touch</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
            
            <h4>USA</h4>
            <ul class="probootstrap-contact-info">
              <li><i class="icon-pin"></i> <span>198 West 21th Street, Suite 721 New York NY 10016</span></li>
              <li><i class="icon-email"></i><span>info@domain.com</span></li>
              <li><i class="icon-phone"></i><span>+123 456 7890</span></li>
            </ul>
            
            <h4>Europe</h4>
            <ul class="probootstrap-contact-info">
              <li><i class="icon-pin"></i> <span>198 West 21th Street, Suite 721 New York NY 10016</span></li>
              <li><i class="icon-email"></i><span>info@domain.com</span></li>
              <li><i class="icon-phone"></i><span>+123 456 7890</span></li>
            </ul>
          </div>
        </div>
      </div>
    </section>   
  
    
    <footer class="probootstrap-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="probootstrap-footer-widget">
              <h3>Paragraph</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
              <ul class="probootstrap-footer-social">
                <li><a href="#"><i class="icon-twitter"></i></a></li>
                <li><a href="#"><i class="icon-facebook"></i></a></li>
                <li><a href="#"><i class="icon-github"></i></a></li>
                <li><a href="#"><i class="icon-dribbble"></i></a></li>
                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                <li><a href="#"><i class="icon-youtube"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-4">
                <div class="probootstrap-footer-widget">
                  <h3>Links</h3>
                  <ul>
                    <li><a href="#">Knowledge Base</a></li>
                    <li><a href="#">Career</a></li>
                    <li><a href="#">Press Releases</a></li>
                    <li><a href="#">Terms of services</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-4">
                <div class="probootstrap-footer-widget">
                  <h3>Links</h3>
                  <ul>
                    <li><a href="#">Knowledge Base</a></li>
                    <li><a href="#">Career</a></li>
                    <li><a href="#">Press Releases</a></li>
                    <li><a href="#">Terms of services</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-4">
                <div class="probootstrap-footer-widget">
                  <h3>Links</h3>
                  <ul>
                    <li><a href="#">Knowledge Base</a></li>
                    <li><a href="#">Career</a></li>
                    <li><a href="#">Press Releases</a></li>
                    <li><a href="#">Terms of services</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          
          
        </div>
        <!-- END row -->
        <div class="row">
          <div class="col-md-12 copyright">
            <p><small>&copy; 2017 <a href="https://uicookies.com/">uiCookies:Stack</a>. All Rights Reserved. <br> Designed &amp; Developed with <i class="icon icon-heart"></i> by <a href="https://uicookies.com/">uicookies.com</a></small></p>
          </div>
        </div>
      </div>
    </footer>
    
  
    <!-- Modal login -->
    <div class="modal fadeInUp probootstrap-animated" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
      <div class="vertical-alignment-helper">
        <div class="modal-dialog modal-md vertical-align-center">
          <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-cross"></i></button>
            <div class="probootstrap-modal-flex">
              <div class="probootstrap-modal-figure" style="background-image: url(img/modal_bg.jpg);"></div>
              <div class="probootstrap-modal-content">
                <form action="#" class="probootstrap-form">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email">
                  </div> 
                  <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password">
                  </div> 
                  <div class="form-group clearfix mb40">
                    <label for="remember" class="probootstrap-remember"><input type="checkbox" id="remember"> Remember Me</label>
                    <a href="#" class="probootstrap-forgot">Forgot Password?</a>
                  </div>
                  <div class="form-group text-left">
                    <div class="row">
                      <div class="col-md-6">
                        <input type="submit" class="btn btn-primary btn-block" value="Sign In">
                      </div>
                    </div>
                  </div>
                  <div class="form-group probootstrap-or">
                    <span><em>or</em></span>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-12">
                        <button class="btn btn-primary btn-ghost btn-block btn-connect-facebook"><span>connect with</span> Facebook</button>
                        <button class="btn btn-primary btn-ghost btn-block btn-connect-google"><span>connect with</span> Google</button>
                        <button class="btn btn-primary btn-ghost btn-block btn-connect-twitter"><span>connect with</span> Twitter</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END modal login -->
    
    <!-- Modal signup -->
    <div class="modal fadeInUp probootstrap-animated" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
      <div class="vertical-alignment-helper">
        <div class="modal-dialog modal-md vertical-align-center">
          <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-cross"></i></button>
            <div class="probootstrap-modal-flex">
              <div class="probootstrap-modal-figure" style="background-image: url(img/modal_bg.jpg);"></div>
              <div class="probootstrap-modal-content">
                <form action="#" class="probootstrap-form">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email">
                  </div> 
                  <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password">
                  </div> 
                  <div class="form-group">
                    <input type="password" class="form-control" placeholder="Re-type Password">
                  </div> 
                  <div class="form-group clearfix mb40">
                    <label for="remember" class="probootstrap-remember"><input type="checkbox" id="remember"> Remember Me</label>
                    <a href="#" class="probootstrap-forgot">Forgot Password?</a>
                  </div>
                  <div class="form-group text-left">
                    <div class="row">
                      <div class="col-md-6">
                        <input type="submit" class="btn btn-primary btn-block" value="Sign Up">
                      </div>
                    </div>
                    
                  </div>
                  <div class="form-group probootstrap-or">
                    <span><em>or</em></span>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-12">
                        <button class="btn btn-primary btn-ghost btn-block btn-connect-facebook"><span>connect with</span> Facebook</button>
                        <button class="btn btn-primary btn-ghost btn-block btn-connect-google"><span>connect with</span> Google</button>
                        <button class="btn btn-primary btn-ghost btn-block btn-connect-twitter"><span>connect with</span> Twitter</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END modal signup -->

    <script src="js/scripts.min.js"></script>
    <script src="js/custom.min.js"></script>

  </body>
</html>