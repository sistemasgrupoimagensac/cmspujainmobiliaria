<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['id' => 1,'name' => 'Casa','status' => 1],
            ['id' => 2,'name' => 'Departamento','status' => 1],
            ['id' => 3,'name' => 'Oficina','status' => 1],
            ['id' => 4,'name' => 'Terreno','status' => 1],
            ['id' => 5,'name' => 'Local','status' => 1],
        ];
        DB::table('categories')->insert($categories);
    }
}
