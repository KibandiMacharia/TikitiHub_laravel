<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cinemas extends Model
{
    
    protected $fillable = [
        'cinema_name', 'location','user_id',
      ];
        protected $primaryKey = 'id';
}
