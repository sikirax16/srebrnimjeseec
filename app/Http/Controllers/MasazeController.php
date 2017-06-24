<?php
/**
 * Created by PhpStorm.
 * User: Marino
 * Date: 23.6.2017.
 * Time: 16:08
 */

namespace App\Http\Controllers;
use App\Masaze;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use Redirect;
use Session;

class MasazeController
{
    /**
     * dodaj naziv i cjene za masaze
     *
     */
    public function masaza_add() {

        $entry = new Masaze();
        if(Input::get('naziv_m')!=""){
            $entry->naziv = Input::get('naziv_m');
        }else{
            Session::flash('error', 'Naziv nedostaje!!');
            return Redirect::to('home');
        }
        if(Input::get('trajanje_m')!=""){
            $entry->trajanje = Input::get('trajanje_m');
        }else{
            Session::flash('error', 'Trajanje nedostaje!!');
            return Redirect::to('home');
        }
        if(Input::get('cijena_m')!=""){
            $entry->cijena = Input::get('cijena_m');
        }else{
            Session::flash('error', 'Cijena nedostaje!!');
            return Redirect::to('home');
        }
        $entry->save();

        Session::flash('success', 'Cijena dodana!!');
        return Redirect::to('home');
    }
    /**
     * izmjeni naziv i cjene za masaze
     *
     */
    public function masaza_update() {

        $entry = Masaze::find(Input::get('id'));
        $entry->naziv = Input::get('naziv_m');
        $entry->trajanje = Input::get('trajanje_m');
        $entry->cijena = Input::get('cijena_m');
        $entry->save();

        Session::flash('success', 'Cijena izmjenjena!!');
        return Redirect::to('home');
    }
    /**
     * izbrisi naziv i cjene za masaze
     *
     */
    public function masaza_delete() {

        $entry = Masaze::find(Input::get('id'));
        $entry->delete();

        Session::flash('success', 'Cijena izbrisana!!');
        return Redirect::to('home');
    }
}