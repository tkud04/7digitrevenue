<!-- start slider section --> 
            <section class="p-0 main-slider h-100 mobile-height wow fadeIn">
                <div class="swiper-full-screen swiper-container h-100 w-100 white-move">
                    <div class="swiper-wrapper">
					   <?php
					   $sliders = [
					     ['title' => "welcome to XYZ agency", 'subtitle' => "point of care ads in Nigeria"],
					     ['title' => "engage your customers 24/7", 'subtitle' => "vast system of smart TVs"],
					     ['title' => "monitor your campaigns", 'subtitle' => "analysis and advanced reports"],
					   ];
					    foreach($sliders as $s){
						?>
                        <!-- start slider item -->
                        <div class="swiper-slide">
                            <div class="row m-0">
                                <div class="col-12 col-md-6 d-flex align-items-center bg-deep-pink height-700px sm-height-250px">
                                    <div class="text-left padding-twelve-all sm-padding-five-all width-100">
                                        <h6 class="title-large text-white-2 alt-font font-weight-600 letter-spacing-minus-3"><?=$s['title']?></h6>
                                        <span class="text-large text-middle-line font-weight-300 margin-30px-top width-65 lg-width-75 md-width-90 text-white-2 d-block sm-margin-15px-top"><?=$s['subtitle']?></span>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 cover-background height-700px sm-height-400px" style="background-image:url('images/slider-05.jpg');"></div>
                            </div>
                        </div>
                        <!-- end slider item -->
                        <?php
					    }
						?>                       
					   <!-- start slider item -->             
                    </div>
                    <!-- start slider pagination -->
                    <div class="swiper-pagination swiper-pagination-square swiper-pagination-white swiper-full-screen-pagination"></div>
                    <div class="swiper-button-next swiper-button-black-highlight d-none"></div>
                    <div class="swiper-button-prev swiper-button-black-highlight d-none"></div>
                    <!-- end slider pagination -->
                </div>
            </section>
            <!-- end slider section -->