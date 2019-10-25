

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/logo-2.png" type="image/png">
        <title>@yield('title') | Immeri Global - Network Marketing for Winners</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" href="vendors/swiper/css/swiper.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/custom.css">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="{{url('/')}}"><img src="img/logo-2.png" width="50" alt="Immeri - network marketing for winners"> 7 Digit Revenue</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav justify-content-center">
								<li class="nav-item active"><a class="nav-link yellow-color yellow-color-hover" href="{{url('/')}}">Home</a></li> 
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link yellow-color-hover dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Trending business systems</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link yellow-hover" href="{{url('make-money')}}">Making Money with Immeri</a></li>
										<li class="nav-item"><a class="nav-link yellow-hover" href="#">More systems coming soon</a></li>
									</ul>
								</li> 
								<li class="nav-item"><a class="nav-link yellow-color-hover" href="{{url('training')}}">Network Marketing</a></li>
								<li class="nav-item"><a class="nav-link yellow-color-hover" href="{{url('contact')}}">Contact</a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li class="nav-item"><a href="http://Bit.ly/7digitrevenue" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
								<li class="nav-item"><a href="https://instagram.com/healthylivingpluswealth" target="_blank"><i class="fa fa-instagram"></i></a></li>
								<li class="nav-item"><a href="https://www.facebook.com/7digitrevenue/" target="_blank"><i class="fa fa-facebook"></i></a></li>
 
								<li class="nav-item"><a href="#" class="search"><i class="lnr lnr-magnifier"></i></a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
 <!--------- Session notifications-------------->
        	<?php
               $pop = ""; $val = "";
               
               if(isset($signals))
               {
                  foreach($signals as $key => $value)
                  {
                    if(session()->has($key))
                    {
                  	$pop = $key; $val = session()->get($key);
                    }
                 }              
              
             ?> 

                 @if($pop != "" && $val != "")
                   @include('session-status',['pop' => $pop, 'val' => $val,'signal' => $signals])
                 @endif
				 
		    <?php
			   }
			?>
        	<!--------- Input errors -------------->
                    @if (count($errors) > 0)
                          @include('input-errors', ['errors'=>$errors])
                     @endif  

 
@yield('content')        
        
        
        
        
        
        <!--================Project Details Area =================-->
        <section class="project_know_area p_120 wow fadeInUp yellow" id="register">
        	<div class="container">
        		<div class="project_know_inner text-center">
        			<h3>Get To Know More</h3>
        			<p>The most exciting moment you can have is when your make your first MILLION. With Immeri you can have moments like this.. Want to know more?</p><br>
                    <form action="{{url('signup')}}" method="post" class="subscribe_form relative">
						{{csrf_field()}}
                       <div class="form-group">
                          <input name="name" class="form-control" placeholder="Name*" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name* '" required="" type="text">
                       </div>
					  <div class="form-group">
                          <input name="email" class="form-control" placeholder="Email*" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email* '" required="" type="email">
                       </div>
                       <div class="form-group">
                          <input name="phone" class="form-control" placeholder="Phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone'" type="text">
                       </div>
                       <div class="form-group">
                          <input name="location" class="form-control" placeholder="Location" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Location'" type="text">
                       </div>
					   <div class="form-group">
                                    <select class="form-control" id="hear" name="hear" style="margin-bottom: 6px;">
									   <option value="none">How did you hear about us?</option>
									   <option value="facebook">Facebook</option>
									   <option value="twitter">Twitter</option>
									   <option value="instagram">Instagram</option>
									   <option value="email">Email</option>
									   <option value="friend">Friend</option>
									   <option value="other">Other</option>
									</select><br>
									<input type="text" class="form-control" id="hear-2" name="hear-2" placeholder="Name?">
                                </div>
                       <div class="input-group">
                          <textarea name="message" class="form-control" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mesaage '" ></textarea>
                       </div>
                       <div class="mt-10 info"></div>
                    
        			<button class="white_btn" type="submit">Signup</a>
					</form>
        		</div>
        	</div>
        </section>
        <!--================End Project Details Area =================-->
        
@include("testimonials")
@include("blog")
      
        
        <!--================ start footer Area  =================-->	
        <footer class="footer-area ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">About Immeri</h6>
                            <p>
                            	7DigitRevenue and Immeri are ever growing with a community of like-minded individuals with the simple goal of INCREASING their REVENUE through Trending Business Systems.<br><br>
				     The community uses a STRUCTURED TEAM of SEASONED BUSINESS PROFESSIONALS with decades of experience in building Dream Revenue, to analyse and create simple business systems that work.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Navigation Links</h6>
                            <div class="row">
                                <div class="col-4">
                                    <ul class="list">
                                        <li><a class="yellow-color-hover" href="{{url('/')}}">Home</a></li>
                                        <li><a class="yellow-color-hover" href="{{url('make-money')}}">How to make money with Immeri</a></li>
                                    </ul>
                                </div>
                                <div class="col-4">
                                    <ul class="list">
                                        <li><a class="yellow-color-hover" href="{{url('training')}}">Network Marketing training</a></li>
                                        <li><a class="yellow-color-hover" href="{{url('contact')}}">Contact</a></li>
                                    </ul>
                                </div>										
                            </div>							
                        </div>
                    </div>							
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Newsletter</h6>
                            <p>For latest news on trending business systems and tips on how to become a better network marketer</p>		
                            <div id="mc_embed_signup">
                                <form action="" method="get" class="subscribe_form relative">
                                    <div class="input-group d-flex flex-row">
                                        <input name="email" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn yellow"><span class="lnr lnr-location"></span></button>		
                                    </div>									
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
                        </div>
                    </div>					
                </div>
                
            </div>
            <div class="border_line"></div>
			<div class="container">
				<div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-md-8 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Immeri Global, All rights reserved | Powered <i class="fa fa-lightning" aria-hidden="true"></i> by <a class="yellow-color" href="http://www.disenado.com.ng" target="_blank">Disenado NG</a>
</p>
                    <div class="col-lg-4 col-md-4 footer-social">
                        <a href="http://Bit.ly/7digitrevenue" target="_blank"><i class="fa fa-whatsapp"></i></a>
                        <a href="https://instagram.com/healthylivingpluswealth" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a href="https://www.facebook.com/7digitrevenue/" target="_blank"><i class="fa fa-facebook"></i></a>
                    </div>
                </div>
			</div>
        </footer>
		<!--================ End footer Area  =================-->
        
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
	    <!-- wow js -->
	     <script src="js/wow.js"></script>
              <script>
              new WOW().init();
              </script>
             <script src="js/custom.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope-min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/swiper/js/swiper.min.js"></script>
		
		<?php
		if(isset($map) && $map){
		?>
		<!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>
		<?php
		}
		?>
        <script src="js/theme.js"></script>
        <script>
		 //Add Deal - size
$('#hear-2').hide();
$('#hear').change(function(e){
	e.preventDefault();
	let hear = $('#hear').val();
    
	if(hear == "other" || hear == "friend"){
		$('#hear-2').fadeIn();
	}
	else{
		$('#hear-2').hide();
	}	
});
		</script>
    </body>
</html>