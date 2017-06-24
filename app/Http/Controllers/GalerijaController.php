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

//        dohvati sve slike iz baze
        $images = upload_slike::all();

        return view('posts/galerija', [
            'name' => 'Galerija',
            'images' => $images,
        ]);
    }
}