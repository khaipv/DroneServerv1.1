<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ="san_pham";
    public $timestamps = false;
    protected $fillable = ['danh_muc_id','nha_cung_cap_id','ten_san_pham','don_gia','don_vi_ban','don_vi_ton_kho','sale','mo_ta_chung','diem_danh_gia_tb'];
}
