<?php


namespace App\Helpers;


use http\Client\Response;

class Helper
{

    public static function responseJson($data, $code = 200 , $state = true){

        $response = new \stdClass();
        $response->data = json_decode($data);

        $response->status = new \stdClass();
        $response->status->status = $state;
        $response->status->code = $code;

        return response()->json($response);
    }

}
