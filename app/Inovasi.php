<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inovasi extends Model
{
    //menghubungkan table Inovasi
    protected $table = 'inovasi';
    //menyimpan data tanpa timestamps(created_at, updated_at, delete_at)
    public $timestamps = false;
}
