<?php
namespace App\Helpers;

use App\Helpers\Contracts\HelperContract; 
use Crypt;
use Carbon\Carbon; 
use Mail;
use Auth;
use \Swift_Mailer;
use \Swift_SmtpTransport;
use App\Tokens;
use GuzzleHttp\Client;

class Helper implements HelperContract
{
                        
             public $signals = ["subscribe-status" => "Sign in successful",             
                                "subscribe-mlm-status" => "Sign up successful, we will send you an email shortly.",         
                                "send-message-status" => "Message sent! We will reply you shortly.",         
                                "signup-status" => "Thanks for reaching out! We will get back to you shortly.",         
                     ];

       
           
        			   
        function getCategories()
	{
		$categories = ["immeri" => "Immeri", "make-money" => "Make Money"];
		return $categories;
	}
	
	function getPosts()
	{
		$posts = [   
					 ['id' => "1",
	                  'title' => "Lasting Solution to your Network Marketing Obstacles",
	                  'category' => "immeri",
	                  'date' => date("jS F, Y h:i A"),
					  'brief' => "This is a brief summary of this post",
	                  'content' => "<ul><li>Get the right audience for your business</li><li>Learn act of prospecting</li></ul>",
	                  'bq-content' => "",
	                  //'img' => "img/blog/unstoppable.jpg",
	                  'img' => "img/ig.png",
					  'url' => "https://www.instagram.com/the_unstoppable25/"
	                 ],      
					 /*['id' => "2",
	                  'title' => "Five Great Lessons You Can Learn From Immeri",
	                  'category' => "immeri",
	                  'date' => date("jS F, Y h:i A"),
					  'brief' => "This is a brief summary of this post",
	                  'content' => "",
	                  'bq-content' => "",
	                  'img' => "img/home-blog/h-blog-2.jpg",
	                  'img-2' => "images/big-images/7.jpg",
	                 ], */  
    	
	   ];
		return $posts;
	}
	
	function getPost($id)
	{
		$ret = [];
		$posts = $this->getPosts();
		
		foreach($posts as $p)
		{
			if($p['id'] == $id){
				$ret = $p;
				break;
			}
		}
		
		return $ret;
	}
	
	function getChunk($data,$c)
	{
		$chunks = array_chunk($data,6);
		if(count($chunks) < $c) $c = 1;
		return ["pp" => $chunks[$c-1], "pp-count" => count($chunks)];
	}
	
	function getPostsByCategory($c)
	{
		$ret = [];
		$posts = $this->getPosts();
		
		foreach($posts as $p)
		{
			if($p['category'] == $c){
				array_push($ret,$p);
			}
		}
		
		return $ret;
	}
	
	function getAds()
	{
		$categories = [["link" => "#", "img" => "img/ads/ad-4.jpg"],
		               ["link" => "#", "img" => "img/ads/ad-3.gif"],
		               ["link" => "#", "img" => "img/ads/ad-1.jpg"],
		               ["link" => "#", "img" => "img/ads/ad-2.jpg"],
		];
		return $categories;
	}

	function getTestimonials()
	{
		return [
		         ["client" => "Anonymous<br>Nigeria", "img" => 'img/tt/tt-4.jpg'],
		         ["client" => "Anonymous<br>Nigeria", "img" => 'img/tt/tt-6.jpg'],
		         ["client" => "Anonymous<br>Nigeria", "img" => 'img/tt/tt-7.jpg'],
		        // ["client" => "Anonymous<br>Nigeria", "img" => 'img/tt/tt-9.jpg'],
		         ["client" => "Anonymous<br>Nigeria", "img" => 'img/tt/tt-11.jpg'],
		         ["client" => "Anonymous<br>Nigeria", "img" => 'img/tt/tt-13.jpg'],
		         ["client" => "Anonymous<br>Nigeria", "img" => 'img/tt/tt-14.jpg'],
		         ["client" => "Anonymous<br>Nigeria", "img" => 'img/tt/tt-15.jpg'],
		         ["client" => "Anonymous<br>Nigeria", "img" => 'img/tt/tt-16.jpg'],
			   ];
	}
	
	function getProducts()
	{
		$products = [ 
	                 ['id' => "1",
	                  'name' => "VAGINNE Refreshing Intimate Gel",
	                  'nafdac' => "A2-4012",
	                  'date' => date("jS F, Y h:i A"),
	                  'description' => "<p><strong>Vaginne</strong> is an Intimate Gel that:<br><ul class='unordered-list'><li>Takes care of the female reproductive environment</li><li class=' '>Takes care of any kind of vigina infection</li><li>Tightens the vigina</li><li class=' '>It’s a good sex lubricant!</li><li>Eliminates fowl vigina odour</li><li class=' '>Increases female libido</li><li>Helps women with infertility issues arising within the female reproductive environment</li><li class=' '>Ensures the woman is sweet for her man</li></ul></p><p class=' '>With <strong>Vaginne</strong>, the man is happy, the woman is happier!</p>",
	                  'price' => "1 box (6pcs): &#8358;20,000 | 1pc: &#8358;3,500",
	                  'img' => "img/vaginne-600x1200.jpeg",
	                 ],  
					 ['id' => "2",
	                  'name' => "VITIDE",
	                  'nafdac' => "D1-9346",
	                  'date' => date("jS F, Y h:i A"),
	                  'description' => "<p><strong>Vitide</strong> is a soy micro molecule bioactive Peptide:<br><ul class='unordered-list'><li>Helps to eliminate fatigue</li><li class=' '>Restore skin and muscles elasticity</li><li>Strengthens muscles</li><li class=' '>Regulates Body fats</li><li>Regulates blood pressure</li><li class=' '>Prevents cancer</li><li>Increase immunity</li><li class=' '>Helps in weight loss</li><li>Anti-aging</li><li class=' '>Fight diseases</li></ul></p><p class=' '>Keep you and your family free from diseases with <strong>Vitide</strong>!</p>",
	                  'price' => "1 box (25pcs): &#8358;68,000 | 1pc: &#8358;2,800",
	                  'img' => "img/vitide-1-600x450.jpeg",
	                 ],   
					 ['id' => "3",
	                  'name' => "ADWELLE",
	                  'nafdac' => "D1-9347",
	                  'date' => date("jS F, Y h:i A"),
	                  'description' => "<p><strong>Adwelle</strong> is a Plant based Enzymes with fruits and grains:<br><ul class='unordered-list'><li>Promotes mineral absorption</li><li class=' '>Lower blood fat and cholesterol</li><li>Relieves constipation</li><li class=' '>Regulates blood sugar</li><li>Improves the immune system</li><li class=' '>Enhances anti-inflamatory effects</li><li>Regulates the balance of intestinal bacteria</li><li class=' '>Regulates intestine PH</li></ul></p><p class=' '>Stay healthy, use <strong>Adwelle</strong>!</p>",
	                  'price' => "1 box (50pcs): &#8358;68,000 | 1pc: &#8358;1,400",
	                  'img' => "img/adwelle-600x453.jpeg",
	                 ],    	
	];
		return $products;
	}
	
	function getProduct($id)
	{
		$ret = [];
		$products = $this->getProducts();
		
		foreach($products as $p)
		{
			if($p['id'] == $id){
				$ret = $p;
				break;
			}
		}
		
		return $ret;
	} 

	
	function subscribeMLM($data)
	{
		$ret = "ok";
		
		return $ret;
	}  
	
	function sendMessage($data)
	{
		$ret = "ok";
		
		return $ret;
	}  

	function signup($data)
	{
		$ret = "ok";
		
		return $ret;
	}  
           
           
}
?>