<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docs extends Model
{
    protected $fillable = ['title', 'path'];

    public function versions()
    {
        return $this->hasMany('App\Versions');
    }

    public function permissions()
    {
        return $this->hasMany('App\Permissions');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tags');
    }

    public function getDocs()
    {
        $docs = Docs::all();
        return $docs;
    }
}
