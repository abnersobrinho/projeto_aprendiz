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
        if(Role::where('nome','=','ADM')->count()){
            $role = Role::where('nome','=','ADM')->first();
        	$role->nome = "ADM";
        	$role->descricao = "ADMINISTRADOR DO SISTEMA";
        	$role->save();        
    	}else{
            $role = new Role();
        	$role->nome = "ADM";
        	$role->descricao = "ADMINISTRADOR DO SISTEMA";
        	$role->save(); 
    	}
    }
}
