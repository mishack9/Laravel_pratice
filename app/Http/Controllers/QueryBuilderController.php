<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryBuilderController extends Controller
{
    //
    function query()
    {

        $response = DB::table('users')->get();
       /* $response = DB::table('users')->first();
       $response=[$response]; */
        return view('querybuilder', ['response' => $response]);



   /*   $response = DB::table('users')->insert([
        'name'=>'John',
        'email'=>'john@gmail.com',
        'phone'=>234485
     ]);
     if($response)
     {
        die('New record inserted successfully...');
     } */



    /*  $response = DB::table('users')->where('id', 8)->update([
        'phone' => 3456789023456789034567890456789
     ]);
     if($response)
     {
        echo "Data updated successfully...";
     } else {
        echo "Fail to update data...";
     } */

   /*   $response = DB::table('users')->where('id', 8)->delete();
     if($response)
     {
        echo "Data deleted successfully...";
     } else {
        echo "Fail to update data...";
     } */

    }
}
