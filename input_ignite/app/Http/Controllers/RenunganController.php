<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RenunganController extends Controller
{
    public function create()
    {
        return view('layouts.formrenungan', ["title" => "Form Renungan"]);
    }
}
