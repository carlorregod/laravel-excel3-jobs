<?php

use Illuminate\Database\Seeder;
use App\Almacen;

class AlmacenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Almacen::class, 30)->create();
    }
}
