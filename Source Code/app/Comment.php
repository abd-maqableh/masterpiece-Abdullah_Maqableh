<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = ['description'];
    public function Offer()
    {
        return $this->belongsTo('App\Offer');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
