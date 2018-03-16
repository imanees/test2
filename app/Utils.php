<?php

namespace App;
use DB;
use Auth;
use GuzzleHttp\Client;
class Utils
{

	public static function getCountryList()
    {
        $client = new Client();
        $baseUrl = 'http://user.popularvoiz.com/billing/api/';
        $response = $client->get($baseUrl . 'signupPin.jsp', ['query' => ['type' => 'country']]);
        $result = $response->getBody()->getContents();
        return $result;
    }

    public static function getLanguageList()
    {
        $client = new Client();
        $baseUrl = 'http://user.popularvoiz.com/billing/api/';
        $response = $client->get($baseUrl . 'languageAPI.jsp', ['query' => ['type' => 'getLanguageList', 'username' =>Auth::user()->name]]);
        $result = $response->getBody()->getContents();
        $lang = explode('<br/>', $result);
        foreach($lang as $key => $one) {
		    if(strpos($one, 'nonce') !== false)
		        unset($lang[$key]);
		}
        return $lang;
    }



}