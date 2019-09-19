<?php
namespace App\Helpers\Contracts;

Interface HelperContract
{
        public function getCategories();
        public function getPosts();
        public function getPost($id);
        public function getChunk($data,$c);
        public function getPostsByCategory($c);
        public function getAds();
        public function getTestimonials();
        public function getProducts();
        public function getProduct($id);
        public function subscribeMLM($data);
        public function sendMessage($data);
        public function signup($data);
		
}
 ?>