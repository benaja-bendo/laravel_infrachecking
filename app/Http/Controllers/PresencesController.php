<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PresencesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('Gesttion_presences.index');
    }
}
