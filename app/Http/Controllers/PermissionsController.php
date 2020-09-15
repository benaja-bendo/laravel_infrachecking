<?php

namespace App\Http\Controllers;

use App\tb_permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PermissionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('Gestion_permissions.index');
    }

    public function all()
    {
//        $permissions = tb_permission::all()->leftJoin('users','tb_permission.user_id','=','users.id');
        $permissions = DB::table('tb_permissions')
            ->leftJoin('users', 'tb_permissions.user_id', '=', 'users.id')
            ->get();
        return Response()->json($permissions);

    }
}
