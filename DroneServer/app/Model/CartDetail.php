<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CartDetail extends Model
{
    protected $table ="chi_tiet_gio_hang";
    public $timestamps = false;
    protected $fillable = ['so_luong','san_pham_id','gio_hang_id'];
}
