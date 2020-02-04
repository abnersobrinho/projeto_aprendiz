<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CidadeSeeder::class);
        $this->call(AreaSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(IgrejaSeeder::class);
        $this->call(UsuarioSeeder::class);
        $this->call(InstrumentoSeeder::class);
        $this->call(CursoSeeder::class);
    }
}
