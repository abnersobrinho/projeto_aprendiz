<?php

use Illuminate\Database\Seeder;
use App\Curso;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(Curso::where('titulo','=','CURSO DE VIOLAO')->count()){
            $curso = Curso::where('titulo','=','CURSO DE VIOLAO')->first();
        	$curso->titulo = "CURSO DE VIOLAO";
        	$curso->descricao = "Curso de violão presencial";
            $curso->informacoes = "As benignidades do SENHOR cantarei perpetuamente; com a minha boca manifestarei a tua fidelidade de geração em geração. Salmos 89:1";
            $curso->publicar = "s";
        	$curso->save();        
    	}else{
            $curso = new Curso();
        	$curso->titulo = "CURSO DE VIOLAO";
        	$curso->descricao = "Curso de violão presencial";
            $curso->informacoes = "As benignidades do SENHOR cantarei perpetuamente; com a minha boca manifestarei a tua fidelidade de geração em geração. Salmos 89:1";
            $curso->publicar = "s";
        	$curso->save(); 
    	}

        if(Curso::where('titulo','=','CURSO DE VIOLINO')->count()){
            $curso = Curso::where('titulo','=','CURSO DE VIOLINO')->first();
        	$curso->titulo = "CURSO DE VIOLINO";
        	$curso->descricao = "Curso de violino on-line";
            $curso->informacoes = "As benignidades do SENHOR cantarei perpetuamente; com a minha boca manifestarei a tua fidelidade de geração em geração. Salmos 89:1";
            $curso->publicar = "s";
        	$curso->save();        
    	}else{
            $curso = new Curso();
        	$curso->titulo = "CURSO DE VIOLINO";
        	$curso->descricao = "Curso de violino on-line";
            $curso->informacoes = "As benignidades do SENHOR cantarei perpetuamente; com a minha boca manifestarei a tua fidelidade de geração em geração. Salmos 89:1";
            $curso->publicar = "s";
        	$curso->save(); 
    	}
    }
}
