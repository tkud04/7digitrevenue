<!--================Project Area =================-->
        <section class="project_area wow fadeInUp" id="pr2">
        	<div class="row m0">
			<div class="col-lg-12 p0 text-center">
			<br><br>
			  <h2>Unique Products</h2><br>
			  <h3>Immeri has a list of world class products that.........</h3>
			  <br>
			</div><br>
        	   <?php 
                 foreach($products as $pd){
                     $pu = url("product")."?xf=".$pd['id'];
                     $price = explode("|",$pd['price']);
               ?>
        		<div class="col-lg-4 col-md-6 p0">
        			<div class="project_item">
        				<img src="<?=$pd['img']?>" alt="">
        				<div class="hover_text">
        					<h4><?=$pd['name']?></h4>

        					<a class="main-btn" style="background: #000;" href="<?=$pu?>">View More</a>
        				</div>
        			</div>
        		</div>
               <?php 
                 }
               ?>
        		<br>
				<div class="col-lg-12 p0 text-center">
			<br><br>
			  <h2>Earn From These World Class Products!</h2><br>
			  <h3>Immeri Provides  a comp plan around these wonderful products that makes it easy to make a 7-Digit Income......</h3>
			  <br>
			</div><br>
        	</div>
        </section>
        <!--================End Project Area =================-->