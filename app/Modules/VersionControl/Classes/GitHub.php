<?php


namespace App\Modules\VersionControl\Classes;

use App\Helpers\HttpClient;

class GitHub implements VersionControl
{

public function getPopular ( $http_client , $params){

    $parameters = [];
    $parameters['q'] =  'created:>' . ENV('GITHUB_REPOS_CREATED_FROM',"2018-12-12") . (!isset($params['lang']) ? '' : (' language:'.$params['lang']));
    $parameters['sort'] = 'stars';
    $parameters['order'] = 'desc';
    $parameters['page'] = 1;
    $parameters['per_page'] = isset($params['top_count']) && in_array($params['top_count'] , [10,50,100]) ? $params['top_count']  : 10;

    return $http_client->get('https://api.github.com/','search/repositories',$parameters);

}


}
