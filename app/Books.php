<?php
namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
  protected $fillable = [
    'title',
    'year',
    'author',
    'publisher',
    'price',
    'review',
    'created_at',
    'updated_at'
  ];

  public function authors(){
    return $this->belongsTo('App\Authors', 'author', 'name');
  }
}
