<?php
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $cities = [
            'Sofia' => 'Sofia',
            'Varna' => 'Varna',
            'Burgas' => 'Burgas',
            'Plovdiv' => 'Plovdiv',
            'Yambol' => 'Yambol',
            'Botevgrad' => 'Botevgrad',
            'Pleven' => 'Pleven',
            'Ruse' => 'Ruse',
            'Turgovishte' => 'Turgovishte',
            'Veliko Turnovo' => 'Veliko Turnovo',
        ];
        return view('index')->with('cities',$cities);
    }
}