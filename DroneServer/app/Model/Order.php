<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table ="don_hang";
    public $timestamps = false;
    protected $fillable = ['dia_chi_nhan','ngay_dat','ngay_nhan','sdt_nhan_hang','trang_thai','nguoi_dung_id'];
   
}
