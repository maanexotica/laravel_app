<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Client;

class ImageController extends Controller
{
    //

    public function imageView()
    {
        return view('studentViews.imageview');
    }
    public function uploadImage(Request $request){
        $validator      =       $request->validate([
            'images'     =>     'required',
            'images.*'  =>      'required',
        ]);

        $files = [];
        if($request->hasfile('images'))
         {
            foreach($request->file('images') as $file)
            {
                $name = time().rand(1,100).'.'.$file->extension();
                $file->move(public_path('files'), $name);  
                $files[] = $name;  
            }
         }
  
         $file12= new Client();
         $file12->name ='maan' ;
         $file12->email = 'man12@gmail.com';
         $file12->phone= '4565';
         $file12->rollno = '5562552';
         $file12->branch_name = 'btech';
         $file12->password = '455gfgf';
         $file12->image_name = json_encode($files);
         $file12->save();
  
        return back()->with('success', 'Data Your files has been successfully added');
        
    }
}
