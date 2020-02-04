<?php

namespace App\Http\Controllers\Autenticacao;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Hash;
use App\Usuario;

class AutenticacaoController extends Controller
{
    public function login()
    {
        return view('autenticacao.login');
    }

    public function logar(Request $request)
    {
        $dados = $request->all();

        $email = $dados['email'];
        $senha = $dados['senha'];

        $usuario = Usuario::where('email', $email)->first();

        if(Auth::check() || ($usuario && Hash::check($senha, $usuario->senha))){
            Auth::login($usuario);
            return redirect(route('home'));
        }else{
            return redirect(route('login'));
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect( route('index'));
    }
}
