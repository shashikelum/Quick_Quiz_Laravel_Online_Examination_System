<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use\App\Oex_portal;

class PortalController extends Controller
{
    public function portal_signup()
    {
    	return view('portal.signup');
    }
    public function signup_sub(Request $request)
    {
    	$validator=Validator($request->all(),['name'=>'required','email'=>"required",'mobile_no'=>'required','password'=>'required']);
    	if($validator->passes())
    	{
    		$is_exists=Oex_portal::where('email',$request->email)->get()->toArray();
    		if($is_exists)
    		{
    			$arr=array('status'=>'false','message'=>'E-Mail Already Exist');
    		}
    		else
    		{
	    		$portal=new Oex_portal();
	    		$portal->name=$request->name;
	    		$portal->email=$request->email;
	    		$portal->mobile_no=$request->mobile_no;
	    		$portal->password=$request->password;
	    		$portal->save;
	    		$arr=array('status'=>'true','massege'=>'Success','reload'=>url('portal/login'));

    		
    		}
    	echo json_encode($arr);
    		
    	}	
	}
}
