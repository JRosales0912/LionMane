<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Versions extends Model
{
    public function docs()
    {
        return $this->belongsTo('App\Docs');
    }

    public function getDocsVersions($docId)
    {
        $versions = Versions::where('docs_id', '=', $docId)->get();
        return $versions;
    }
}
