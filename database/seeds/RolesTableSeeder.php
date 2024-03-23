<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['id' => 1,'rol' => 'administrador'],
            ['id' => 2,'rol' => 'usuario'],
        ];
        DB::table('roles')->insert($roles);

    }
}
