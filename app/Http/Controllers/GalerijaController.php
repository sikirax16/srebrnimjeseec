<?php
/**
 * Created by PhpStorm.
 * User: Marino
 * Date: 14.6.2017.
 * Time: 14:57
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use Redirect;
use Session;
use App\upload_slike;


class GalerijaController extends Controller
{
    public function index()
    {
        return view('posts/galerija', [
            'name' => 'Galerija'
        ]);
    }
//    public function multiple_upload() {
////        getting all of the post data
//        $files = Input::file('images');
////        making counting of uploaded images
//        $file_count = count($files);
////        start count how many uploaded
//        $uploadcount = 0;
//
//        foreach ($files as $file) {
////            required mimes (png, jpg, jpeg)
//            $rules = array('file' => 'required');
//            $validator = Validator::make(array('file' => $file), $rules);
//            if($validator->passes()){
////                upload folder in public directory
//                $destinationPath = 'galerija';
//                $filename = $file->getClientOriginalName();
//                $upload_success = $file->move($destinationPath, $filename);
//                $uploadcount ++;
//
////                save into database
//
//                $extension = $file->getClientOriginalExtension();
//                $entry = new upload_slike();
//                $entry->mime = $file->getClientMimeType();
//                $entry->original_filename = $filename;
//                $entry->filename = $file->getFilename().'.'.$extension;
//                $entry->save();
//            }
//            if($uploadcount == $file_count) {
//                Session::flash('success', 'Slike dodane u galeriju!');
//                return Redirect::to('home');
//            } else {
//                return Redirect::to('home')->withInput()-withErrors($validator);
//            }
//
//
//
//
//        }
//
//
//
//    }
}