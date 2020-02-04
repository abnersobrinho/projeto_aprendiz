<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Evento;
use App\Usuario;

class DashboardController extends Controller
{
    //função para dar ou nao permissao de acesso
    /*public function __construct()
    {
        $this->authorize('viewAny', Usuario::class);
    } */

    public function dashboard()
    {
        // $evento = Evento::where('publicar','=','sim')->first();
    	return view('admin.dashboard');
    }

    public function graficos()
    {
    	return view('admin.graficos');
    }

    public function tabelas()
    {
    	return view('admin.tabelas');
    }


}
