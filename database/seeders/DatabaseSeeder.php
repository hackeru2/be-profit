<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->getData();
    }

    /**
     * @return void
     */
    public function getData(): void
    {
        $api_url = env('API_URL');
        $api_username = env('API_USERNAME');
        $api_password = env('API_PASSWORD');
        $auth = base64_encode($api_username . ":" . $api_password);
        $response = Http::withHeaders(['Authorization' => "Basic ".$auth ])->get($api_url);
        $statusCode = $response->status();
        $responseBody = json_decode($response->getBody(), true);
        error_log( "Status code: ". $statusCode);
        Order::insert($responseBody['data']);
        error_log(Order::count() . ' columns inserted.');
    }
}
