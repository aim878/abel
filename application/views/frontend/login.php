<?php $page = 'login'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Login | ABEL Driving School</title>
<meta name="robots" content="noindex, nofollow">
<meta name="title" content="Login | ABEL Driving School">
<meta name="keywords" content="">
<meta name="description" content="">
<link rel='canonical' href='http://www.abeldriving.co.uk/login.php' />
<meta name="rating" content="General" />
<meta name="language" content="en-US" />
<meta name="dc.language" content="en-US">
<meta name="dc.source" content="http://www.abeldriving.co.uk/login.php">
<meta name="googlebot" content="noodp">
<meta name="author" content="ABEL Driving School, info@abeldriving.co.uk">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>frontend/img/icons/favicon.ico">

<!-- //for-mobile-apps -->
<link href="<?php echo base_url() ?>frontend/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="<?php echo base_url() ?>frontend/css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
<script src="<?php echo base_url() ?>frontend/js/jquery-1.11.1.min.js"></script>
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
<script type="text/javascript">
$(document).ready( function() {
 
  //Login 
  $(".forgot-pwd").click(function(){
   $(".login").hide('slow');
   $(".forgot_pwd_main").show('slow');
  });
  
  $(".remember-pwd").click(function(){
   $(".forgot_pwd_main").hide('slow');
   $(".login").show('slow');
  });
  
});
</script>
<!-- start-smoth-scrolling -->
<link href="<?php echo base_url() ?>frontend/css/font-awesome.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
<?php include('includes/header.php'); ?>

<!--banner-->
<div class="banner-top">
  <div class="container">
    <h3 >Login</h3>
    <h4><a href="http://abel.ranglerz.com/">Home</a>
      <label>/</label>
      Login</h4>
    <div class="clearfix"> </div>
  </div>
</div>
<!--login-->

<div class="login">
  <div class="main-agileits">
    <div class="form-w3agile">
      <h3>Login</h3>
      <form action="" method="post">
        <div class="key"> <i class="fa fa-envelope" aria-hidden="true"></i>
          <input type="email" name="email" placeholder="E-mail" required>
          <div class="clearfix"></div>
        </div>
        <div class="key"> <i class="fa fa-lock" aria-hidden="true"></i>
          <input type="password" name="Password" placeholder="********" required>
          <div class="clearfix"></div>
        </div>
        <input type="submit" value="Login">
      </form>
    </div>
    <div class="forg"> <a href="javascript:;" class="forg-left forgot-pwd">Forgot Password?</a> <a href="register.php" class="forg-right">New User?</a>
      <div class="clearfix"></div>
    </div>
  </div>
</div>


<!-- Forgot Password -->
<div class="forgot_pwd_main" style="display:none;">
<div class="login2">
  <div class="main-agileits">
    <div class="form-w3agile">
      <h3>Forgot Password</h3>
      <form action="" method="post">
        <div class="key"> <i class="fa fa-envelope" aria-hidden="true"></i>
          <input type="email" name="email" placeholder="E-mail" required>
          <div class="clearfix"></div>
        </div>
        <input type="submit" value="Send Request">
      </form>
    </div>
    <div class="forg"> <a href="javascript:;" class="forg-left remember-pwd">Remember Password?</a> <a href="register.php" class="forg-right">New User?</a>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
</div>

<?php include('includes/footer.php'); ?>

<!-- smooth scrolling --> 
<script type="text/javascript">
		$(document).ready(function() {								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script> 
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a> 
<!-- //smooth scrolling --> 
<!-- for bootstrap working --> 
<script src="<?php echo base_url() ?>frontend/js/bootstrap.js"></script> 
<!-- //for bootstrap working --> 

</body>
</html>
