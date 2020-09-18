<?php

namespace App\Http\Controllers;

use App\tb_presence;
use http\Client\Response;
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
    public function all(){
        $allPresence = tb_presence::all();
        return Response()->json($allPresence);
    }

}
