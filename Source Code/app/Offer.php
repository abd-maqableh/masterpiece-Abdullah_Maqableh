<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    //
    protected $fillable =['name','description','location','date','price','photo','category_id','user_id'];



    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function comment()
    {
        return $this->hasMany('App\Comment');
    }
    public function user()
    {
        return $this->belongsToMany('App\User');
    }
}
