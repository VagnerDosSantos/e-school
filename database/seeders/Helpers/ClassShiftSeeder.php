<?php

namespace Database\Seeders\Helpers;

use App\Models\Helpers\ClassShift;
use Illuminate\Database\Seeder;

class ClassShiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClassShift::insert([
            ['name' => 'Matutino'],
            ['name' => 'Vespertino'],
            ['name' => 'Noturno'],
            ['name' => 'Integral'],
        ]);
    }
}
