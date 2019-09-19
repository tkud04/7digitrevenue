@extends('layout')

<?php
$title = "Contact";
?>

@section('title',$title)


@section('content')

@include('banner-2')

             <!--================Contact Area =================-->
        <section class="contact_area p_120">
            <div class="container">
                <div id="mapBoxx" class="mapBoxx" 
                    data-lat="40.701083" 
                    data-lon="-74.1522848" 
                    data-zoom="13" 
                    data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
                    data-mlat="40.701083"
                    data-mlon="-74.1522848">
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-home yellow-color"></i>
                                <h6>Lagos, Nigeria</h6>
                                <p>Admiralty Way, Lekki</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset yellow-color"></i>
                                <h6><a href="tel:2349075481388">(234) 907 548 1388</a></h6>
                                <p>Mon to Fri 9am to 5 pm</p>
                            </div>
                            <div class="info_item">
                                <i class="fa fa-whatsapp yellow-color"></i>
                                <h6><a href="http://Bit.ly/7digitrevenue" target="_blank">Join our Whatsapp group</a></h6>
                                <p></p>
                            </div>
							<div class="info_item">
                                <i class="fa fa-instagram yellow-color"></i>
                                <h6><a href="https://instagram.com/healthylivingpluswealth" target="_blank">Follow us on Instagram</a></h6>
                                <p></p>
                            </div>
							<div class="info_item">
                                <i class="fa fa-facebook yellow-color"></i>
                                <h6><a href="https://www.facebook.com/7digitrevenue/" target="_blank">Like our Facebook page</a></h6>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <form class="row contact_form" action="{{url('contact')}}" method="post" id="contactForm" novalidate="novalidate">
							{{csrf_field()}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <button type="submit" value="submit" class="btn submit_btn yellow">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--================Contact Area =================-->

@stop