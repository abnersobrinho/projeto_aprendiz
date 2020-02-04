<?php

use Illuminate\Database\Seeder;
use App\Cidade;

class CidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(Cidade::where('nome','=','GOVERNADOR VALADARES')->count()){
            $cidade = Cidade::where('nome','=','GOVERNADOR VALADARES')->first();
        	$cidade->nome = "GOVERNADOR VALADARES";
        	$cidade->uf = "MG";
        	$cidade->save();        
    	}else{
            $cidade = new Cidade();
        	$cidade->nome = "GOVERNADOR VALADARES";
        	$cidade->uf = "MG";
        	$cidade->save(); 
    	}
    }
}

/*Para criar varios registros

$i = 0;
while($i < 10)
{
    colocar a rotina aqui dentro e no final implementar i
    se quiser pode-se usar a biblioteca faker

    $i++;
}
