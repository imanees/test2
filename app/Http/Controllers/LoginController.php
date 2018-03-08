<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;

class loginController extends Controller
{
    //

    public function create()
    {
        $client = new Client();
        $baseUrl = 'http://85.13.248.212/ymax/api/';
        $response = $client->get($baseUrl . 'checkRate.jsp', ['query' => ['username' => 48006]]);
        $rates = $response->getBody()->getContents();
        $rates = explode('</br>', $rates);
        print_r($rates);
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
			Session::put('password', $request->password);

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
