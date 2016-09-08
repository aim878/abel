<a href=""><img src="includes/img/offer.png" class="img-head" alt=""></a>
<div class="header">
  <div class="container">
    <div class="logo">
      <h1 ><a href="http://abel.ranglerz.com/"><b>A<br>
        B<br>
        E<br>
        L</b>Driving School<span>Drive For Life</span></a></h1>
    </div>
    <div class="head-t">
      <ul class="card">
        <li><a href="login.php" ><i class="fa fa-lock" aria-hidden="true"></i>Login</a></li>
        <li><a href="register.php" ><i class="fa fa-user" aria-hidden="true"></i>Register</a></li>
        <li><a href="tel:+0161-610-3295" ><i class="fa fa-mobile" aria-hidden="true"></i>0161 610 3295</a></li>
        <li><a href="tel:+07940-783364" ><i class="fa fa-phone" aria-hidden="true"></i>07940 783364</a></li>
        <li><a href="mailto:info@abeldriving.co.uk" ><i class="fa fa-envelope" aria-hidden="true"></i>info@abeldriving.co.uk</a></li>
      </ul>
    </div>
    <div class="header-ri">
      <ul class="social-top">
        <li><a href="https://www.facebook.com/" class="icon facebook" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
        <li><a href="https://twitter.com/" class="icon twitter" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
        <li><a href="https://plus.google.com/" class="icon google" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i><span></span></a></li>
        <li><a href="https://www.youtube.com/" class="icon youtube" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i><span></span></a></li>
      </ul>
    </div>
    <div class="nav-top">
      <nav class="navbar navbar-default">
        <div class="navbar-header nav_2">
          <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
          <ul class="nav navbar-nav ">
          	<?php if ($page == 'home') { ?>
            <li class="active"><a href="http://abel.ranglerz.com/" class="hyper"><span>Home</span></a></li>
            <?php } else { ?>
            <li><a href="http://abel.ranglerz.com/" class="hyper"><span>Home</span></a></li>
            <?php } //if ($page == 'about') { ?>
            <!--<li class="active"><a href="about.php" class="hyper"> <span>About Us</span></a></li>-->
            <?php //} else { ?>
            <!--<li><a href="about.php" class="hyper"> <span>About Us</span></a></li>-->
            <?php //} ?>
            <?php if ($page == 'pricing') { ?>
            <li class="active"><a href="pricing.php" class="hyper"><span>Lessons & Pricing</span></a></li>
            <?php } else { ?>
            <li><a href="pricing.php" class="hyper"><span>Lessons & Pricing</span></a></li>
            <!--<li><a href="" class="hyper"><span>Services</span></a></li>-->
            <?php } if ($page == 'gallery') { ?>
            <li class="active"><a href="gallery.php" class="hyper"><span>Gallery</span></a></li>
            <?php } else { ?>
            <li><a href="gallery.php" class="hyper"><span>Gallery</span></a></li>
            <?php } ?>
            <li><a href="" class="hyper"><span>Tips & Tricks</span></a></li>
            <?php if ($page == 'faqs') { ?>
            <li class="active"><a href="faqs.php" class="hyper"><span>FAQ’s</span></a></li>
            <?php } else { ?>
            <li><a href="faqs.php" class="hyper"><span>FAQ’s</span></a></li>
            <?php } ?>
            <li><a href="" class="hyper"><span>Online Queries</span></a></li>
            <?php if ($page == 'contact') { ?>
            <li class="active"><a href="contact.php" class="hyper"><span>Contact Us</span></a></li>
            <?php } else { ?>
            <li><a href="contact.php" class="hyper"><span>Contact Us</span></a></li>
            <?php } ?>
          </ul>
        </div>
      </nav>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
