<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusPropertyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status_property = [
            ['id' => 2,'name' => 'En Remate','status' => 1],
            ['id' => 1,'name' => 'En Alquiler','status' => 1],
        ];
        DB::table('status_property')->insert($status_property);
    }
}
