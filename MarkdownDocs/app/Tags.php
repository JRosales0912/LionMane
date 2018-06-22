<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $fillable = ['tag']; 
    
    public function docs()
    {
        return $this->belongsToMany('App\Docs');
    }

    public function getTags()
    {
        $tags = Tags::all();
        return $tags;
    }
}
