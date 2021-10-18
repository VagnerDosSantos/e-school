<?php

namespace Database\Seeders\Helpers;

use App\Models\Helpers\Turno;
use Illuminate\Database\Seeder;

class TurnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Turno::insert([
            ['nome' => 'Matutino'],
            ['nome' => 'Vespertino'],
            ['nome' => 'Noturno'],
            ['nome' => 'Integral'],
        ]);
    }
}
