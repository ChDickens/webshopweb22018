<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function getWayGet()
    {
        return view('product.checkout');
    }

    public function getCountry()
    {
        // set IP address and API access key
        $ip = $_SERVER['REMOTE_ADDR']; // 127.0.0.1
        $ip = '46.53.128.17';
        $access_key = '001c0649da112a89ad0c13de43f7a4e5';

        // Initialize CURL:
        $ch = curl_init('http://api.ipstack.com/'.$ip.'?access_key='.$access_key.'');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Store the data:
        $json = curl_exec($ch);
        curl_close($ch);

        // Decode JSON response:
        $api_result = json_decode($json, true);

        // Output the "capital" object inside "location"
        dd($api_result['country_name']['capital']);
    }

    public function getWay(Request $request)
    {
        $from = $request->input('from');
        $to = $request->input('to');
//        $apikey = 'd6a99093-1f8c-4204-a8f0-fee5724c5163';

        $ch = curl_init("https://api.rasp.yandex.net/v3.0/search/?format=json&from=".$from."&to=".$to."&lang=ru_RU&transport_types=bus");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: d6a99093-1f8c-4204-a8f0-fee5724c5163'));

        // Store the data:
        $json = curl_exec($ch);
        curl_close($ch);

        // Decode JSON response:
        $api_result = json_decode($json, true);
        dd($api_result);

        foreach ($api_result['segments'] as $segment) {
            echo $segment['from']['title'] .' - '. $segment['arrival'] .' - '. $segment['departure'];
            echo ' - ';
            echo $segment['to']['title'];
            echo '<br>';
        }
    }
}
