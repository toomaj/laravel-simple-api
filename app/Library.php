<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
  protected $fillable = [
    'code', 'name', 'url', 'abbr',
  ];
}
