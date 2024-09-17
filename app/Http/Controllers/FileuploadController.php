<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileuploadController extends Controller
{
    function file(Request $request)
    {
       $path = $request->file('image')->store('public');

       //$path = $request->file('image')->storeAs('public', 'mishack.jpg');
        $filenameArray = explode('/', $path);
        $filename = $filenameArray[1];
         return view('displayfile', ['path' => $filename]);
    }
}
