<?php

use Illuminate\Database\Seeder;
use App\Igreja;

class IgrejaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(Igreja::where('nome','=','VALEPAR')->count()){
	        $igreja = Igreja::where('nome','=','VALEPAR')->first();
	        $igreja->nome = "VALEPAR";
	        $igreja->cep = "35045-580";
	        $igreja->cidade_id = 1;
	        $igreja->bairro = "VALE DO PASTORIL";
	        $igreja->endereco = "RUA DO ACESSO DOIS, 90";
	        $igreja->imagem = "";
	        $igreja->mapa = "";
	        $igreja->area_id = 1;
	        $igreja->save();  
	    }else{
	        $igreja = new Igreja();
	        $igreja->nome = "VALEPAR";
	        $igreja->cep = "35045-580";
	        $igreja->cidade_id = 1;
	        $igreja->bairro = "VALE DO PASTORIL";
	        $igreja->endereco = "RUA DO ACESSO DOIS, 90";
	        $igreja->imagem = "";
	        $igreja->mapa = "";
	        $igreja->area_id = 1;
	        $igreja->save(); 
	    }
	}
}
