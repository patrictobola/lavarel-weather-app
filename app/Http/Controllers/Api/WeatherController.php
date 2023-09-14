<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request as HtmlRequest;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;

class WeatherController extends Controller
{
    public function index()
    {
        $weather = getWeather();
        $types = DB::table('types')->get();
        return response()->json([$weather, $types]);
    }


    public static function getHttpHeaders()
    {

        $bearerToken = 'your-bearer-token';
        $headers    =   [
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . $bearerToken,
            ],
            'http_errors' => false,
        ];
        return $headers;
    }
    public static function getWeather($endpoint)
    {

        $url = 'https://api.open-meteo.com/v1/forecast?latitude=41.8919&longitude=12.5113&hourly=temperature_2m&timezone=auto';
        $client = new \GuzzleHttp\Client(self::getHttpHeaders());
        $response = $client->get($url, ['verify' => false]);
        $resp['statusCode'] = $response->getStatusCode();
        $resp['bodyContents'] = $response->getBody()->getContents();
        return $resp;
    }
    // $response = Http::get('https://api.open-meteo.com/v1/forecast?latitude=41.8919&longitude=12.5113&hourly=temperature_2m&timezone=auto');

}
