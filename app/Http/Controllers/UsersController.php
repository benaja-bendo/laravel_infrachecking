<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\User;
use http\Client\Response;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use Illuminate\Http\Request;
use PhpParser\Node\Scalar\MagicConst\Dir;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $utilisateurs = User::all();
        return view('Gestion_users.all_users', [
            'utilisateurs' => $utilisateurs
        ]);
    }






}
