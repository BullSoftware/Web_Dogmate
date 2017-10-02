<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DogMate</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- =======================================================
        Theme Name: Mentor
        Theme URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
        Author: BootstrapMade.com
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>
  <body>
    <!--Navigation bar-->
    <nav class="navbar navbar-default navbar-fixed-top ">
      <div class="container">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">dog<span>mate</span></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li class="btn-trial"><a href="" data-target="#login" data-toggle="modal" >로그인</a></li>
        </ul>
        </div>
      </div>
    </nav>
    <!--/ Navigation bar-->

    <!--Sing Up body-->
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title text-center form-title">회원가입</h4>
          </div>
          <div class="modal-body padtrbl">

            <div class="login-box-body">
              <p class="login-box-msg">아래의 빈칸을 채워주세요!</p>
              <div class="form-group">
                <form name="" id="loginForm">

                 <div class="form-group has-feedback"> <!----- username -------------->
                        <input class="form-control" placeholder="ID(E-mail 형식)"  id="sign_up_id" type="text" autocomplete="off" /> 
                        <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span><!---Alredy exists  ! -->
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                  </div>

                  <div class="form-group has-feedback"><!----- password -------------->
                        <input class="form-control" placeholder="Password" id="sign_up_psw_one" type="password" autocomplete="off" />
                        <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span><!---Alredy exists  ! -->
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  </div>

                  <div class="form-group has-feedback"><!----- password -------------->
                        <input class="form-control" placeholder="Password Confirm" id="sign_up_psw_two" type="password" autocomplete="off" />
                        <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span><!---Alredy exists  ! -->
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  </div>

                  <div class="row">
                    <br>
                    <div class="col-xs-12">
                      <a href="sign_up.php"><button type="button" class="btn btn-green2 btn-block btn-flat" >회원가입</button></a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!--Sing Up body-->

    <!--login Modal box-->
    <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog modal-sm">
        <!-- Modal content no 1-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title text-center form-title">로그인</h4>
          </div>
          <div class="modal-body padtrbl">

            <div class="login-box-body">
              <p class="login-box-msg">로그인 해주세요!</p>
              <div class="form-group">
                <form name="" id="loginForm">
                 <div class="form-group has-feedback"> <!----- username -------------->
                      <input class="form-control" placeholder="Username"  id="loginid" type="text" autocomplete="off" /> 
            <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span><!---Alredy exists  ! -->
                      <span class="glyphicon glyphicon-user form-control-feedback"></span>
                  </div>
                  <div class="form-group has-feedback"><!----- password -------------->
                      <input class="form-control" placeholder="Password" id="loginpsw" type="password" autocomplete="off" />
            <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span><!---Alredy exists  ! -->
                      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  </div>
                  <div class="row">
                      <div class="col-xs-12">
                          <div class="checkbox icheck">
                              <label>
                                <input type="checkbox" id="loginrem" > 아이디 저장
                              </label>
                          </div>
                      </div>
                    <div class="col-xs-12">
                        <button type="button" class="btn btn-green2 btn-block btn-flat" onclick="userlogin()">확인</button>
                    </div>
                    <br>
                    <div class="col-xs-12">
                      <a href="sign_up.php"><button type="button" class="btn btn-green2 btn-block btn-flat" >회원가입</button></a>
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
    <!--/ Modal box-->

    <!--Footer-->
    <footer id="footer" class="footer">
      <div class="container text-center">
    
      <h3>Start Your Free Trial Now!</h3>

      <ul class="social-links">
        <li><a href="#link"><i class="fa fa-twitter fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-facebook fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-google-plus fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-dribbble fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-linkedin fa-fw"></i></a></li>
      </ul>
        ©2017 Dogmate. All rights reserved
        <div class="credits">
            <!-- 
                All the links in the footer should remain intact. 
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Mentor
            -->
            Designed by <a href="https://bootstrapmade.com/">Free Bootstrap Themes</a>
        </div>
      </div>
    </footer>
    <!--/ Footer-->
    
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>
    
    <!-- 챗봇 -->
    <script>
      window.channelPluginSettings = {
        "plugin_id": "71b6cccb-1322-4495-87ea-6ece3dd65b48"
      };
      (function() {
        var node = document.createElement('div');
        node.id = 'ch-plugin';
        document.body.appendChild(node);
        var async_load = function() {
          var s = document.createElement('script');
          s.type = 'text/javascript';
          s.async = true;
          s.src = '//cdn.channel.io/plugin/ch-plugin-web.js';
          s.charset = 'UTF-8';
          var x = document.getElementsByTagName('script')[0];
          x.parentNode.insertBefore(s, x);
        };
        if (window.attachEvent) {
          window.attachEvent('onload', async_load);
        } else {
          window.addEventListener('load', async_load, false);
        }
      })();
    </script>

  </body>
</html>