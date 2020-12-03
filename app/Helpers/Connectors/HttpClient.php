<?php

namespace App\Helpers\Connectors;


interface HttpClient
{

    public function get($base,$segment,$params);
}
