<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Evento;

class DashboardController extends Controller
{
    public function dashboard()
    {
    	$evento = Evento::where('publicar','=','sim')->first();

    	return view('admin.dashboard', compact('evento'));
    }

}
