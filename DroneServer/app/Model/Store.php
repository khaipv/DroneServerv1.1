<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table ="cua_hang";
    public $timestamps = false;
    protected $fillable = ['dia_chi','email','sdt','nguoi_dung_id'];
}
