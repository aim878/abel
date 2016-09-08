<?php $page = 'register'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Register With Us | ABEL Driving School</title>
<meta name="robots" content="noindex, nofollow">
<meta name="title" content="Register With Us | ABEL Driving School">
<meta name="keywords" content="">
<meta name="description" content="">
<link rel='canonical' href='http://www.abeldriving.co.uk/register.php' />
<meta name="rating" content="General" />
<meta name="language" content="en-US" />
<meta name="dc.language" content="en-US">
<meta name="dc.source" content="http://www.abeldriving.co.uk/register.php">
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
    <h3 >Register</h3>
    <h4><a href="http://abel.ranglerz.com/">Home</a>
      <label>/</label>
      Register</h4>
    <div class="clearfix"> </div>
  </div>
</div>

<div class="login">
  <div class="main-agileits">
    <div class="form-w3agile form1">
      <h3>Register</h3>
      <p style="color:#F00;">All fields are required.</p>
      <br/>
      <form action="" method="post">
        <div class="key"> <i class="fa fa-user" aria-hidden="true"></i>
          <input type="text" name="name" placeholder="Complete Name" required>
          <div class="clearfix"></div>
        </div>
        <div class="key"> <i class="fa fa-envelope" aria-hidden="true"></i>
          <input type="email" name="email" placeholder="E-mail" required>
          <div class="clearfix"></div>
        </div>
        <div class="key"> <i class="fa fa-lock" aria-hidden="true"></i>
          <input type="password" name="password" placeholder="Password" required>
          <div class="clearfix"></div>
        </div>
        <div class="form-group">
        <div class="col-md-3">
        <input type="radio" name="gender" value="Male" checked style="outline:none;" /> Male
        </div>
        <input type="radio" name="gender" value="Female" style="outline:none;" /> Female
        <div class="clearfix"></div>
        </div>
        <div class="key"> <i class="fa fa-phone" aria-hidden="true"></i>
          <input type="text" name="contact" placeholder="Contact No" required>
          <div class="clearfix"></div>
        </div>
		<div class="form-group">
        	<input type="checkbox" name="termsCheck" style="outline:none;" required /> I have read and agree to the <a href="" target="_blank">Terms & Conditions</a>.
        </div>
        <br/>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>
<!--footer--> 

<?php include('footer.php'); ?>

<!-- //footer--> 
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

</body>
</html>
