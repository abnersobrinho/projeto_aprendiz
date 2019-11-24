<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
   	protected $fillable = [
      "titulo"
    ];
	
    protected $table = "areas";

    public function igrejas()
    {
        return $this->hasMany('App\Igreja','area_id');
    }


    public function buscar(Array $data, $totalPage)
    {
        return $this->where(function ($query) use ($data){
            if (isset($data['titulo']))
                $query->where('titulo', 'LIKE', '%' .$data['titulo']. '%');
        })
        ->paginate($totalPage);
    }
}
