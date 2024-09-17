<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlashsessionController extends Controller
{
    function flashsession(Request $request)
    {
        $name = $request->name;
        $request->session()->flash("message", "User added successfully...");


        $request->session()->flash("name", $name);


        return redirect()->back();
    }
}
