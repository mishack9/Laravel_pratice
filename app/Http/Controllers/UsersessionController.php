<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersessionController extends Controller
{
    function sessioncheck(Request $request)
    {
        $request->session()->put('name', $request->input('name'));

       /*  $request->session()->put('allData', $request->input()); */

        /* echo session('name'); */
        return redirect('sessionprofile');
    }

    function logout()
    {
        session()->pull('name');
        return redirect('sessionprofile');
    }
}
