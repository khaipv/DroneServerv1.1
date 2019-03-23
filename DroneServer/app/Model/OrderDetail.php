<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table ="chi_tiet_don_hang";
    public $timestamps = false;
    protected $fillable = ['so_luong','don_gia','san_pham_id','don_hang_id'];
}
