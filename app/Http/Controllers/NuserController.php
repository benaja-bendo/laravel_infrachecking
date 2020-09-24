<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Nuser;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class NuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $utilisateurs = Nuser::all();
        return view('Gestion_users.all_users', [
            'utilisateurs' => $utilisateurs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public  function  allUser_json()
    {
        if(request('q') !== null){
            $utilisateurs['data'] = User::where('name','like', '%'.request('q').'%')->get();
//            $utilisateurs['data'] = DB::table('users')->where('name','like', '%'.'bendo'.'%')->get();
            return Response()->json($utilisateurs['data']);
        }
        else{
            $utilisateurs = Nuser::all();
            return Response()->json($utilisateurs);
        }
    }

    // Generate PDF
    public function createPDF()
    {
        // récupérer tous les enregistrements de la base de données
        $utilisateurs = Nuser::all();

        // partager des données à afficher
        view()->share('utilisateurs', $utilisateurs);
        $pdf = PDF::loadView('pdf_view', $utilisateurs);

        // télécharger le fichier PDF avec la méthode de téléchargement
        return $pdf->download('pdf_file.pdf');

    }

    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
}
