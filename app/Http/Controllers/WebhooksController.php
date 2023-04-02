<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Receiver\Facades\Receiver;
use Receiver\ReceivesWebhooks;
class WebhooksController extends Controller
{
    //
    use ReceivesWebhooks;
    public function store(Request $request)
    {

        return Receiver::driver('slack')
            ->receive($request)
            ->ok();
    }
    public function send(Request $request){
//        $url = 'http://127.0.0.1:8000/hooks/slack';
        $url = 'https://webhook.site/7de05bd1-ca19-46e5-af8e-9f30bdc0de70';
        $json_array = json_encode($request->all());
        $curl = curl_init();
        $headers = ['Content-Type: application/json'];

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $json_array);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HEADER, 1);
        curl_setopt($curl, CURLOPT_TIMEOUT, 30);

        $response = curl_exec($curl);
        $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        curl_close($curl);

        if ($http_code >= 200 && $http_code < 300) {
            echo "webhook send successfully.";
        } else {
            echo "webhook failed.";
        }
    }
    public function index(){
        return view('test');
    }
}
