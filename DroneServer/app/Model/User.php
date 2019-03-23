<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table ="nguoi_dung";
    public $timestamps = false;
    protected $fillable = ['ho_ten','email','mat_khau','so_dien_thoai','dia_chi','vai_tro_id'];
}
