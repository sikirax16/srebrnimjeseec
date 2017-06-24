<?php
/**
 * Created by PhpStorm.
 * User: Marino
 * Date: 23.6.2017.
 * Time: 15:45
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Oglasi extends Model
{
    public $timestamps = false;
    protected $table = 'oglasi_table';
}