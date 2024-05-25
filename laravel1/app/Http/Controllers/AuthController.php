<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('page.register');
    }

    public function welcome(request $request)
    {
      $fname = $request->input('First');
      $lname = $request->input('last');

        return view('page.welcome', ['fname' => $fname, 'lname' => $lname]);
    }
}
