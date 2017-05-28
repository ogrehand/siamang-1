<?php

namespace App\Http\Controllers;

//tambah sendiri
use App\User ;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    // display the signup page
    public function getSignup(){
        return view('user.signup');
    }
    //handle form submission
    public function postSignup(Request $request){
        $this->validate($request, [
            'email' => 'email|required|unique:users',
            'password' => 'required|min:3'
        ]);

        //create new user
        $user = new User([
            'email' => $request-> input('email'),
            'password' => bcrypt($request->input('password'))
        ]);
        //save to db
        $user->save();

        return redirect()->route('product.index');
    }

    public function getSignin(){
        return view('user.signin');
    }


    public function postSignin(Request $request){
        $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required|min:3'
        ]);
    

        /* handling eror auth*/
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
            return redirect()->route('user.profile');
        }
        return redirect()->back();

    }
    public function getProfile(){
        return view('user.profile');
    }
}
