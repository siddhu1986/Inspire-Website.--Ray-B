<?php
session_start();
$user_details = $_SESSION["user_details"];


//$data = file_get_contents("data.csv");

$row = 1;

$headers = array();
$rows = array();
if (($handle = fopen("Ray - data.csv", "r")) !== FALSE)
{
    while (($data = fgetcsv($handle, null, ",")) !== FALSE)
    {
        $num = count($data);
        //echo "<p> $num fields in line $row: <br /></p>\n";
        
        $r = new stdClass();
        //print_r($data);

        if($row==1)
        {
        	$headers = array();
        	for ($c=0; $c < $num; $c++)
	        {
	        	$headers[] = trim($data[$c]);
	            //echo $data[$c] . "<br />\n";
	        }
	        $row++;
	        continue;
        }
        $row++;
        //print_r($headers);

        for ($c=0; $c < $num; $c++)
        {
        	$h = $headers[$c];
        	if($h=="") $h = "speed";
        	$r->$h = $data[$c];
            //echo $data[$c] . "<br />\n";
        }
        if($r->{"Name"}=="") continue;
        $rows[] = $r;

        
    }
    fclose($handle);
}

//print_r($rows);

//print_r($user_details);
?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Inspire Telecom</title>
	<link href="assets/images/favicons/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180" />
	<link href="assets/images/favicons/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png" />
	<link href="assets/images/favicons/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png" />
	<link href="assets/images/favicons/site.webmanifest" rel="manifest" /><!-- plugin scripts -->
	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900&amp;display=swap" rel="stylesheet" />
	<link href="assets/css/animate.min.css" rel="stylesheet" />
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/owl.carousel.min.css" rel="stylesheet" />
	<link href="assets/css/owl.theme.default.min.css" rel="stylesheet" />
	<link href="assets/css/magnific-popup.css" rel="stylesheet" />
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" />
	<link href="assets/css/swiper.min.css" rel="stylesheet" />
	<link href="assets/plugins/dimon-icons/style.css" rel="stylesheet" /><!-- template styles -->
	<link href="assets/css/style.css" rel="stylesheet" />
	<link href="assets/css/responsive.css" rel="stylesheet" />
	<!-- CRISP CODE -->
	<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="56ae66b1-c040-4d1d-a591-a28ae5b11a9c";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
	<!-- END OF CRISP CODE -->
	<!--Call back popup code-->
	<!-- parked code script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-ba2566ea-86bf-4bad-b37b-df671be47bc8"></div> -->
<!-- END OF CALL BACK POPUP CODE -->
   <!-- Meta Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '515152060199933');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=515152060199933&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->

<!-- Start of popup --><script src="https://apps.elfsight.com/p/platform.js" defer></script><!-- End of popup -->
<!-- <div class="elfsight-app-6c1ea643-bf58-4349-9280-bad854259879"></div> -->

<script src="https://code.angularjs.org/1.6.9/angular.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>

<script>
<?php
if(isset($user_details))
{
	echo "var user_details = ".json_encode($user_details). ";\r\n";
}
if(isset($rows))
{
	echo "var mProducts = " . json_encode($rows) . ";\r\n";
}
?>	
</script>
<script src="site.js?a=<?php echo time(); ?>"></script>
<link rel="stylesheet" type="text/css" href="site.css?a=<?php echo time(); ?>" />


<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->


</head>
<body ng-app="DA" ng-controller="DAC">
<div class="page-wrapper">
<header class="site-header site-header__header-one " style="background: #fff;">
<nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
<div class="container clearfix"><!-- Brand and toggle get grouped for better mobile display -->
<div class="logo-box clearfix">
    <a class="navbar-brand" href="home"><img alt="Inspire Telecom" class="main-logo" src="assets/images/resources/logo-dark.png" width="180" /> </a><button class="menu-toggler" data-target=".main-navigation">
        <span class="fa fa-bars"></span>
    </button></div>
<!-- /.logo-box --><!-- Collect the nav links, forms, and other content for toggling -->

<div class="main-navigation">
<ul class="one-page-scroll-menu navigation-box">
	<li class="scrollToLink"></li>
	<li class="scrollToLink"><a href="broadband">Broadband</a>
	<li class="scrollToLink"><a href="phone">Phone</a></li>
	<li class="scrollToLink"><a href="contact-us">Contact Us</a>
	<li class="scrollToLink"><a href="https://www.inspire-business.co.uk">For Business</a></li>
</ul>
</div>
<!-- /.navbar-collapse -->

<div class="right-side-box"><a class="thm-btn header__cta-btn" href="tel:0330 122 9488"><span>Call Now</span></a></div>
</div>
<!-- /.container --></nav>
</header>
<!-- /.site-header -->











<section class="mailchimp-one" style="background: #f3f3f4;">
<div class="container _container">
<div class="block-title text-center">
<!-- <h2 class="block-title__title">Sign Up <span>Now</span></h2> -->
<!-- /.block-title__title --></div>
<!-- /.block-title -->


<!-- Set up your HTML -->
<!-- <div class="owl-carousel">
  <div> Your Content </div>
  <div> Your Content </div>
  <div> Your Content </div>
  <div> Your Content </div>
  <div> Your Content </div>
  <div> Your Content </div>
  <div> Your Content </div>
</div> -->


<div ng-view></div>



<!-- <form action="#" class="mailchimp-one__mc-form mc-form" data-url="https://xyz.us18.list-manage.com/subscribe/post?u=20e91746ef818cd941998c598&amp;id=cc0ee8140e"><input class="formInput" id="mc-email" placeholder="Email address" type="email" /><button type="submit"><i class="dimon-icon-right-arrow"></i></button></form> -->
<!-- /.mailchimp-one__mc-form -->

<div class="mc-form__response"></div>
<!-- /.mc-form__response --></div>
<!-- /.container --></section>
<!-- /.mailchimp-one -->

<footer class="site-footer">
<div class="site-footer__upper">
<div class="container">
<div class="row">
<div class="col-lg-3">
<div class="footer-widget footer-widget__about"><img alt="" class="footer-widget__logo" src="assets/images/resources/logo-dark.png" width="119" />
<p class="footer-widget__contact"><a href="tel:0330 122 9488">0330 122 9488</a></p>
<!-- /.footer-widget__contact -->

<p class="footer-widget__contact"><a href="mailto:support@inspiretelecom.co.uk">support@inspiretelecom.co.uk</a></p>

<p class="footer-widget__contact">Head Office:<br />
Inspire Telecom,<br />
Alpha House, Laser Quay, Rochester,<br />
Kent, ME2 4HU</p>
<!-- /.footer-widget__contact --></div>
<!-- /.footer-widget --></div>
<!-- /.col-lg-2 -->

<div class="col-lg-6 d-flex justify-content-between footer-widget__links-wrap">
<div class="footer-widget">
<h3 class="footer-widget__title">Support</h3>
<!-- /.footer-widget__title -->

<ul class="footer-widget__links list-unstyled">
	<li><a href="contact-us">Contact Us</a></li>
	<li><a href="complaint-handling-dispute-resolution">Complaints &amp; Dispute Resolution</a></li>
	<li><a href="vulnerable-customers">Elderly &amp; Vulnerable Customers</a></li>
</ul>
<!-- /.footer-widget__links --></div>
<!-- /.footer-widget -->

<div class="footer-widget">
<h3 class="footer-widget__title">Legal</h3>
<!-- /.footer-widget__title -->

<ul class="footer-widget__links list-unstyled">
	<li><a href="privacy-policy">Privacy Policy </a></li>
	<li><a href="terms-and-conditions">Terms &amp; Conditions </a></li>
	<li><a href="code-of-practice">Code of practice </a></li>
</ul>
<!-- /.footer-widget__links --></div>
<!-- /.footer-widget -->

<div class="footer-widget">
<h3 class="footer-widget__title">Accessibility</h3>
<!-- /.footer-widget__title -->

<ul class="footer-widget__links list-unstyled">
	<li><a href="pay-my-bill">Pay My Bill </a></li>
	<li><a href="phone">Phone</a></li>
	<li><a href="broadband">Broadband </a></li>
	<li><a href="mobile">Mobile</a></li>
	<li><a href="https://pay.gocardless.com/AL00031X92WS9W">Direct Debit</a></li>
	<li><a href="careers">Careers</a></li>
</ul>
<!-- /.footer-widget__links --></div>
<!-- /.footer-widget --></div>
<!-- /.col-lg-6 -->

<div class="col-lg-3">
<div class="footer-widget">
<div class="site-footer__social"></div>
<!-- /.site-footer__social --></div>
<!-- /.footer-widget --></div>
<!-- /.col-lg-4 --></div>
<!-- /.row --></div>
<!-- /.container --></div>
<!-- /.site-footer__upper -->

<div class="site-footer__bottom bg-gradient text-white">
<div class="container">
<div class="inner-container text-center">
<p>Inspire Telecom Limited, Alpha House, Laser Quay, Rochester, Kent, ME2 4HU<br />
Registered in England &amp; Wales: 11841822<br />
Copyright &copy;2021 All Rights Reserved</p>
<!-- /.site-footer__copy --></div>
<!-- /.inner-container --></div>
<!-- /.container --></div>
<!-- /.site-footer__bottom --></footer>
<!-- /.site-footer --></div>
<!-- /.page-wrapper -->


<script src="assets/js/jquery.min.js"></script><script src="assets/js/bootstrap.bundle.min.js"></script><script src="assets/js/owl.carousel.min.js"></script><script src="assets/js/waypoints.min.js"></script><script src="assets/js/jquery.counterup.min.js"></script><script src="assets/js/TweenMax.min.js"></script><script src="assets/js/wow.js"></script>




<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/jquery.ajaxchimp.min.js"></script><script src="assets/js/swiper.min.js"></script><script src="assets/js/jquery.easing.min.js"></script>

<!-- template scripts --><script src="assets/js/theme.js"></script><!--Custom Inspire Telecom Script-->

<script src="https://apps.elfsight.com/p/platform.js" defer></script>
</section>





</body>
</html>