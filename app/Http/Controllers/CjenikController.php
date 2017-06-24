<?php
/**
 * Created by PhpStorm.
 * User: Marino
 * Date: 14.6.2017.
 * Time: 14:33
 */

namespace App\Http\Controllers;
use App\Depilacije;
use App\Masaze;
use App\Frizure;
use App\Oglasi;

class CjenikController
{
    public function index()
    {

//        dohvati sve cijene depilacija
        $depilation = Depilacije::all();
//        dohvati sve cijene masaza
        $massage = Masaze::all();
//        dohvati sve cijene frizura
        $haircut = Frizure::all();
//        dohvati sve oglase
        $oglasi = Oglasi::all();

        return view('posts/cjenik', [
            'name' => 'Cjenik',
            'depilation' => $depilation,
            'massage' => $massage,
            'haircut' => $haircut,
            'oglasi' => $oglasi,
        ]);
    }
}