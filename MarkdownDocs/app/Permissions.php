<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    protected $fillable = ['view', 'edit'];

    public function docs()
    {
        return $this->belongsTo('App\Docs');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getPermissions()
    {
        $permissions = Permissions::all();
        return $permissions;
    }

    public function getPermissionsForDoc($idDoc)
    {
        $permissions = Permissions::where('docs_id', '=' , $idDoc );
        return $permissions;
    }

    public function getPermissionsForUser($idUser)
    {
        $permissions = Permissions::where('user_id', '=' , $idUser );
        return $permissions;
    }

}
