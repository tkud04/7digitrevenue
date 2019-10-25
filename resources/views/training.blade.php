@extends('layout')

<?php
$title = "How to Become Better at Network Marketing";
?>

@section('title',$title)


@section('content')

@include('banner-2')

        <!--================Portfolio Details Area =================-->
        <section class="portfolio_details_area p_120">
        	<div class="container">
        		<div class="portfolio_details_inner">
					<div class="row">
						<div class="col-md-12">
							<div class="portfolio_left_text">
								<h2 class="yellow-color">Network Marketing -  Sign up NOW</h2>
								<p>Want to become a better network marketer? Join our training programme and achieve your dreams TODAY.</p>
							</div>
						</div>
					</div>
       				<form class="row contact_form" action="{{url('training')}}" method="post" id="contactForm" novalidate="novalidate">
					    {{csrf_field()}}
                            <div class="col-lg-4 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                                </div>
							</div>
						    <div class="col-lg-4 col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                                </div>
							</div>
							<div class="col-lg-4 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone number">
                                </div>
                            </div>
							<div class="col-md-12">
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
							</div>
                            <div class="col-md-12 text-center">
                                <button type="submit" value="submit" class="btn submit_btn yellow">Submit</button>
                            </div>
                        </form>
               	</div>
        	</div>
        </section>
        <!--================End Portfolio Details Area =================-->

@stop