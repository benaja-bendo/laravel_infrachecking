<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class PermissionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('Gestion_permissions.index');
    }

    public  function  allUser_json()
    {
        if(request('q') !== null){
            $utilisateurs['data'] = User::where('name','like', '%'.request('q').'%')->get();
//            $utilisateurs['data'] = DB::table('users')->where('name','like', '%'.'bendo'.'%')->get();
            return Response()->json($utilisateurs['data']);
        }
        else{
            $utilisateurs = User::all();
            return Response()->json($utilisateurs);
        }
    }
}
