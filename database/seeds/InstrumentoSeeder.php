<?php

use Illuminate\Database\Seeder;
use App\Instrumento;

class InstrumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(Instrumento::where('nome','=','VIOLÃO')->count()){
            $instrumento = Instrumento::where('nome','=','VIOLÃO')->first();
        	$instrumento->nome = "VIOLÃO";
        	$instrumento->descricao = "Instrumento de seis cordas";
        	$instrumento->save();        
    	}else{
            $instrumento = new Instrumento();
        	$instrumento->nome = "VIOLÃO";
        	$instrumento->descricao = "Instrumento de seis cordas";
        	$instrumento->save();  
    	}
    }
}
