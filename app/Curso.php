<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
   	protected $fillable = [
      "titulo",
      "descricao",
      "logo",
      "imagem",
      "informacoes"
    ];
	
    protected $table = "cursos";

    public function buscar(Array $data, $totalPage)
    {
        return $this->where(function ($query) use ($data){
            if (isset($data['titulo']))
                $query->where('titulo', 'LIKE', '%' .$data['titulo']. '%');
            if (isset($data['descricao']))
                $query->where('descricao', 'LIKE', '%' .$data['descricao']. '%');

        })//->toSql(); dd($teste);
        ->paginate($totalPage);
    }
}
