<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedules extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'movie_title', 'cinema_name','date','time','ticket_cost',
      ];
        protected $primaryKey = 'id';

        public function user(){
          return $this->belongsTo('App\User');
      }
}
