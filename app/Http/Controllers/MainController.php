<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Helpers\Contracts\HelperContract; 
use Auth;
use Session; 
use Validator; 
use Carbon\Carbon; 

class MainController extends Controller {

	protected $helpers; //Helpers implementation
    
    public function __construct(HelperContract $h)
    {
    	$this->helpers = $h;                     
    }

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
    {
        $user = null;
		$posts = $this->helpers->getPosts();
        $products = $this->helpers->getProducts();
        $testimonials = $this->helpers->getTestimonials();
		$signals = $this->helpers->signals;
         
         return view('index',compact(['user','posts','products','testimonials','signals']));		 
    }

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getMakeMoney()
    {
       
		  $user = null;
		$posts = $this->helpers->getPosts();
        $products = $this->helpers->getProducts();
        $testimonials = $this->helpers->getTestimonials();
         
         return view('make-money',compact(['user','posts','products','testimonials']));		 		 
    }
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getProduct(Request $request)
    {
        $user = null;
		
		
		$req = $request->all();
        //dd($req);
		$ret = ["status" => "error","data" => "Connection failed."];
        
		  $validator = Validator::make($req, [
                             'xf' => 'required',
         ]);
         
         if($validator->fails())
         {
             $messages = $validator->messages();
             //$ret = ["status" => "error","data" => $messages];
			 return redirect()->intended('/');
         }
         
         else
         {
			 $p = $this->helpers->getProduct($req['xf']);
			 
             if($p == null || count($p) < 1)
             {
             	return redirect()->intended('/');
             }
             else
             {
				 $posts = $this->helpers->getPosts();
                $testimonials = $this->helpers->getTestimonials();
             	return view('product',compact(['p','user','posts','testimonials']));
             }           
         }	 
    }
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getTraining()
    {
       
		  $user = null;
		$posts = $this->helpers->getPosts();
        $testimonials = $this->helpers->getTestimonials();
		$signals = $this->helpers->signals;
         
         return view('training',compact(['user','posts','testimonials','signals']));		 		 
    }
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function postTraining(Request $request)
    {
        $user = null;
		
		
		$req = $request->all();
        //dd($req);
		
		  $validator = Validator::make($req, [
                             'name' => 'required',
                             'email' => 'required|email',
                             'phone' => 'required|numeric'
         ]);
         
         if($validator->fails())
         {
             $messages = $validator->messages();
             return redirect()->back()->withInput()->with('errors',$messages);
         }
         
         else
         {
			 $ret = $this->helpers->subscribeMLM($req);
			 $request->session()->flash("subscribe-mlm-status",$ret);
			 return redirect()->intended('training');
         }
                
    }


	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getContact()
    {
       
		  $user = null;
		$posts = $this->helpers->getPosts();
        $testimonials = $this->helpers->getTestimonials();
		$signals = $this->helpers->signals;
         
         return view('contact',compact(['user','posts','testimonials','signals']));		 		 
    }
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function postContact(Request $request)
    {
        $user = null;
		
		
		$req = $request->all();
        //dd($req);
		
		  $validator = Validator::make($req, [
                             'name' => 'required',
                             'email' => 'required|email',
                             'subject' => 'required',
                             'message' => 'required'
         ]);
         
         if($validator->fails())
         {
             $messages = $validator->messages();
             return redirect()->back()->withInput()->with('errors',$messages);
         }
         
         else
         {
			 $ret = $this->helpers->sendMessage($req);
			 $request->session()->flash("send-message-status",$ret);
			 return redirect()->intended('contact');
         }
                
    }
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function postSignup(Request $request)
    {
        $user = null;
		
		
		$req = $request->all();
        //dd($req);
		
		  $validator = Validator::make($req, [
                             'name' => 'required',
                             'email' => 'required|email',
                             'phone' => 'numeric'
         ]);
         
         if($validator->fails())
         {
             $messages = $validator->messages();
             return redirect()->back()->withInput()->with('errors',$messages);
         }
         
         else
         {
			 $ret = $this->helpers->signup($req);
			 $request->session()->flash("signup-status",$ret);
			 return redirect()->back();
         }
                
    }

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getLogout(Request $request)
    {
        $user = null;
		
		
		$req = $request->all();
        //dd($req);
		$ret = ["status" => "error","data" => "Connection failed."];
        
		  $validator = Validator::make($req, [
                             'tk' => 'required',
         ]);
         
         if($validator->fails())
         {
             $messages = $validator->messages();
             $ret = ["status" => "error","data" => $messages];
         }
         
         else
         {
			 $token = $this->helpers->deleteToken($req['tk']);
			 
             	$ret = ["status" => "ok","data" => "Logged out of notifications API"];          
         }
                
         
         return json_encode($ret);		 
    }

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getVersion()
    {
       $ret = ["version" => "1.0","status" => "beta","data" => "ESchool API 1.0. See documentation for help on usage"];
	   return json_encode($ret);
    }


	
    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getPractice()
    {
    	return $this->helpers->deleteDeal("62");
    }   


}