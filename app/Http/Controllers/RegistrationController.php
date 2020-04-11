<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Registration;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      {
          return view('Regi');
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function submitform(Request $request)
    {
        $registration=new registration();

        $registration->nid = $request->input('nid');
        $registration->dob = $request->input('dob');
        $registration->name = $request->input('name');
        $registration->fathername = $request->input('fathername');
        $registration->mothername = $request->input('mothername');
        $registration->email = $request->input('email');
        $registration->occupation = $request->input('occupation');
        $registration->presentaddress = $request->input('presentaddress');
        $registration->brta = $request->input('brta');
        $registration->learnerlicence = $request->input('learnerlicence');
        $registration->vehiclenumber = $request->input('vehiclenumber');
        $registration->applicationtype = $request->input('applicationtype');
        $registration->instructornbr = $request->input('instructornbr');
        $registration->classofvehicle = $request->input('classofvehicle');
        $registration->renewaldate = $request->input('renewaldate');
        $registration->expiredate = $request->input('expiredate');
        $registration->rtcCode = $request->input('rtcCode');
        $registration->creator = Auth::user()->name ;

        $registration->save();
        
        return redirect('/home');
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
     * @param  \App\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function show(Registration $registration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function edit(Registration $registration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registration $registration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registration $registration)
    {
        //
    }
}
