<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table ="vai_tro";
    public $timestamps = false;
    protected $fillable = ['ten_vai_tro'];
}
