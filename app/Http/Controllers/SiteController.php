<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SiteController extends Controller
{
    public function index()
    {
        $api_url = env('API_URL');
        $api_username = env('API_USERNAME');
        $api_password = env('API_PASSWORD');
        $auth = base64_encode($api_username . ":" . $api_password);

        $response = Http::withHeaders(['Authorization' => "Basic ".$auth ])->get($api_url);
        $statusCode = $response->status();
        $responseBody = json_decode($response->getBody(), true);

        echo "Status code: ". $statusCode;  // status code

        //dd($responseBody['data']); // body response

        Order::insert($responseBody['data']);
        return Order::all();

    }
}
