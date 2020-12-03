<?php


namespace App\Modules\VersionControl\Classes;


use App\Helpers\Connectors\HttpClient;

interface VersionControl
{

public function getPopular (HttpClient $http_client , $params);

}
