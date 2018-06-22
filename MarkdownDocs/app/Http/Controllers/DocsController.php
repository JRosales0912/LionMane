<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocsController extends Controller
{
    public function getIndex()
    {
        $doc = new Docs();
        $docs = $doc->getDocs();
        return view('docs', ['docs' => $docs]);
    }
}
