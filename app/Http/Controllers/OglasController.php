<?php
/**
 * Created by PhpStorm.
 * User: Marino
 * Date: 23.6.2017.
 * Time: 16:07
 */

namespace App\Http\Controllers;


use App\Oglasi;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use Redirect;
use Session;
use Image;

class OglasController
{
    /**
     * dodaj novi oglas
     *
     */
    public function oglas_add()
    {
    //        getting all of the post data
                $file = Input::file('image');
                $entry = new Oglasi();

                if ($file) {
                    //            required mimes (png, jpg, jpeg)
                    $rules = array('file' => 'required');
                    $validator = Validator::make(array('file' => $file), $rules);
                    if ($validator->passes()) {
                        //                upload folder in public directory
                        $destinationPath = 'oglasi';
                        $filename = $file->getClientOriginalName();
                        $upload_success = $file->move($destinationPath, $filename);


//                    provjeri dali je slika dobro orijentirana, u slucaju da ni ispravi gresku
                        $file_path = 'oglasi/'.$filename;
                        Image::make($file_path)->orientate()->save($file_path);

                        //                save into database

                        $extension = $file->getClientOriginalExtension();

                        $entry->mime = $file->getClientMimeType();
                        $entry->original_filename = $filename;
                        $entry->filename = $file->getFilename() . '.' . $extension;

                    }


                } else {
                    $entry->mime = "";
                    $entry->original_filename = "";
                    $entry->filename = "";
                }
                if(Input::get('naslov')!=""){
                    $entry->naslov = Input::get('naslov');
                }else{
                    Session::flash('error', 'Naslov nedostaje!!');
                    return Redirect::to('home');
                }
                if(Input::get('opis')!=""){
                    $entry->opis = Input::get('opis');
                }else{
                    Session::flash('error', 'Opis nedostaje!!');
                    return Redirect::to('home');
                }
                if(Input::get('kontakt')!=""){
                    $entry->kontakt = Input::get('kontakt');
                }else{
                    $entry->kontakt = "";
                }
                $entry->save();

                Session::flash('success', 'Oglas dodan!!');
                return Redirect::to('home');

    }
    /**
     * izmjeni oglas
     *
     */
    public function oglas_update()
    {

        $entry = Oglasi::find(Input::get('id'));
        $entry->naslov = Input::get('naslov');
        $entry->opis = Input::get('opis');
        $entry->kontakt = Input::get('kontakt');
        $entry->save();

        Session::flash('success', 'Cijena izmjenjena!!');
        return Redirect::to('home');
    }
    /**
     * izbrisi oglas
     *
     */
    public function oglas_delete()
    {

        $entry = Oglasi::find(Input::get('id'));

        if ($entry->original_filename != ""){
            $file_path = 'oglasi/' . $entry->original_filename;
            unlink(public_path($file_path));
        }
        $entry->delete();

        Session::flash('success', 'Oglas izbrisan!!');
        return Redirect::to('home');
    }
}