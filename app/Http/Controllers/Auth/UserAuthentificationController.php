<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserAuthentificationController extends Controller
{
    public function login()
	{
		return view('auth.login');
	}

	public function authentificate(Request $request)
	{
		dd($request);
	}
}