<?php

namespace App\Http\Controllers;

use App\Entite;
use App\Nuser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EntiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('entite');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login-entite');
    }

    /**
     * Est gere par InfraOne
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add-entite');
    }

    /**
     * Est gere par InfraOne
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $input['image'] = "https://ui-avatars.com/api/?background=470000&color=fff&size=200&name=styveLioumba&font-size=0.50";

        $user = Entite::create($input);

        return redirect('/admin');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
     * @param Entite $entite
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('entites')->where('id',$id)->delete();

        return back();
    }

    public function login(Request $request)
    {


        $input = $request->all();
        $entite=Entite::where(
            [
                "nom_entite"=>$input['email'],
                "password"=>$input['password']
            ]
        )->get();

        count($entite)>0? $isAuth=true: $isAuth=false;

        return $isAuth?redirect("/nusers"):back();
       /* return response()->json([
            "isValide"=>$isAuth,
            "status"=>$isAuth?200:400,
            "user"=>$entite
        ]);*/
    }
}
