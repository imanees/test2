<?php

namespace App;
use DB;
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



}