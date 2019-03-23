<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table ="gio_hang";
    public $timestamps = false;
    protected $fillable = ['ma_nguoi_dung'];
}
