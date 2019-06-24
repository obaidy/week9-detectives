<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetectiveController extends Controller
{
    public function index()
    {
        $detectives = detective::orderBy('name' , 'asc')->get();

        return view('/detective/index', compact('detecitves'));
    }

    public function show($detective_slug)
    {
        $detective = \App\Detective::where('slug', $detective_slug)->first();

        if (!$detective) {
            abort(404, 'Detective not found');
        }

        $view = view('detective/show');
        $view->detective = $detective;
        return $view;
    }
}
