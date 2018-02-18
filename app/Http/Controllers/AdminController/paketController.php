<?php

namespace App\Http\Controllers\AdminController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Paket as paket;

class paketController extends Controller
{
    public function paket(){
    	$view =  paket::all();
    	return view('admin-panel/paket', ["views" => $view]);
    }

    public function store(Request $request){
    	$add = new paket;
    	$add->name = $request->package_name;
    	$add->price = $request->package_price;
        $add->description = $request->package_description;
    	$add->detail = $request->package_detail;
        if($request->file('package_img')){
            $file = $request->file('package_img');   
            $destinationPath = 'uploads';
            $name = $request->package_name.".". $file->getClientOriginalExtension();
            $file->move($destinationPath,$name);
            $add->featured_img= trim($name);
        }
        $add->save();
         return redirect('/admin/paket');
    }

    public function edit($id){
        $view = paket::where('id_package', $id)->get();
        return view('admin-panel/single_paket', ["view" => $view[0]]);
    }

    public function update(request $request, $id){
        $update = paket::find($id);
        $update->name = $request->package_name;
        $update->price = $request->package_price;
         $update->description = $request->package_description;
        $update->detail = $request->package_detail;
        if($request->file('package_img')){
            $file = $request->file('package_img');   
            $destinationPath = 'uploads';
            $name = $request->package_name.".". $file->getClientOriginalExtension();
            $file->move($destinationPath,$name);
            $update->featured_img= trim($name);
        }
        $update->save();
         return redirect('/admin/paket');
    }

    public function delete($id){
        $view = paket::where('id_package', $id);
        $view->delete();
        return redirect('/admin/paket');
    }
}
