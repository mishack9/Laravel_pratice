<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user_form()
    {
        return view('user-form');
    }

    public function user_su(Request $request)
    {
        $request->validate([
            'username' => ['required', 'min:5', 'max:20'],
            'email' => ['required', 'email'],
            'city' => ['required', 'uppercase'],
            'skill' => ['required']
        ],
          [
            'username.required'=>'The Username Feild Must Not Be Empty....',
            'username.min'=>'The Minimum Value Limit Must Be Atleast 5..',
            'username.max'=>'The Maximum Value Limit Must Be Atleast 20..',
            'city.uppercase'=>'The City Characters Must Be An Uppercase..'
          ]
    );
dd($request);
    }
}
