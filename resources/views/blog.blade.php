
<!--================Home Blog Area =================-->
        <section class="home_blog_area wow fadeInUp">
        	<div class="row m0">
        		
               <?php 
                 for($x = 0; $x < count($posts); $x++){
                 	$p = $posts[$x];
                     //$pu = "post.php?xf=".$p['id'];
                     $pu = "https://www.instagram.com/the_unstoppable25/";
               ?>
               <div class="col-lg-3 p0">
        			<div class="h_blog_img">
        				<img src="<?=$p['img']?>" alt="" style="width: 75%;">
        			</div>
        		</div>
        		<div class="col-lg-3 p0">
        			<div class="h_blog_text">
        				<a class="cat" href="#"><?=$p['date']?>  |  By Immeri Global</a>
        				<a href="<?=$pu?>" target="_blank"><h4><?=$p['title']?></h4></a>
        				<?=$p['content']?>
        			</div>
        		</div>
                <?php 
                 }
               ?>
        		
        	</div>
        </section>
        <!--================End Home Blog Area =================-->