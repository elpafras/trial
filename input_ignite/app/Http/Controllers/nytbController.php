<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Database;

class nytbController extends Controller
{
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename = 'nytb';
    }
    public function index()
    {
        $nytbs  = $database->getReference($this->tablename)->getValue()->exists();
        return view('layouts.nytbtabel', ["title" => "Tabel NYTB"]);
    }
    public function create()
    {
        return view('layouts.formnytb', ["title" => "Form NYTB"]);
    }
    public function write(Request $request)
    {
        $postData = [
            'bait' => $request->bait,
            'koor' => $request->koor,
            'nada' => $request->nada,
            'nomor' => $request->nomor,
            'title' => $request->title,
        ];

        $postRef = $this->database->getReference($this->tablename)->push($postData);

        return view('layouts.nytbtabel', ["title" => "Form NYTB"]);
    }
}
