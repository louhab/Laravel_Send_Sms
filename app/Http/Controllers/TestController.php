<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;

class TestController extends Controller
{

    public function sendSMS(Request $request)
    {
        $sid    = "AC3c32c83bf89a4184114000927596ecbb";
        $token  = "aa396b0e4d3d1d799b144fd90c8a2445";
        $twilio = new Client($sid, $token);
        $twilio->messages->create($request->phone_number,
            [
                "from" => "+12058917712",
                "body" => $request->message
            ]
          );


    }
}
