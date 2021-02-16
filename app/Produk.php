<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model 
{
    protected $table = 'produk';
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $fillable = [
        'nama','harga','warna','kondisi','deskripsi' 
    ];
}
