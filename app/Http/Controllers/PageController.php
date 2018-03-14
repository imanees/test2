<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Auth;
use Session;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function myRate()
    {
        $client = new Client();
        $baseUrl = 'http://user.popularvoiz.com/billing/api/';
        $response = $client->get($baseUrl . 'checkRate.jsp', ['query' => ['username' => Auth::user()->name]]); //Auth::user()->name
        $rates = $response->getBody()->getContents();
        $rates = explode('</br>', $rates);
        return view('ratePlan', [
                'rates' => $rates
            ]);
    }

    public function mtuRate(Request $request)
    {
        PageController::newnonce();
        $this->validate($request, [
            'country' => 'required',

        ]);
        $client = new Client();
        $baseUrl = 'http://user.popularvoiz.com/billing/api/';
        $response = $client->get($baseUrl . 'mtuRateApi.jsp', ['query' => ['user' => Auth::user()->name, 'nonce' => Session::get('nonce'), 'password' => Session::get('key'), 'country' => $request->country]]);
        
        $rates = $response->getBody()->getContents();
        /*if (strpos($rates, 'errorCode') !== FALSE) {
                
            $rates = explode(',', $rates);
            $error = explode(':', $rates[0]);
            if ($error[1] == 103) {
                return back()->with('message', 'countryName is invalid');
            }
            elseif ($error[1] == 109 || $error[1] == 106 || $error[1] == 108) {
                PageController::newnonce();
                $client = new Client();
                $baseUrl = 'http://user.popularvoiz.com/billing/api/';
                $response = $client->get($baseUrl . 'mtuRateApi.jsps', ['query' => ['user' => Auth::user()->name, 'nonce' => Session::get('nonce'), 'password' => Session::get('key'), 'country' => $request->country]]);
                
                $rates = $response->getBody()->getContents();

            }

            
        }*/
        $rates = explode('</br>', $rates);
        return view('topUpRate', [
                'rates' => $rates,
                'country' => $request->country
            ]);
    }

    public function profile()
    {
        PageController::newnonce();
        $client = new Client();
        $baseUrl = 'http://user.popularvoiz.com/billing/';
        $response = $client->get($baseUrl . 'profilePictureHandler.do', ['query' => ['requesttype' => 'getProfileInfo', 'username' => Auth::user()->name, 'nonce' => Session::get('nonce'), 'password' => Session::get('key')]]);
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
        $baseUrl = 'http://217.163.51.232/ymax/api/';
        $response = $client->get($baseUrl . 'callHistoryApi.do', ['query' => ['service_type' => 1, 'from_time' => $startdate, 'to_time' => $enddate, 'user' => Auth::user()->name, 'password' => Session::get('key'), 'nonce' => Session::get('nonce')]]);
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
        $baseUrl = 'http://217.163.51.232/ymax/api/';
        $response = $client->get($baseUrl . 'callHistoryApi.do', ['query' => ['service_type' => 1, 'from_time' => $startdate, 'to_time' => $enddate, 'user' => Auth::user()->name, 'password' => Session::get('key'), 'nonce' => Session::get('nonce')]]);
        $list = $response->getBody()->getContents();
        return view('history', [
                'list' => $list
            ]);
    }
    public function history()
    {
        $startdate = date("Y-m-d H:i:s"); 
        $enddate = date("Y-m-d H:i:s", strtotime('-3 days') );
        PageController::newnonce();
        $client = new Client();
        $baseUrl = 'http://user.popularvoiz.com/billing/';
        $response = $client->get($baseUrl . 'callHistoryApi.do', ['query' => ['service_type' => 1, 'from_time' => $startdate, 'to_time' => $enddate, 'user' => Auth::user()->name, 'password' => Session::get('key'), 'nonce' => Session::get('nonce')]]);
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
        PageController::newnonce();
        $client = new Client();
        $baseUrl = 'http://user.popularvoiz.com/billing/api/';
        $response = $client->get($baseUrl . 'addFundAPI.do', ['query' => ['service_type' => 'rechargeHistory', 'historyCount' => $request->count, 'user' => Auth::user()->name, 'password' => Session::get('key'), 'nonce' => Session::get('nonce')]]);
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
        $baseUrl = 'http://217.163.51.232/ymax/api/';
        $response = $client->get($baseUrl . 'packageApi.do', ['query' => ['user' => Auth::user()->name, 'password' => (nonce+user+password), 'nonce' => yafvfycgv, 'type' => getPackageList]]);
        $result = $response->getBody()->getContents();
        return view('packages', [
                'result' => $result
            ]);
    }

    public static function newnonce()
    {
        $client = new Client();
        $baseUrl = 'http://user.popularvoiz.com/billing';//http://user.popularvoiz.com/billing/api/profilePictureHandler.do?requesttype=getNonce&username=0567148920&nonce=dhgtwfgdsh
        $response = $client->get($baseUrl . '/profilePictureHandler.do', ['query' => ['requesttype'=> 'getNonce', 'username' => Auth::user()->name, 'nonce' => 'dvtftfdd']]);

        $result = $response->getBody()->getContents();
        $result = explode(',', $result);
        if(isset($result[1])) {
            $nonce = explode('=', $result[1]);    
        }
        Session::put('nonce', $nonce[1]);
        $key = md5(Session::get('nonce').Auth::user()->name.Session::get('password'));
        Session::put('key', $key);

    }

    public static function getBalance()
    {
        $client = new Client();
        $baseUrl = 'http://user.popularvoiz.com/billing/';
        $response = $client->get($baseUrl . 'getclientbalance.do', ['query' => ['pin' => Auth::user()->name]]);
        $result = $response->getBody()->getContents();
        return round($result,4);
    }


}
