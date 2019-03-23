<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  public $timestamps = false;
  protected $table = 'vai_tro';
    public function users()
{
  return $this->belongsToMany(User::class);
}
}
