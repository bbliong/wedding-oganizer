<?php

namespace App\Http\Controllers\AdminController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Homepage as view;

class homeController extends Controller
{
     public function index(){
        $home = view::find(1);
    	return view('admin-panel/home', ['view' => $home]);
    }

    public function store(Request $request){
        $homepage = view::find(1);
        if($request->file('brand_logo')){
            $file = $request->file('brand_logo');   
            $destinationPath = 'uploads';
            $name = 'brand_logo.'. $file->getClientOriginalExtension();
            $file->move($destinationPath,$name);
            $homepage->logo_img = $name;
        }
        $homepage->title_page = $request->title_page;
        $homepage->jumbotron = $request->jumbotron_page;
        $homepage->description = $request->description_page;
        $homepage->fb_link = $request->facebook;
        $homepage->twt_link = $request->twitter;
        $homepage->ins_link = $request->instagram;
        $homepage->save();

        return redirect('/admin/home');
    }

}
