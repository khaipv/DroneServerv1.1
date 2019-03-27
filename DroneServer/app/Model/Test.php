<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table ="ten_bai_kiem_tra";
    public $timestamps = false;
    protected $fillable = ['ten_bai_kiem_tra','so_cau','thoi_gian','nha_cung_cap_id'];
}
