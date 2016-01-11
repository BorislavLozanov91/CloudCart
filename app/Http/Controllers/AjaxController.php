<?php
namespace App\Http\Controllers;

use App\RouteStops;
use App\Routes;
use App\Http\Controllers\Controller;
use cURL;
use DB;

class AjaxController extends Controller
{
    private $apiPath = 'http://localhost/cloudcart/public/api/v1.1/routes/search/';

    public function findRoutes()
    {
        if (isset($_POST) && !empty($_POST)) {

            $startPoint = $_POST['startPoint'];
            $endPoint = $_POST['endPoint'];
            $apiPath = $this->apiPath;

            if ((isset($startPoint) && $startPoint != 'default_start') && (isset($endPoint) && $endPoint != 'default_end')) {
                $response = cURL::get($apiPath.$startPoint.'/'.$endPoint);
            } else {
                return;
            }

            if (is_object($response) && ($response->body == 'empty')) {
                $response->statusCode = 400;
                $response->statusText = 'No routes Found';
            }
            
            return response()->json($response);
        }
    }
}