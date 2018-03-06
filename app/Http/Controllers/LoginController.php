<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    //

    public function create()
    {
        return view('login.login');
    }
    public function login(Request $request)
	{
		$this->validate($request, [
		    'name' => 'required',
		    'password' => 'required'
		    
		]);

		if (Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
			//echo redirect('/admin/home');

			return redirect()->intended('/');	
		}
		else{
			return back()->with('message', 'Password and username doesnot match with our record');
		}
	}
    
    public function logout(Request $request)
	{
		Auth::logout();

        $request->session()->invalidate();

        return redirect('/login');
	}
	
}
