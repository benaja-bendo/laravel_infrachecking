<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function login(Request $request)
    {
        $validator=$request->validate([
            "login"=>"required",
            "password"=>"required"
        ]);

        $users=null;

        $isAuth=auth()->attempt([
           'email'=>$validator['login'],
           'password'=>$validator['password'],
        ]);

        if ($isAuth){
            $users = DB::table('users')
                ->where([
                    ['email', '=', $validator['login']],
                ])
                ->get();
        }

        return response()->json([
            "isValide"=>$isAuth,
            "status"=>$isAuth?200:400,
            "user"=>$users
        ]);
    }

    public function checkArriver(Request $request)
    {

    }
}
