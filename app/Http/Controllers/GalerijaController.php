<?php
/**
 * Created by PhpStorm.
 * User: Marino
 * Date: 14.6.2017.
 * Time: 14:57
 */

namespace App\Http\Controllers;


class GalerijaController
{
    public function index()
    {
        return view('posts/galerija', [
            'name' => 'Galerija'
        ]);
    }
}