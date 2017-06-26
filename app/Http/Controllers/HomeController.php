<?php

namespace App\Http\Controllers;

use App\Depilacije;
use App\Frizure;
use App\Masaze;
use App\Oglasi;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use Redirect;
use Session;
use App\upload_slike;
use Image;

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
//        dohvati sve slike iz baze
        $images = upload_slike::all();
//        dohvati sve cijene depilacija
        $depilation = Depilacije::all();
//        dohvati sve cijene masaza
        $massage = Masaze::all();
//        dohvati sve cijene frizura
        $haircut = Frizure::all();
//        dohvati sve oglase
        $oglasi = Oglasi::all();

        return view('home', [
            'name' => 'home',
            'images' => $images,
            'depilation' => $depilation,
            'massage' => $massage,
            'haircut' => $haircut,
            'oglasi' => $oglasi,
        ]);
    }
    /**
    * dodaj slike, spremi ih na bazu i u public folder
    *
    */
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

//                    provjeri dali je slika dobro orijentirana, u slucaju da ni ispravi gresku
                    $file_path = 'frizure/'.$filename;
                    Image::make($file_path)->orientate()->save($file_path);

    //                save into database

                    $extension = $file->getClientOriginalExtension();
                    $entry = new upload_slike();
                    $entry->mime = $file->getClientMimeType();
                    $entry->original_filename = $filename;
                    $entry->filename = $file->getFilename().'.'.$extension;
                    $entry->save();
                }
            }
            if($uploadcount == $file_count) {
                Session::flash('success', 'Slike dodane u galeriju!');
                return Redirect::to('home');
            } else {
                return Redirect::to('home')->withInput()-withErrors($validator);
            }

        } else {
            Session::flash('success', 'Nije odabrana slika!!');
            return Redirect::to('home');
        }

    }
    /**
     * izbrisi sliku
     *
     */
    public function image_delete() {

        $entry = upload_slike::find(Input::get('id'));


        $file_path = 'frizure/'.$entry->original_filename;
        unlink(public_path($file_path));

        $entry->delete();

        Session::flash('success', 'Slika izbrisana!!');
        return Redirect::to('home');
    }

}
