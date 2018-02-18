<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homepage as home;
use App\Models\Paket as paket;


class weddingController extends Controller
{
    public function index(){

    	$home = home::find(1);
    	$paket = paket::all();
    	return view('index', ['view' => $home, 
    						  'pakets' => $paket]);
    }

    public function paket($name){
    	$home = home::find(1);
    	$paket = paket::where('name', $name)->first();
        $pakets = paket::all();
        
    	return view('paket', ['view' => $home, 
    						  'paket' => $paket,
                              'pakets' => $pakets]);
    }
}
