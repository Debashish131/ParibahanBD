<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Registration;


class HomeController extends Controller

{

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()

    {

        $this->middleware('auth');

    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()

    {

        return view('home');

    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function adminHome()

    {

        return view('adminHome');

    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect("/");
    }

    public function renewal(Request $request)

    {
//        $value = Registration::where([[
//            'creator', '=', Auth::user()->name
//        ]])->get();
        $value = \App\Registration::where([[
           'creator', '=', Auth::user()->name
      ]])->get();
        return view('renewal', compact('value'));

    }


}
