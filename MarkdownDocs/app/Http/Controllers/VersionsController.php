<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VersionsController extends Controller
{
    public function getVersions($docId)
    {
        $version = new Versions();
        $versions = $version -> getDocsVersions();
        return view('drilldown', ['versions' => $versions]);
    }
}
