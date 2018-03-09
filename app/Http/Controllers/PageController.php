<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PageController extends Controller
{
	public function __construct()
	{
	    $this->middleware('auth');
	}
    public function myRate()
    {
        $client = new Client();
        $baseUrl = 'http://85.13.248.212/ymax/api/';
        $response = $client->get($baseUrl . 'checkRate.jsp', ['query' => ['username' => 48006]]); //Auth::user()->name
        $rates = $response->getBody()->getContents();
        $rates = explode('</br>', $rates);
        return view('ratePlan', [
				'rates' => $rates
			]);
    }

}
