<?php
/**
 * Created by PhpStorm.
 * User: Marino
 * Date: 23.6.2017.
 * Time: 16:08
 */

namespace App\Http\Controllers;
use App\Frizure;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use Redirect;
use Session;

class FrizureController
{
    /**
     * dodaj naziv i cjene za frizure
     *
     */
    public function frizura_add() {

        $entry = new Frizure();
        if(Input::get('naziv_f')!=""){
            $entry->naziv = Input::get('naziv_f');
        }else{
            Session::flash('error', 'Naziv nedostaje!!');
            return Redirect::to('home');
        }
        if(Input::get('cijena_f')!=""){
            $entry->cijena = Input::get('cijena_f');
        }else{
            Session::flash('error', 'Cijena nedostaje!!');
            return Redirect::to('home');
        }
        $entry->save();

        Session::flash('success', 'Cijena dodana!!');
        return Redirect::to('home');
    }
    /**
     * izmjeni naziv i cjene za frizure
     *
     */
    public function frizura_update() {

        $entry = Frizure::find(Input::get('id'));
        $entry->naziv = Input::get('naziv_f');
        $entry->cijena = Input::get('cijena_f');
        $entry->save();

        Session::flash('success', 'Cijena izmjenjena!!');
        return Redirect::to('home');
    }
    /**
     * izbrisi naziv i cjene za frizure
     *
     */
    public function frizura_delete() {

        $entry = Frizure::find(Input::get('id'));
        $entry->delete();

        Session::flash('success', 'Cijena izbrisana!!');
        return Redirect::to('home');
    }
}