<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
	protected $table= 'movie_info' ;

     protected $fillable = [
        'movie_title', 'movie_cast','movie_genre','movie_description','movie_poster','cover_image','url','release_year','language',
      ];
        protected $primaryKey = 'movie_id';
    }
