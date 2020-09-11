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

    // Generate PDF
    public function createPDF()
    {
        // récupérer tous les enregistrements de la base de données
        $utilisateurs = User::all();

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
