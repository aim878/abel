<?php $page = 'faqs'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>FAQs | ABEL Driving School</title>
<meta name="robots" content="noindex, nofollow">
<meta name="title" content="FAQs | ABEL Driving School">
<meta name="keywords" content="">
<meta name="description" content="">
<link rel='canonical' href='http://www.abeldriving.co.uk/faqs.php' />
<meta name="rating" content="General" />
<meta name="language" content="en-US" />
<meta name="dc.language" content="en-US">
<meta name="dc.source" content="http://www.abeldriving.co.uk/faqs.php">
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
<!--- start-rate---->

</head>
<body>
<?php include('header.php'); ?>

<!--banner-->
<div class="banner-top">
  <div class="container">
    <h3 >Faqs</h3>
    <h4><a href="http://abel.ranglerz.com/">Home</a>
      <label>/</label>
      Faqs</h4>
    <div class="clearfix"> </div>
  </div>
</div>
<!-- faqs -->
<div class="faq-w3 main-grid-border">
  <div class="container">
    <div class="spec ">
      <h3>Faqs</h3>
      <div class="ser-t"> <b></b> <span><i></i></span> <b class="line"></b> </div>
    </div>
    <div class="panel-group" id="accordion"> 
      <!-- First Panel -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title" data-toggle="collapse" data-target="#collapseOne"> <span>1.</span> Question 1? </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse">
          <div class="panel-body">
            <p>sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text</p>
            <p>sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text</p>
          </div>
        </div>
      </div>
      
      <!-- Second Panel -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title" data-toggle="collapse"  data-target="#collapseTwo"> <span>2.</span> Question 2? </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse">
          <div class="panel-body">
            <p>sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text</p>
            <p>sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text</p>
            <p>sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text</p>
            <p>sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text</p>
          </div>
        </div>
      </div>
      
      <!-- Third Panel -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title" data-toggle="collapse" data-target="#collapseThree"> <span>3.</span> Question 3? </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse">
          <div class="panel-body">
            <p>sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text</p>
            <p>sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text sample text</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('footer.php'); ?>

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
