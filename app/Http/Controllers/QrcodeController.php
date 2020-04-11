<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Registration;
// use App\Http\Controllers\QrCode;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrcodeController extends Controller
{
 
  public  function qrcode(){
    

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



     return QrCode::size(300)->generate("Name: ".$name." \nEmail: ".$email. "\nDate of Birth".$dob."\nVehicle Number: " .$vehiclenumber."\nRenew Date: ".$renewaldate."\nExpire Date: ".$expiredate);


  }
}
