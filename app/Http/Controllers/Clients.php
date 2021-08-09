<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class Clients extends Controller
{
    public function usersRegister(){
        return view('studentViews.register');


    }
    public function usrsave(Request $request){
        
        $clientobj = new Client();
        $validatedData = $request->validate([
            'uname' => 'required',
            'uemail' => 'required|email|unique:clients,email|max:255',
            'uphone' => 'required',
            'uroll' => 'required',
            'ubranch' => 'required',
            'pswd' => 'required',

          ]);
        $data  = $request->all();
        $password = bcrypt($data['pswd']);
        $clientobj->name = $data['uname'];
        $clientobj->email = $data['uemail'];
        $clientobj->phone = $data['uphone'];
        $clientobj->rollno = $data['uroll'];
        $clientobj->branch_name = $data['ubranch'];
        $clientobj->password = $password;
        $clientobj->save();
        return redirect('register')->with('status', 'Form Data Has Been validated and inserted');
        
    }
    public function clientList(){
        $clientList= Client ::all();

        return view('studentViews.show')->with('listData',$clientList);
    }
    public function delete($id){
        $clientList = Client::find($id);
        $clientList->delete();
        return redirect('list');
        
    }

    public function edit($id){

        $editData = Client::find($id);
        
        return view('studentViews.edit')->with('editrecord',$editData);
        
    }
    public function update(Request $request){
        $validatedData = $request->validate([
            'uname' => 'required',
            'uemail' => 'required|email|unique:clients,email,'.$request->uid.',id',
            'uphone' => 'required',
            'uroll' => 'required',
            'ubranch' => 'required',

          ]);
        $data  = $request->all();
        $stuData = Client::find($data['uid']);
        $stuData->name = $data['uname'];
        $stuData->email = $data['uemail'];
        $stuData->phone = $data['uphone'];
        $stuData->rollno = $data['uroll'];
        $stuData->branch_name = $data['ubranch'];
        $stuData->save();
        return redirect('list');
        
    }
}
