<?php $page = 'contact'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Contact Us | ABEL Driving School</title>
<meta name="robots" content="noindex, nofollow">
<meta name="title" content="Contact Us | ABEL Driving School">
<meta name="keywords" content="">
<meta name="description" content="">
<link rel='canonical' href='http://www.abeldriving.co.uk/contact.php' />
<meta name="rating" content="General" />
<meta name="language" content="en-US" />
<meta name="dc.language" content="en-US">
<meta name="dc.source" content="http://www.abeldriving.co.uk/contact.php">
<meta name="googlebot" content="noodp">
<meta name="author" content="ABEL Driving School, info@abeldriving.co.uk">
<link rel="shortcut icon" type="image/x-icon" href="img/icons/favicon.ico">

<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href="css/font-awesome.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
<?php include('header.php'); ?>

<!--banner-->
<div class="banner-top">
  <div class="container">
    <h3 >Contact</h3>
    <h4><a href="http://abel.ranglerz.com/">Home</a>
      <label>/</label>
      Contact Us</h4>
    <div class="clearfix"> </div>
  </div>
</div>

<!-- contact -->
<div class="contact">
  <div class="container">
    <div class="spec ">
      <h3>Contact</h3>
      <div class="ser-t"> <b></b> <span><i></i></span> <b class="line"></b> </div>
    </div>
    <div class=" contact-w3">
      <div class="col-md-5 contact-right"> <!--<img src="img/contact-img.jpg" class="img-responsive" alt="">-->
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d152080.5518281738!2d-2.299877!3d53.445963!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487badda92df0e15%3A0x352641165eb6b0b9!2s13+Hillingdon+Rd%2C+Stretford%2C+Manchester+M32+8PB%2C+UK!5e0!3m2!1sen!2sus!4v1469720140886" style="border:0" allowfullscreen></iframe>
        <div>&nbsp;</div>
        <h3>Download Our Apps</h3>
        <div>&nbsp;</div>
        <a href="" target="_blank"><img src="img/google-play.png" alt="" width="40%" style="margin-right:15px;" /></a>
        <a href="" target="_blank"><img src="img/app-store.png" alt="" width="40%" /></a>
      </div>
      <div class="col-md-7 contact-left">
        <h4>Contact Information</h4>
        <p> All our driving instructors are trained to DVLA standards and undergo regular training courses to ensure that they adhere to the strict criterion set by the DVLA. We also have a number of instructors who are Grade 6 instructors, the highest grade possible for driving instructors.</p>
        <ul class="contact-list">
          <li> <i class="fa fa-map-marker" aria-hidden="true"></i> 13 Hillingdon Road, Stretford </li>
          <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@abeldriving.co.uk">info@abeldriving.co.uk</a></li>
          <li> <i class="fa fa-phone" aria-hidden="true"></i>0161 610 3295</li>
        </ul>
        <div id="container"> 
          <!--Horizontal Tab-->
          <div id="parentHorizontalTab">
            <ul class="resp-tabs-list hor_1">
              <li><i class="fa fa-envelope" aria-hidden="true"></i></li>
              <li> <i class="fa fa-map-marker" aria-hidden="true"></i> </span></li>
              <li> <i class="fa fa-phone" aria-hidden="true"></i></li>
            </ul>
            <div class="resp-tabs-container hor_1">
              <div>
                <form action="contact-mail.php" method="post">
                  <input type="text" name="name" placeholder="Complete Name" required>
                  <input type="email" name="email" placeholder="E-mail" required>
                  <textarea name="message" placeholder="Message" required></textarea>
                  <input type="submit" value="Submit" >
                </form>
              </div>
              <div>
                <div class="map-grid">
                  <h5>Our Address</h5>
                  <ul>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i>13 Hillingdon Road Stretford Manchester M32 8PB</li>
                  </ul>
                </div>
              </div>
              <div>
                <div class="map-grid">
                  <h5>Contact Us Through</h5>
                  <ul>
                    <li>Mobile No : 0161 610 3295</li>
                    <li>Office No : 07940 783364</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!--Plug-in Initialisation--> 
        <script type="text/javascript">
				$(document).ready(function() {
					//Horizontal Tab
					$('#parentHorizontalTab').easyResponsiveTabs({
						type: 'default', //Types: default, vertical, accordion
						width: 'auto', //auto or any width like 600px
						fit: true, // 100% fit in a container
						tabidentify: 'hor_1', // The tab groups identifier
						activate: function(event) { // Callback function if tab is switched
							var $tab = $(this);
							var $info = $('#nested-tabInfo');
							var $name = $('span', $info);
							$name.text($tab.text());
							$info.show();
						}
					});

					// Child Tab
					$('#ChildVerticalTab_1').easyResponsiveTabs({
						type: 'vertical',
						width: 'auto',
						fit: true,
						tabidentify: 'ver_1', // The tab groups identifier
						activetab_bg: '#fff', // background color for active tabs in this group
						inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
						active_border_color: '#c1c1c1', // border color for active tabs heads in this group
						active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
					});

					//Vertical Tab
					$('#parentVerticalTab').easyResponsiveTabs({
						type: 'vertical', //Types: default, vertical, accordion
						width: 'auto', //auto or any width like 600px
						fit: true, // 100% fit in a container
						closed: 'accordion', // Start closed if in accordion view
						tabidentify: 'hor_1', // The tab groups identifier
						activate: function(event) { // Callback function if tab is switched
							var $tab = $(this);
							var $info = $('#nested-tabInfo2');
							var $name = $('span', $info);
							$name.text($tab.text());
							$info.show();
						}
					});
				});
			</script> 
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>

<!-- tabs --> 
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script> 
<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
			type: 'default', //Types: default, vertical, accordion           
			width: 'auto', //auto or any width like 600px
			fit: true   // 100% fit in a container
			});
		});				
	</script> 
<!-- //tabs --> 
<!-- smooth scrolling --> 
<script type="text/javascript">
		$(document).ready(function() {						
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script> 
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a> 
<!-- //smooth scrolling --> 
<!-- for bootstrap working --> 
<script src="js/bootstrap.js"></script> 
<!-- //for bootstrap working -->

</body>
</html>
