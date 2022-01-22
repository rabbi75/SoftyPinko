<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Authentication extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('frontend.authentication.login');
    }

    public function userLogin(Request $request){
        $loginData=$request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        // dd($request->all());
        if(Auth::attempt($loginData)){
            // echo"Login success";
            $userInfo = auth()->user();
        //     dd($userInfo);
        return view('frontend.authentication.dashboard', ['name' => $userInfo->name]);
        } else {
            return redirect('login')->with('errorMsg', 'Sorry! your email or password does not match!');
        }
    }

    public function register() {
        return view('frontend.authentication.register');
    }
    
    public function userRegister(Request $request) {

        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:6|max:32',
            'confirm_password' => 'required|min:6|max:32'
        ]);

        if ($request->get('password') != $request->get('confirm_password')) {
           return redirect('register')->with('errorMsg', 'Your password and confirm password do not match');
        }
        
        $userObj = new User();
        $userObj->name = $request->get('name');
        $userObj->email = $request->get('email');
        $userObj->password = Hash::make($request->get('password')); //$request->get('password');
//        $userObj->save();
        if ($userObj->save()) {
            return redirect('register')->with('success', 'Registration successful!');
        } else {
            return redirect('register')->with('errorMsg', 'Sorry! We cannot register you at this moment. Please try again later!');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function logout(Request $request)
    {
        Auth::logout();
        
        $request->session()->invalidate();
        
        $request->session()->regenerateToken();
        
        return redirect('/');
    }
}
