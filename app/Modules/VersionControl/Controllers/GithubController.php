<?php

namespace App\Modules\VersionControl\Controllers;


use App\Helpers\Connectors\GuzzleClient;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Modules\VersionControl\Classes\GitHub;
use \Illuminate\Support\Facades\Request;

class GithubController extends Controller
{

    public function getPopular(){
        $github = new GitHub;
        $response = $github->getPopular(new GuzzleClient() , Request::all());
        return Helper::responseJson($response,200, true);
    }

    /*
    def get_popular

    data = JSON.parse Github.new.get_popular(FaradayClient.new , top_count)
    render self.get_response(200, 'success', true, data) and return
    end

        private
        def top_count
          (['10','50','100'].include? params['top_count']) ? params['top_count'] : 10
        end

    */
}
