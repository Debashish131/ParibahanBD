<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Registration;
use PDF;


use DB;

class PDFController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function generatePDF()

    {

        $nid="";
        
        $dob="";

        $name="";

       
        $email="";

        $occupation="";


        $presentaddress="";

        $brta="";

       

        $vehiclenumber="";

        $renewaldate="";

        $expiredate="";


            $value= Registration::where([
            ['creator','=',Auth::user()->name]
            ])->get();

            
foreach ($value as $val) {
    # code...

   $nid=$val['nid'];
        
        $dob=$val['dob'];

        $name=$val['name'];

       
        $email=$val['email'];

        $occupation=$val['occupation'];


        $presentaddress=$val['presentaddress'];

        $brta=$val['brta'];

       

        $vehiclenumber=$val['vehiclenumber'];

        $renewaldate=$val['renewaldate'];

        $expiredate=$val['expiredate'];

}


        $data = ['nid' => $nid,'name'=>$name,'dob'=>$dob,'email'=>$email,'occupation'=>$occupation,'presentaddress'=>$presentaddress,'brta'=>$brta,'vehiclenumber'=>$vehiclenumber,'renewaldate'=>$renewaldate,'expiredate'=>$expiredate];


        // $test= Complain::all();
        // return view('myPDF',['test=>$test']);

        $pdf = PDF::loadView('myPDF', $data);




        return $pdf->download('ParibahanBD.pdf');

    }


}
