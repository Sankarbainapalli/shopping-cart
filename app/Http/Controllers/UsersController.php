<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

// use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;


class UsersController extends Controller
{
    /*
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getSignin()
    {
        //
        return view('user.signin');
    
    }
    public function getSignUp()
    {
        //
        return view('user.signup');
    
    }
    public function postSignup(Request $request){

 $this->validate($request,[

           'name' => 'required|unique:users',
           'password' => 'required',
           'email' => 'required'


        ]);
        $users = new User;
        $users->name =$request->input('name');
         $users->email =$request->input('email');
           $users->password =$request->input('password');
            $users->save();
             return redirect('/signin');

    }

    public function postSignin(Request $request){


         $this->validate($request,[

           
           'email' => 'required',
           'password' => 'required'


        ]);
         if (Auth::attempt([

               
                'email' => $request->input('email'),
                'password' => $request->input('password')


            ]))
         {
                return redirect('/signup');
            }
            
            // return redirect('/home');

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getProfile() {
        //
    return view('user.profile');
    }

    public function getLogout(){
        Auth::logout();
        return redirect('/signin');
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
}
