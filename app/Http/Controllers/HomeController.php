<?php

namespace App\Http\Controllers;

use App\add_massage_prices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use Redirect;
use Session;
use App\upload_slike;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $users = DB::table('users')->get();
//        $images = DB::table('slike')->get();

        return view('home', [
            'name' => 'home',
//            'images' => $images
        ]);
    }
    public function multiple_upload() {
//        getting all of the post data
        $files = Input::file('images');
//        making counting of uploaded images
        $file_count = count($files);
//        start count how many uploaded
        $uploadcount = 0;
        if($files){
            foreach ($files as $file) {
    //            required mimes (png, jpg, jpeg)
                $rules = array('file' => 'required');
                $validator = Validator::make(array('file' => $file), $rules);
                if($validator->passes()){
    //                upload folder in public directory
                    $destinationPath = 'frizure';
                    $filename = $file->getClientOriginalName();
                    $upload_success = $file->move($destinationPath, $filename);
                    $uploadcount ++;

    //                save into database

                    $extension = $file->getClientOriginalExtension();
                    $entry = new upload_slike();
                    $entry->mime = $file->getClientMimeType();
                    $entry->original_filename = $filename;
                    $entry->filename = $file->getFilename().'.'.$extension;
                    $entry->save();
                }
                if($uploadcount == $file_count) {
                    Session::flash('success', 'Slike dodane u galeriju!');
                    return Redirect::to('home');
                } else {
                    return Redirect::to('home')->withInput()-withErrors($validator);
                }
            }
        } else {
            Session::flash('success', 'Nije odabrana slika!!');
            return Redirect::to('home');
        }

    }
    public function add_massage() {

//        $entry = new add_massage_prices();
////        $entry->naziv = ;
////        $entry->cijena = $filename;
//        $entry->save();

        Session::flash('success', 'Cijena dodana!!');
        return Redirect::to('home');
    }
}
