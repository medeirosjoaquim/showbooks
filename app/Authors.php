<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
  protected $fillable =['name','city','bio'];
  public function books(){
    return $this->hasMany(Books::class, 'author', 'name');  
  }
    public function getRouteKeyName() {
        return 'name';
    }
}
