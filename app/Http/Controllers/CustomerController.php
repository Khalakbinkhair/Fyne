<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Customer;
use App\RewardRequest;
use Mail;
use Session;
class CustomerController extends Controller
{
    public function index(){
    	$data = array();
    	if (Session::has('loginId')) {
    		$data = Customer::where('id','=',Session::get('loginId'))->first();
    	}
    	$reward_check = RewardRequest::where('customer_id','=',$data->id)->get();
	    return view('customer.index',compact('data','reward_check'));
	}
	public function reward_request(Request $request){
		
		$customer = Customer::find($request->input('customer_id'));
		
		$reward_req = new RewardRequest(); 
	    $reward_req->reward_name = $request->input('reward_name');
	    $reward_req->customer_id = $request->input('customer_id');
	    $reward_req->save();

		$details = [
			        'name' => $customer->name,
			        'email' => $customer->email,
			        'phone' => $customer->phone,
			        'card_no' => $customer->card_no,
			        'reward_name' => $request->input('reward_name')
			    ];
            Mail::send('pages.reward_req_email', $details, function($message) 
            {
                $message->to('imran@fatmonk.studio');
                $message->from('studiofatmonk@gmail.com');
            });

	    return redirect()->route('customer_dashboard')->with('message','Thank you for your request. We will mail you the login details shortly via email.');
	}
	public function profile(){
    	$data = array();
    	if (Session::has('loginId')) {
    		$data = Customer::where('id','=',Session::get('loginId'))->first();
    	}
	    return view('customer.profile',compact('data'));
	}
	public function register(){
	   return view('customer.register');
	}
	public function login(){
	   return view('customer.login');
	}
	public function save(Request $request){


        $this->validate($request, array(
          'name' => ['required', 'string', 'max:255'],
	      'phone' => ['regex: /(^(\+8801|8801|01|008801))[1|3-9]{1}(\d){8}$/'],
	      'email' => ['required', 'string', 'email', 'max:255','unique:customers'],
	      'password' => ['required', 'string', 'min:6'],
	      'card_no' => ['required', 'max:4','min:4']
	    ));

	    $customer = new Customer(); 
	    $customer->name = $request->input('name');
	    $customer->email = $request->input('email');
	    $customer->password = Hash::make($request->input('password'));
	    $customer->phone = $request->input('phone');
	    $customer->card_no = $request->input('card_no');
	    $customer->save();
	    
	    return $this->login_auth($request);
	    //return redirect()->route('customer_dashboard')->with('message', 'Account Created Successfully!');
	  }
	  public function update(Request $request,$id){

	    $customer = Customer::find($id)->first(); 
	    $customer->name = $request->input('name');
	    $customer->email = $request->input('email');
	    //$customer->password = Hash::make($request->input('password'));
	    $customer->phone = $request->input('phone');
	    $customer->save();
	    return redirect()->route('customer_profile')->with('message', 'Profile Updated Successfully!');
	  }

	  public function login_auth(Request $request){

        $this->validate($request, array(
	      'email' => ['required', 'string', 'email'],
	      'password' => ['required', 'string', 'min:6']
	    ));
        $customer = Customer::where('email','=',$request->input('email'))->first();
        if ($customer) {
        	if (Hash::check($request->input('password'),$customer->password)) {
        		$request->Session()->put('loginId',$customer->id);
        		return redirect()->route('customer_dashboard')->with('message', 'Welcome to Fyne Family.');
        	}else{
        		return back()->with('error','Password not matche.');
        	}
        }else{
        	return back()->with('error','The email is not registered.');
        }
	  }
	  public function logout(){
	  	if (Session::has('loginId')) {
	  		Session::pull('loginId');
	  		return redirect()->route('customer_login');
	  	}
	  }

}
