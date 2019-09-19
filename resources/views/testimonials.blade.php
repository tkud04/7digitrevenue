        <!--================Team Area =================-->
        <section class="team_area wow fadeInUp">
        	<div class="section-top-border">
						<h2 class="text-center mb-30 title_color">What People Are Saying About Us</h2>
						<div class="row">
							<div class="col-lg-12">
								<blockquote class="generic-blockquote">
									“I registered 4weeks ago with 4packs of <b>Immeri Vaginne</b> and today, after using 2 packs, I can say I'm truly a happy woman and that makes my husband happy too.
What caught my attention was the mechanism of action of <b>Vaginne</b> and its notable effects on the female reproductive system.<br><br>
I used to have what is called intermenstrual bleeds,comes exactly 2weeks before my menstrual flow,I will begin to see spots of blood especially after urination and i can't have sex during this period because of the bleed .
 During my menstrual flow, I can't use the toilet freely with another person without a body spray to freshen the air because of the odour.I did High vagina swab tests to ascertain the cause,thinking of infection and nothing was detected,even PAP smear at different times.<br><br>
 I have used different antibiotics, pessaries,no notable change.then I began to think of hormonal imbalance ,I was about going for hormonal profile and also see my gynecologist when I saw <b>Vaginne</b> on a colleague's status and I decided to try it. Today,4weeks after,I'm happy I took that decision.<br><br>
2-3 days after I began to use <b>Vaginne</b>, I began to perceive a sweet smell.There's a slimy discharge that usually come with ovulation, I saw it ( the last time I saw it was about 11years ago),it felt so good to see it after a very long time.along with the sweet fresh smell,I did not see any spot of blood till my menstrual flow came! I was so elated! The fresh redness of the flow with zero odour nailed it.<br><br>
Thank God for the brain behind <b>Vaginne</b>.a problem of many years was taken care of with just 12sticks of <b>Vaginne</b>. I'm so excited.I know a lot of women will be going through similar issues and it will be wickedness on my part if I do not share with them this amazing product.
Hence the need for sharing my testimony.<br>
Immeri <b>Vaginne</b> works.” <br>
                                <p class="text-right">Anonymous<br>Nigeria</p>
								</blockquote>
								
							</div>
						</div>
						
						<!------- start row 2 ------>
						<div class="row">
						   <div class="col-lg-4">
								<blockquote class="generic-blockquote">
								“Many questions into my inbox about the secret.  The motivation to stay strong and healthy was my driving force. The MRI there was my diagnosis which made me to be absent from doing surgery for 6 weeks and fell flat twice while doing ward round. My weight was 155kg when the health was in shambles  but  I have taken back my health using this company products Immeri. 
The two products are <b>Vitide</b> and <b>Adwelle</b>  which have tremendously helped me to lose 23kgs and repair my knee joint and I am not going to stop until I hit a target of 100kg. I climb the staircase now without holding the rails, squat with no  pain and finally makes me look attractive. 
“<br><br>
 <div class="row">
   <div class="col-lg-4 col-xs-6"><img class="img img-fluid" src="img/tt/tt-9.jpg" style="height: 80px;"></div>
   <div class="col-lg-8 col-xs-6"><p class="text-right">Dr Dickson OTAKA<br>KORLEBU TEACHING HOSPITAL, GHANA</p></div>
 </div>
                                </blockquote>
							</div>
							<div class="col-lg-4">
								<blockquote class="generic-blockquote">
								<img class="img img-fluid" src="img/tt/tt-12.jpg" style="height: 400px;"><br>
								<br><br>
 <div class="row">
   <div class="col-lg-4 col-xs-6"><img class="img img-fluid" src="img/tt/tt-10.jpg" style="height: 80px;"></div>
   <div class="col-lg-8 col-xs-6"><p class="text-right">Dr Dickson OTAKA<br>KORLEBU TEACHING HOSPITAL, GHANA</p></div>
 </div>
                                </blockquote>
							</div>
							<?php
							# $testimonials  = $helper->getTestimonials();
							 shuffle($testimonials);
							 foreach($testimonials as $tt){
                             ?>
							<div class="col-lg-4">
								<blockquote class="generic-blockquote">								
									<img class="img img-fluid" src="<?=$tt['img']?>" style="height: 400px;"><br>
                                <p class="text-right"><?=$tt['client']?></p>
								</blockquote>
								
							</div>
							<?php
							 }
                             ?>
						</div>
						<!------- end row 2 ------->
						
						
					</div>
        </section>
        <!--================End Team Area =================-->