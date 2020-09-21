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
            ->where('tb_permissions.reponse_de_permission',null)
            ->orderBy('tb_permissions.created_at', 'desc')
            ->get();
        return Response()->json($permissions);

    }
    public function allH(){
        $permissions = DB::table('tb_permissions')
            ->leftJoin('users', 'tb_permissions.user_id', '=', 'users.id')
            ->whereIn('tb_permissions.reponse_de_permission',['oui','non'])
            ->orderBy('tb_permissions.created_at', 'desc')
            ->get();
        return Response()->json($permissions);
    }

    public function submit(Request $request){
        $permission = DB::table('tb_permissions')
            ->where("tb_permissions.id",$request['permission_id'])
            ->update(['tb_permissions.reponse_de_permission'=>$request['reponse'],'tb_permissions.commentaire'=>$request['message']]);
        return $permission;
    }
}
