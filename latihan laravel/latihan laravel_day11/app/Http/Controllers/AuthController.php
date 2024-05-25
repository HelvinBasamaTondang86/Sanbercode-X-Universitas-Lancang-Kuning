<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function Register()
    {
        return view('Register');
    }

    public function welcome(Request $request)
    {
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $gender = $request->input('gender');
        $nasional = $request->input('nasional');
        $bahasa = $request->input('bahasa');
        $bio = $request->input('bio');

        return view('welcome', [
            'fname' => $fname,
            'lname' => $lname,
            'gender' => $gender,
            'nasional' => $nasional,
            'bahasa' => $bahasa,
            'bio' => $bio
        ]);
    }
}
