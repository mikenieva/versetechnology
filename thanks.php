<?php 
if(isset($_POST['submit'])){
    $to = "hi@verse-technology.com"; // this is your Email address contacto@verse-business.com
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $cellphone = $_POST['cellphone'];
    $subject = "ARGOS";
    $message =  "Nombre completo: ".$name . "\n\n".
                "Correo: " . $from. "\n\n" .
                "Celular: " . $cellphone. "\n\n" . 
                $_POST['message'];

    $headers = "From:" . $from;
    $message = mb_convert_encoding($message, "ISO-8859-1","AUTO");
    $subject = mb_convert_encoding($subject, "ISO-8859-1","AUTO");
    header('Content-Type: text/html;charset=UTF-8');
    mail($to,$subject,$message,$headers);
    }
?>

<!DOCTYPE html>
<html lang="es" ng-app="app">
<head>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta charset="UTF-8">
    <title>VERSE Technology</title>
    <link href="css/Normalize/normalize.css" rel="stylesheet">
    <link href="css/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/Bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/Pop-Up/magnific-popup.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/mobile.css" rel="stylesheet">
    <link href="css/font-verse.css" rel="stylesheet">
    <link href="css/build.css" rel="stylesheet">
    <link href="images/favicon.ico" rel="shortcut icon" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.2/angular.min.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-98320505-5', 'auto');
      ga('send', 'pageview');
  </script>
  
  <!-- Facebook Pixel Code -->
  <script>
  !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
  n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
  document,'script','https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '554650828259573'); // Insert your pixel ID here.
  fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=554650828259573&ev=PageView&noscript=1"
  /></noscript>
  <!-- DO NOT MODIFY -->
  <!-- End Facebook Pixel Code -->

  <!-- event fb -->
  <!--<script>
  fbq('track', 'CompleteRegistration', {
  value: 25.00,
  currency: 'USD'
  });
  </script>-->
  <!-- end event fb -->

  <!-- Add event to the button's click handler -->
    <script type="text/javascript">
    $( '#addToRegistrationButton' ).click(function() {
    fbq('track', 'CompleteRegistration', {
    value: 25.00,
    currency: 'USD'
    });
    });
    </script>

</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="border-bottom: none; background-color: #08142E">
        <div class="container" style="background-color: none;">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button class="navbar-toggle" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
                <div class="col-xs-6 col-sm-2">
                    <a class="navbar-brand" href="https://verse-technology.com/" style="width:100%">
                        <img alt="" class="logoImg" src="images/Logo.png">
                    </a>
                </div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav" style="padding-right: 15px;">
                    <li>
                        <a href="/hardware" style="text-align: center;">Hardware</a>
                    </li>
                    <li>
                        <a href="/engineering" style="text-align: center;">Engineering</a>
                    </li>
                    <li>
                        <a href="/investment" style="text-align: center;">Investment</a>
                    </li>
                    <!--<li><a href="/en" style="text-align: center;"><img src="images/united-states.png"></a></li>-->
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>

        <section style="padding: 180px 0px 100px 0px;">
            <div class="" style="background-color: #FFFFFF">
                <div class="row clearfix">
                    <div class="col-xs-12">
                        <div class="col-xs-12">
                            <h3 class="thanks">Thanks!</h3>
                            <p class="thankstext">Thank you for your interest in our product. You will get more information about this products very soon.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="hidden-xs" style="background-color: #1B1D1F; padding: 20px;">
            <div class="row clearfix" style="padding: 0;">
                <div class="col-xs-12 no-pad" style="border-bottom: 1px solid #C8C8C8; padding: 50px 0px 25px 0px;">
                    <div class="col-xs-12 col-sm-3 SubFooter" style=" padding-left: 50px;">
                        <p class="vsp" style="font-size: 20px !important; margin-bottom: 5px;">VERSE <b>Technology</b></p>
                        <p class="vsp">VERSE Technology</p>
                        <p class="vsp">Insurgentes Sur 859</p>
                        <p class="vsp">Nápoles | 03810 | Benito Juárez</p>
                        <p class="vsp">Ciudad de México</p>
                        </br>
                        </br>
                        </br>
                        <p class="vsp" style="margin-top: 20px;"><span class="copyright"> 2017 VERSE-technology</p>
                    </div>
                    <div class="col-xs-12 col-sm-3 SubFooter" style="padding-left: 50px;">
                        <p class="vsp" style="font-size: 13px !important; margin: 2.5px 0px;"><b>COMPANY</b></p>
                        <p class="vsp">(+52) 1 55 4122 0131</p>
                        <p class="vsp">hi@verse-technology.com</p>
                        <a href="https://medium.com/@VERSETechnology" target="_blank"><p class="vsp">Blog</p></a>
                        <a href="/investment"><p class="vsp">Investment</p></a>
                        </br>
                        </br>
                        </br>
                        <p class="vsp" style="margin-top: 17px;">Privacy Policy</p>
                    </div>
                    <div class="col-xs-12 col-sm-3 SubFooter" style="padding-left: 50px;">
                        <p class="vsp" style="font-size: 13px !important; margin: 2.5px 0px;"><b>HARDWARE</b></p>
                        <a href="/goblin2"><p class="vsp">GOBLIN 2</p></a>
                        <a href="/goblin2plus"><p class="vsp">GOBLIN 2 Plus</p></a>
                        <a href="/goblin2plussigfox"><p class="vsp">GOBLIN 2 Plus Sigfox</p></a>
                        <p class="vsp" style="font-size: 13px !important; margin: 20px 0px 2.5px 0px;"><b>ENGINEERING</b></p>
                        <a href="/kraken"><p class="vsp" style="padding-top: 10px;">Water monitoring</p></a>
                        <a href="/golem"><p class="vsp">Smart irrigation</p></a>
                        <a href="/oni"><p class="vsp">Humidity & Temperature</p></a>
                        <a href="/argos"><p class="vsp">Tracking & Logistics</p>
                    </div>
                    <div class="col-xs-12 col-sm-3 SubFooter" style="padding-left: 50px;">
                        <p class="vsp" style="font-size: 13px !important; margin: 2.5px 0px;"><b>FIND US</b></p>
                        <ul class="socials">
                            <li>
                                <a href="https://www.facebook.com/versetechnology/" target="_blank"><i class="gv-facebook-03"></i><p class="vsp" style="display: inline-block; position: absolute; margin-top: 5px;">Facebook</p></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/VERSETechnology" target="_blank"><i class="gv-twitter-03"></i><p class="vsp" style="display: inline-block; position: absolute; margin-top: 5px;">Twitter</p></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/verse_technology"><i class="gv-instagram-03 footer1"></i><p class="vsp" style="display: inline-block; position: absolute; margin-top: 5px;">Instagram</p></a></li>
                            <li>
                                <a href="https://www.youtube.com/channel/UCoU72-E8t9C-9hKWhJuK80g"><i class="gv-youtube-03 footer1"></i><p class="vsp" style="display: inline-block; position: absolute; margin-top: 5px;">Youtube</p></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix" style="padding: 0;">
                <div class="col-xs-12 no-pad" style="padding: 25px 0px 35px 0px; text-align: center;">
                    <div class="col-xs-12 SubFooter">
                        <a href="https://www.grupoverse.com" target="_blank"><p class="vsp" style="font-size: 16px !important;">VERSE</p></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end footer -->
    <section class="hidden-xs" style="background-color: #1B1D1F; padding: 20px;">
            <div class="row clearfix" style="padding: 0;">
                <div class="col-xs-12 no-pad" style="border-bottom: 1px solid #C8C8C8; padding: 50px 0px 25px 0px;">
                    <div class="col-xs-12 col-sm-3 SubFooter" style=" padding-left: 50px;">
                        <p class="vsp" style="font-size: 20px !important; margin-bottom: 5px;">VERSE <b>Technology</b></p>
                        <p class="vsp">VERSE Technology</p>
                        <p class="vsp">Insurgentes Sur 859</p>
                        <p class="vsp">Nápoles | 03810 | Benito Juárez</p>
                        <p class="vsp">Ciudad de México</p>
                        </br>
                        </br>
                        </br>
                        <p class="vsp" style="margin-top: 20px;"><span class="copyright"> 2017 VERSE-technology</p>
                    </div>
                    <div class="col-xs-12 col-sm-3 SubFooter" style="padding-left: 50px;">
                        <p class="vsp" style="font-size: 13px !important; margin: 2.5px 0px;"><b>COMPANY</b></p>
                        <p class="vsp">(+52) 1 55 4122 0131</p>
                        <p class="vsp">hi@verse-technology.com</p>
                        <a href="https://medium.com/@VERSETechnology" target="_blank"><p class="vsp">Blog</p></a>
                        <a href="/investment"><p class="vsp">Investment</p></a>
                        </br>
                        </br>
                        </br>
                        <p class="vsp" style="margin-top: 17px;">Privacy Policy</p>
                    </div>
                    <div class="col-xs-12 col-sm-3 SubFooter" style="padding-left: 50px;">
                        <p class="vsp" style="font-size: 13px !important; margin: 2.5px 0px;"><b>HARDWARE</b></p>
                        <a href="/goblin2"><p class="vsp">GOBLIN 2</p></a>
                        <a href="/goblin2plus"><p class="vsp">GOBLIN 2 Plus</p></a>
                        <a href="/goblin2plussigfox"><p class="vsp">GOBLIN 2 Plus Sigfox</p></a>
                        <p class="vsp" style="font-size: 13px !important; margin: 20px 0px 2.5px 0px;"><b>ENGINEERING</b></p>
                        <a href="/kraken"><p class="vsp" style="padding-top: 10px;">Water monitoring</p></a>
                        <a href="/golem"><p class="vsp">Smart irrigation</p></a>
                        <a href="/oni"><p class="vsp">Temperature & Humidity</p></a>
                        <a href="/argos"><p class="vsp">Tracking & Logistics</p>
                    </div>
                    <div class="col-xs-12 col-sm-3 SubFooter" style="padding-left: 50px;">
                        <p class="vsp" style="font-size: 13px !important; margin: 2.5px 0px;"><b>FIND US</b></p>
                        <ul class="socials">
                            <li>
                                <a href="https://www.facebook.com/versetechnology/" target="_blank"><i class="gv-facebook-03"></i><p class="vsp" style="display: inline-block; position: absolute; margin-top: 5px;">Facebook</p></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/VERSETechnology" target="_blank"><i class="gv-twitter-03"></i><p class="vsp" style="display: inline-block; position: absolute; margin-top: 5px;">Twitter</p></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/verse_technology"><i class="gv-instagram-03 footer1"></i><p class="vsp" style="display: inline-block; position: absolute; margin-top: 5px;">Instagram</p></a></li>
                            <li>
                                <a href="https://www.youtube.com/channel/UCoU72-E8t9C-9hKWhJuK80g"><i class="gv-youtube-03 footer1"></i><p class="vsp" style="display: inline-block; position: absolute; margin-top: 5px;">Youtube</p></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix" style="padding: 0;">
                <div class="col-xs-12 no-pad" style="padding: 25px 0px 35px 0px; text-align: center;">
                    <div class="col-xs-12 SubFooter">
                        <a href="https://www.grupoverse.com" target="_blank"><p class="vsp" style="font-size: 16px !important;">VERSE</p></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end footer -->
        <section class="visible-xs" style="background-color: #1B1D1F; padding: 20px;">
            <div class="row clearfix" style="padding: 0;">
                <div class="col-xs-12 no-pad" style="padding: 30px 0px 25px 0px;">
                    <p class="menucollapse">
                      <a class="btn btn-collapse" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        COMPANY
                      </a>
                    </p>
                    <div class="collapse" id="collapseExample">
                      <div class="card card-body">
                        <p class="vsp" style="padding-top: 20px;">(+52) 1 55 4122 0131</p>
                        <p class="vsp">hi@verse-technology.com</p>
                        <a href="https://medium.com/@VERSETechnology" target="_blank"><p class="vsp">Blog</p></a>
                        <a href="/investment"><p class="vsp">Investment</p></a>
                        <p class="vsp">Privacy Policy</p>
                      </div>
                    </div>
                    <p class="menucollapse">
                      <a class="btn btn-collapse" href="/hardware" aria-expanded="false">
                        HARDWARE
                      </a>
                    </p>
                    <div class="collapse" id="collapseExample1">
                      <div class="card card-body">
                        <a href="/goblin2"><p class="vsp" style="padding-top: 20px;">GOBLIN 2</p></a>
                        <a href="/goblin2plus"><p class="vsp">GOBLIN 2 Plus</p></a>
                        <a href="/goblin2plussigfox"><p class="vsp">GOBLIN 2 Plus Sigfox</p></a>
                      </div>
                    </div>
                    <p class="menucollapse">
                      <a class="btn btn-collapse" href="/engineering" aria-expanded="false">
                        ENGINEERING
                      </a>
                    </p>
                    <div class="collapse" id="collapseExample2">
                      <div class="card card-body">
                            <a href="/kraken"><p class="vsp" style="padding-top: 10px;">Water</p></a>
                            <a href="/golem"><p class="vsp">Agriculture</p></a>
                            <a href="/oni"><p class="vsp">Humidity & Temperature</p></a>
                            <a href="/argos"><p class="vsp">Tracking & Logistics</p></a>
                      </div>
                    </div>
                    <div class="col-xs-12 SubFooter" style="border-bottom: 1px solid #C8C8C8; padding: 0px;">
                        <div class="col-xs-3 redes">
                            <a href="https://www.facebook.com/versetechnology/" target="_blank"><i class="gv-facebook-03 redescolor"></i><p class="vsp" style="display: inline-block; position: absolute;"></p></a>
                        </div>
                        <div class="col-xs-3 redes">
                            <a href="https://twitter.com/VERSETechnology" target="_blank"><i class="gv-twitter-03 redescolor"></i><p class="vsp" style="display: inline-block; position: absolute;"></p></a>
                        </div>
                        <div class="col-xs-3 redes">
                            <a href="https://www.instagram.com/verse_technology"><i class="gv-instagram-03 redescolor"></i><p class="vsp" style="display: inline-block; position: absolute;"></p></a>
                        </div>
                        <div class="col-xs-3 redes">
                            <a href="https://www.youtube.com/channel/UCoU72-E8t9C-9hKWhJuK80g"><i class="gv-youtube-03 redescolor"></i><p class="vsp" style="display: inline-block; position: absolute;"></p></a>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <a href="https://www.grupoverse.com" target="_blank"><p class="menucollapse btn-collapse" style="border-bottom: none;">VERSE</p></a>
                    </div>
                </div>
            </div>
        </section>
        </div><!--div main-->
    </div><!--div wrapper-->

    <script src="js/Jquery/jquery.min.js" type="text/javascript">
    </script> 
    <script src="js/Bootstrap/bootstrap.min.js" type="text/javascript">
    </script>
    <script src="js/app.js"></script>
    <script src="js/wow.js" type="text/javascript">
    </script> 
    <script src="js/wow-custom.js" type="text/javascript">
    </script> 
    <script src="js/Pop-Up/jquery.magnific-popup.js" type="text/javascript">
    </script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.js" type="text/javascript">
    </script> 
    <script src="https://use.fontawesome.com/06f1165186.js">
    </script>
</body>
</html>