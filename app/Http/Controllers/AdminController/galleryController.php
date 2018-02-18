<?php

namespace App\Http\Controllers\AdminController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Gallery as view;
use App\Models\Single_gallery;
use App\handler;

class galleryController extends Controller
{
	public function index(){
		// $comments = view::where('id_gallery', '1')->first()->singles;
		// dd($comments[0]->name_photo);
    	return view('admin-panel/gallery', ['views' => view::all()]);
    }

    public function indexSingle($id){
        // dd(Single_gallery::where('id_photo', "")->first());
    	return view('admin-panel/single-gallery', ['view' => view::where('id_gallery', $id)->first()]);
    }

    public function indexdelete($id){
        $handler = new handler();
        $path    = "uploads/gallery/".view::where('id_gallery', $id)->first()->name. "/";
        if(is_dir($path)){
            $delete = $handler->removeDirectory($path);
            if($delete){
                 view::where('id_gallery', $id)->delete();
            }
        }
        else {
            view::where('id_gallery', $id)->delete();
        }
        return redirect('/admin/gallery');
    }


    public function store(Request $request){
    	$add = new view;
    	$add->name = $request->gallery_name;
        $add->description = $request->gallery_description;
        $add->save();
        return view('admin-panel/gallery', ['views' => view::all()]);
    }

public function upload(Request $request, $id){
        $single = new Single_gallery;
        $gallery = view::where('id_gallery', $id)->first();

        $uploader = new handler();

        // Specify the list of valid extensions, ex. array("jpeg", "xml", "bmp")
        $uploader->allowedExtensions = array(); // all files types allowed by default

        // Specify max file size in bytes.
        $uploader->sizeLimit = 5024000;

        // Specify the input name set in the javascript.
        $uploader->inputName = "qqfile"; // matches Fine Uploader's default inputName value by default

        // If you want to use the chunking/resume feature, specify the folder to temporarily save parts.
        $uploader->chunksFolder = "chunks";

        $method = $uploader->ismethod();

        // This will retrieve the "intended" request method.  Normally, this is the
        // actual method of the request.  Sometimes, though, the intended request method
        // must be hidden in the parameters of the request.  For example, when attempting to
        // delete a file using a POST request. In that case, "DELETE" will be sent along with
        // the request in a "_method" parameter.
        if ($method == "POST") {
            header("Content-Type: text/plain");

            // Assumes you have a chunking.success.endpoint set to point here with a query parameter of "done".
            // For example: /myserver/handlers/endpoint.php?done
            if (isset($_GET["done"])) {
                $result = $uploader->combineChunks("files");
            }
            // Handles upload requests
            else {
                // Call handleUpload() with the name of the folder, relative to PHP's getcwd()
                $result = $uploader->handleUpload("uploads/gallery", $gallery->name);

                // To return a name used for uploaded file you can use the following line.
                $result["uploadName"] = $uploader->getUploadName();
                if($result["success"] == 1){
                    $single->name_photo = $uploader->getUploadName();
                    $single->id_gallery = $id;
                    $single->save();
                }
            }

            echo json_encode($result);
        }
        // for delete file requests
        else if ($method == "DELETE") {
            $result = $uploader->handleDelete("uploads/gallery", $gallery->name, Single_gallery::where('id_photo', $request->photo_id)->first()->name_photo);
            Single_gallery::where('id_photo', $request->photo_id)->delete();
            // echo "<script> console.log(".$lala .")</script>"; 
            echo json_encode("true");
        }
        else {
            header("HTTP/1.0 405 Method Not Allowed");
        }
    }
}
