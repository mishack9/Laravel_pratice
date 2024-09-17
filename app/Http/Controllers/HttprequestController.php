<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HttprequestController extends Controller
{
   public function request(Request $request)
    {
      
/* 
        echo $request->input('name');

        echo "<br>";

        return $request->method(); 
*/

     return $request;
     ;
    }
}
