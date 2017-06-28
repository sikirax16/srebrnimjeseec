<?php
/**
 * Created by PhpStorm.
 * User: Marino
 * Date: 23.6.2017.
 * Time: 16:08
 */

namespace App\Http\Controllers;
use App\Depilacije;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use Redirect;
use Session;

class DepilacijeController
{
    /**
     * dodaj naziv i cjene za depilacije
     *
     */
    public function depilacija_add() {

        $entry = new Depilacije();
        if(Input::get('naziv_d')!=""){
            $entry->naziv = Input::get('naziv_d');
        }else{
            Session::flash('error', 'Naziv nedostaje!!');
            return Redirect::to('home');
        }
        if(Input::get('cijena_d')!=""){
            $entry->cijena = Input::get('cijena_d');
        }else{
            Session::flash('error', 'Cijena nedostaje!!');
            return Redirect::to('home');
        }
        if(Input::get('cijena_d')!=""){
            $entry->vosak = Input::get('vosak');
        }else{
            $entry->vosak = 0;
        }
        $entry->save();

        Session::flash('success', 'Cijena dodana!!');
        return Redirect::to('home');
    }
    /**
     * izmjeni naziv i cjene za depilacije
     *
     */
    public function depilacija_update() {

        $entry = Depilacije::find(Input::get('id'));
        $entry->naziv = Input::get('naziv_d');
        $entry->cijena = Input::get('cijena_d');
        $entry->vosak = Input::get('vosak');
        $entry->save();

        Session::flash('success', 'Cijena izmjenjena!!');
        return Redirect::to('home');
    }
    /**
     * izbrisi naziv i cjene za depilacije
     *
     */
    public function depilacija_delete() {

        $entry = Depilacije::find(Input::get('id'));
        $entry->delete();

        Session::flash('success', 'Cijena izbrisana!!');
        return Redirect::to('home');
    }
}