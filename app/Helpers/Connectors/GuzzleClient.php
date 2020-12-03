<?php

namespace App\Helpers\Connectors;
use Illuminate\Support\Facades\Http;

class GuzzleClient implements HttpClient
{

    public function get($base,$segment,$params){

        $response = Http::get($base.$segment, $params);
        return $response->body();

    }
}
