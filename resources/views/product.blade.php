@extends('layout')

@section('title',$p['name'])


@section('content')
<?php
$title = $p['name'];
?>
@include('banner-2')

        <!--================Portfolio Details Area =================-->
        <section class="portfolio_details_area p_120">
		 <?php 
                     $price = explode("|",$p['price']);
					 $pxx = explode(":",$price[0]);
					 $pyy = explode(":",$price[1]);
		?>
        	<div class="container">
        		<div class="portfolio_details_inner">
					<div class="row">
						<div class="col-md-6">
							<div class="left_img">
								<img class="img-fluid" src="<?=$p['img']?>" alt="">
							</div>
						</div>
						<div class="col-md-6">
							<div class="portfolio_right_text">
								<h4><?=$p['name']?></h4>
								<?=$p['description']?>
								<ul class="list">
									<li><span>Rating</span>: <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></li>
									<li><span><?=$pxx[0]?></span>: <?=$pxx[1]?></li>
									<li><span><?=$pyy[0]?></span>: <?=$pyy[1]?></li>
									<li><span>NAFDAC No.</span>:  <?=$p['nafdac']?></li>
								</ul>
								<ul class="list social_details">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-behance"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
        		</div>
        	</div>
        </section>
        <!--================End Portfolio Details Area =================-->

@stop