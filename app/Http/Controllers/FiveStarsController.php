<?php
/**
 * Created by PhpStorm.
 * User: Marino
 * Date: 14.6.2017.
 * Time: 14:33
 */

namespace App\Http\Controllers;


class FiveStarsController
{
    public function index()
    {
        return view('posts/5stars');
    }
}