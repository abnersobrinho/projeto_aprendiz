<?php

use Illuminate\Database\Seeder;
use App\Area;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(Area::where('titulo','=','GUANHÃES')->count()){
            $area = Area::where('titulo','=','GUANHÃES')->first();
        	$area->titulo = "GUANHÃES";
        	$area->save();        
    	}else{
            $area = new Area();
        	$area->titulo = "GUANHÃES";
        	$area->save(); 
    	}
    }
}
