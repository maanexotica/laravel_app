<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AjaxController extends Controller
{
    public function index(){


         return view('studentViews.ajaxview');
        
    }
    public function ajaxpost(Request $request){

       
          $validator = Validator::make($request->all(), [
            'uname' => 'required',
            'uemail' => 'required|email|unique:clients,email|max:255',
            'uphone' => 'required',
            'uroll' => 'required',
            'ubranch' => 'required',
            'pswd' => 'required',
        ]);
       
        if ($validator->fails()) {
            $errors = $validator->errors();
            /* return redirect('/ajaxform')
                        ->withErrors($validator)
                        ->withInput(); */
            return response()->json(['msg'=>'failled','error'=>$errors]);
        }else{
            $foormdata = $request->all();
            return response()->json(['msg'=>'succees','data'=>$foormdata]);
        }
         
        
        #create or update your data here

        
        
    }
}
