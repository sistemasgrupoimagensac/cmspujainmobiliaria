<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
           ['id' => 1,'department' => 'Amazonas'],
           ['id' => 2,'department' => 'Áncash'],
           ['id' => 3,'department' => 'Apurímac'],
           ['id' => 4,'department' => 'Arequipa'],
           ['id' => 5,'department' => 'Ayacucho'],
           ['id' => 6,'department' => 'Cajamarca'],
           ['id' => 7,'department' => 'Callao'],
           ['id' => 8,'department' => 'Cusco'],
           ['id' => 9,'department' => 'Huancavelica'],
           ['id' => 10,'department' => 'Huánuco'],
           ['id' => 11,'department' => 'Ica'],
           ['id' => 12,'department' => 'Junín'],
           ['id' => 13,'department' => 'La Libertad'],
           ['id' => 14,'department' => 'Lambayeque'],
           ['id' => 15,'department' => 'Lima'],
           ['id' => 16,'department' => 'Loreto'],
           ['id' => 17,'department' => 'Madre de Dios'],
           ['id' => 18,'department' => 'Moquegua'],
           ['id' => 19,'department' => 'Pasco'],
           ['id' => 20,'department' => 'Piura'],
           ['id' => 21,'department' => 'Puno'],
           ['id' => 22,'department' => 'San Martín'],
           ['id' => 23,'department' => 'Tacna'],
           ['id' => 24,'department' => 'Tumbes'],
           ['id' => 25,'department' => 'Ucayali'],
        ];

        // Insert the departments data into the 'departments' table
        DB::table('departments')->insert($departments);
    }
}
