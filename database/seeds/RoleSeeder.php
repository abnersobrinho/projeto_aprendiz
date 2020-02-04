<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(Role::where('nome','=','ADMINISTRADOR')->count()){
            $role = Role::where('nome','=','ADMINISTRADOR')->first();
        	$role->nome = "ADMINISTRADOR";
        	$role->descricao = "ADMINISTRADOR DO SISTEMA";
        	$role->save();        
    	}else{
            $role = new Role();
        	$role->nome = "ADMINISTRADOR";
        	$role->descricao = "ADMINISTRADOR DO SISTEMA";
        	$role->save(); 
    	}

        if(Role::where('nome','=','ALUNO')->count()){
            $role = Role::where('nome','=','ALUNO')->first();
            $role->nome = "ALUNO";
            $role->descricao = "ALUNO DO PROJETO";
            $role->save();        
        }else{
            $role = new Role();
            $role->nome = "ALUNO";
            $role->descricao = "ALUNO DO PROJETO";
            $role->save(); 
        }

        if(Role::where('nome','=','MONITOR')->count()){
            $role = Role::where('nome','=','MONITOR')->first();
            $role->nome = "MONITOR";
            $role->descricao = "MONITOR DO PROJETO";
            $role->save();        
        }else{
            $role = new Role();
            $role->nome = "MONITOR";
            $role->descricao = "MONITOR DO PROJETO";
            $role->save(); 
        }

        if(Role::where('nome','=','COORDENADOR')->count()){
            $role = Role::where('nome','=','COORDENADOR')->first();
            $role->nome = "COORDENADOR";
            $role->descricao = "ALUNO DO PROJETO";
            $role->save();        
        }else{
            $role = new Role();
            $role->nome = "COORDENADOR";
            $role->descricao = "COORDENADOR DO PROJETO";
            $role->save(); 
        }
    }
}
