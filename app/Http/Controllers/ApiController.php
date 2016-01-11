<?php
namespace App\Http\Controllers;

use App\User;
use App\Routes;
use App\RouteStops;
use App\Http\Controllers\Controller;
use DB;

class ApiController extends Controller
{
    public function apiRequest($startPoint, $endPoint)
    {   
    	$route_stop_ids = array();
    	$i = 0;

    	$route_stops = RouteStops::select(DB::raw('GROUP_CONCAT(route_stops.name SEPARATOR ",") AS route') , 'route_stops.route_id as routeId')
                            ->whereIn('name', array($startPoint, $endPoint))
                            ->orderBy('stop_num', 'ASC')->groupBy('route_id')->get()->toArray();

        foreach ($route_stops as $k => $route) {

        	$route['route'] = explode(",", $route['route']);
        	if (count($route['route']) > 1) {
        		$route_stop_ids[$i] = $route['routeId'];
        		$i++;
        	}
        }

        $routes_found = RouteStops::select(DB::raw('GROUP_CONCAT(route_stops.name SEPARATOR ",") AS full_route'))
        					->whereIn('route_id', $route_stop_ids)->groupBy('route_id')->get()->toArray();

        if (empty($routes_found)) $routes_found = 'empty';
    	return $routes_found;
    }
}