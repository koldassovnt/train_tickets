<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
// use Symfony\Component\HttpFoundation\Cookie;
use Cookie;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Log.singIn');
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
        $remember = ($request->has('remember-me')) ? true : false;

        $auth = Auth::attempt(
            [
                'email'  => $request->email,
                'password'  => $request->password    
            ], $remember
        );

        if ($auth) {
            return redirect()->to('/');
        } else {
            return redirect()->to('login');
            // validation not successful, send back to form 
            // return Redirect::to('/login')
            //     ->with Input(Input::except('password'))
            //     ->with('flash_notice', 'Your username/password combination was incorrect.');
        }
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
    public function destroy()
    {
        auth()->logout();
        $rememberMeCookie = Auth::getRecallerName();
        $cookie = Cookie::forget($rememberMeCookie);
        
        return redirect()->to('/');
    }
}
