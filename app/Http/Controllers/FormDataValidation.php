<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormDataValidation extends Controller
{
    //   

    public function quoteform(Request $request)
    {  

    	if($request['i'] == "2"){
            return $request->validate([
                'name' => 'required',
                'phone' => 'required',
                'email' => 'required|email', 
                'g-recaptcha-response' => 'required|captcha',               
            ]);
        }
        else {
//            dd($request->all());
            return $request->validate([
                'name' => 'required',
                'phone' => 'required',
                'email' => 'required|email',
                'new-postcode' => 'required',
                'old-postcode' => 'required',
            ]);
        }
    }
}
