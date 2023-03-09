<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PrintController extends Controller
{
    //

    public function index() {
        return view('print/index');
    }

    public function store() {
        $raport = PDF::loadview('print/viewpdf');
        return $raport->stream('RAPORT PTS .pdf');
    }
}
