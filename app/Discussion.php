<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
	protected $fillable = ['title', 'content', 'user_id', 'channel_id'];

    public function channels(){

    	return $this->belongsTo('App\Channel');
    }

    public function replies(){

    	return $this->hasMany('App\Reply'); 
    }

    public function users(){

    	return $this->belongsTo('App\User');
    }
}
