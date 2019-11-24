<?php

use Illuminate\Database\Seeder;
use App\Usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(Usuario::where('email','=','admin@mail.com')->count()){
            $usuario = Usuario::where('email','=','admin@mail.com')->first();
            $usuario->role_id = 1;
            $usuario->igreja_id = 1;
            $usuario->cidade_id = 1;
            $usuario->nome = "Abner Sobrinho";
            $usuario->cpf = "725.804.706-97";
            $usuario->email = "admin@mail.com";
            $usuario->senha = bcrypt("123456");
            $usuario->endereco = "teste";
            $usuario->bairro = "teste";
            $usuario->tel_fixo = "teste";
            $usuario->celular = "teste";
            $usuario->responsavel = "teste";
            $usuario->dtnasc = "2019-11-22";
            $usuario->idade = 50;
            $usuario->save();
        }else{
            $usuario = new Usuario();
            $usuario->role_id = 1;
            $usuario->igreja_id = 1;
            $usuario->cidade_id = 1;
            $usuario->nome = "Abner Sobrinho";
            $usuario->cpf = "725.804.706-97";
            $usuario->email = "admin@mail.com";
            $usuario->senha = bcrypt("123456");
            $usuario->endereco = "teste";
            $usuario->bairro = "teste";
            $usuario->tel_fixo = "teste";
            $usuario->celular = "teste";
            $usuario->responsavel = "teste";
            $usuario->dtnasc = "2019-11-22";
            $usuario->idade = 50;
            $usuario->save();
        }
        
    }
}
