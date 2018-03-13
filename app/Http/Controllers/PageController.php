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

    public function mtuRate(Request $request)
    {
        $this->validate($request, [
            'country' => 'required',

        ]);
        $client = new Client();
        $baseUrl = 'http://sip.myswitch.com/api/';
        $response = $client->get($baseUrl . 'mtuRateApi.jsp', ['query' => ['country' => $request->country]]);
        $rates = $response->getBody()->getContents();
        $rates = explode('</br>', $rates);
        return view('topUpRate', [
                'rates' => $rates,
                'country' => $request->country
            ]);
    }

    public function profile()
    {
        $client = new Client();
        $baseUrl = 'http://sip.myswitch.com/';
        $response = $client->get($baseUrl . 'profilePictureHandler.do', ['query' => ['requesttype' => getProfileInfo, 'username' => Auth::user()->name, 'nonce' => AF9EBBE3, 'password' => (nonce+user+password)]]);
        $info = $response->getBody()->getContents();
        
        //$info = "status=0,name= xx,emailID=yy@revesoft.com,nationality=Bangladesh,state=Dhaka,dateOfBirth=YYYYMMDD";
        $info = explode(',', $info);
        foreach ($info as $key => $value) {
            $data = explode('=', $value);
            $profile[$data[0]] = $data[1];
        }
        return view('profile', [
                'info' => $profile
            ]);
    }
    public function ajax($id)
    {
        if($id == 1){
            $date = strtotime("Today 12:01am "); 
            $startdate = date("Y-m-d H:i:s", $date);
            $enddate = date("Y-m-d H:i:s");
        }
        elseif($id == 2){
            $startdate = strtotime("yesterday 00:00 "); 
            $startdate = date("Y-m-d H:i:s", $startdate);
            $enddate = strtotime("today");
            $enddate = date("Y-m-d H:i:s", $enddate);
        }
        elseif ($id == 3) {
            $enddate = date("Y-m-d H:i:s");
            $startdate = date("Y-m-d H:i:s", strtotime('-2 days') );
        }
        PageController::historyfunction($startdate, $enddate);
        
    }

    public function  historyfunction($startdate, $enddate){
        $client = new Client();
        $baseUrl = 'http://sip.myswitch.com/api/';
        $response = $client->get($baseUrl . 'callHistoryApi.do', ['query' => ['service_type' => 1, 'from_time' => $startdate, 'to_time' => $enddate, 'user' => Auth::user()->name, 'password' => (nonce+user+password), 'nonce' => yafvfycgv]]);
        $log = $response->getBody()->getContents();
        return view('historyajax', [
                'logs' => $log
            ]);
    }

    public function historyFilter(Request $request)
    {
        $this->validate($request, [
            'daterange' => 'required',

        ]);
        $date = explode('-', $request->daterange);
        
        $startdate = date("Y-m-d H:i:s", strtotime($date[0]) );
        $enddate = date("Y-m-d H:i:s", strtotime($date[1]) );

        $client = new Client();
        $baseUrl = 'http://sip.myswitch.com/api/';
        $response = $client->get($baseUrl . 'callHistoryApi.do', ['query' => ['service_type' => 1, 'from_time' => $startdate, 'to_time' => $enddate, 'user' => Auth::user()->name, 'password' => (nonce+user+password), 'nonce' => yafvfycgv]]);
        $list = $response->getBody()->getContents();
        return view('history', [
                'list' => $list
            ]);
    }
    public function history()
    {
        $client = new Client();
        $baseUrl = 'http://sip.myswitch.com/api/';
        $response = $client->get($baseUrl . 'callHistoryApi.do', ['query' => ['service_type' => 1, 'from_time' => '2014-06-01 12:33:34', 'to_time' => '2014-06-01 12:33:34', 'user' => Auth::user()->name, 'password' => (nonce+user+password), 'nonce' => yafvfycgv]]);
        $log = $response->getBody()->getContents();
        /*$log = "si;dialed_no;connect_time;duration;region;call_cost<br>
        si = 0;8801753716990; 2014-08-26 16:30:18;200;Bangladesh (880);0.50<br>
        si = 1;8801753716990; 2014-08-26 16:32:18;120;India (91);1.20";*/
        $log = explode('<br>', $log);
        unset($log[0]);
        return view('history', [
                'logs' => $log
            ]);
    }
    public function rechargeHistory(Request $request)
    {
        $this->validate($request, [
            'count' => 'required',

        ]);
       $client = new Client();
        $baseUrl = 'http://sip.myswitch.com/api/';
        $response = $client->get($baseUrl . 'addFundAPI.do', ['query' => ['service_type' => rechargeHistory, 'historyCount' => $request->count, 'user' => Auth::user()->name, 'password' => (nonce+user+password), 'nonce' => yafvfycgv]]);
        $result = $response->getBody()->getContents();
        /*$result = "Date;description;amount;rechargedescription;rechargeby<br>
        2014-08-26 16:30:18,Account recharged by shameed,4.795,transactio id:551151,10001<br>
        2014-08-26 16:30:18,Account recharged by fADECUT,4.795,,masud";*/
        $result = explode('<br>', $result);
        unset($result[0]);
        return view('paymentView', [
                'result' => $result
            ]);
    }

    public function packages()
    {
        $client = new Client();
        $baseUrl = 'http://sip.myswitch.com/api/';
        $response = $client->get($baseUrl . 'packageApi.do', ['query' => ['user' => Auth::user()->name, 'password' => (nonce+user+password), 'nonce' => yafvfycgv, 'type' => getPackageList]]);
        $result = $response->getBody()->getContents();
        return view('packages', [
                'result' => $result
            ]);
    }       

}
