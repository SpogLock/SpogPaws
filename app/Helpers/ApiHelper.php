<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;

class ApiHelper
{
    private static $baseUrl;

    /**
     * Initialize base URL from config
     */
    private static function init()
    {
        self::$baseUrl = config('services.api.base_url');
    }

    /**
     * Send a GET request
     */
    public static function get($endpoint, array $queryParams = [])
    {
        self::init();
        $url = self::$baseUrl . $endpoint;

        $response = Http::get($url, $queryParams);

        return $response->json();
    }

    /**
     * Send a POST request
     */
    public static function post($endpoint, array $data)
    {
        self::init();
        $url = self::$baseUrl . $endpoint;

        $response = Http::post($url, $data);

        return $response->json();
    }

    /**
     * Send a PUT request
     */
    public static function put($endpoint, array $data)
    {
        self::init();
        $url = self::$baseUrl . $endpoint;

        $response = Http::put($url, $data);

        return $response->json();
    }

    /**
     * Send a DELETE request
     */
    public static function delete($endpoint, array $data = [])
    {
        self::init();
        $url = self::$baseUrl . $endpoint;

        $response = Http::delete($url, $data);

        return $response->json();
    }
}
