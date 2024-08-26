<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{   
    //GET route
    public function read(){
        $user =  User::all();
        return view("index",compact('user'));
    }

    public function delete($id){
        $user = User::find($id)->delete();
        if($user){
            
            return redirect("/")->with("success", "record Deleted successful");
        }
        else {
            return redirect("/")->with("error", "record not Deleted successful");
            
        }

    }

    public function edit($id){
        $user = User::find($id);
        return view('update',compact('user'));
    }

    // post route
    public function create(Request $request){
        $user = new User();
        $user->name = $request->input("name");
        $user->email = $request->input("email");
        
        if($user->save()){
            return redirect("/")->with("success", "record inserted successful");
        }
        else {
            
            return redirect("/")->with("error", "record not inserted successful");
        }   
    }

    public function update(Request $request){
        $user=User::find($request->input('id'));
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        
        if($user->save()){
            return redirect("/")->with("success", "record updated successful");
        }
        else {
            
            return redirect("/")->with("error", "record not updated successful");
        }   
    }

}
