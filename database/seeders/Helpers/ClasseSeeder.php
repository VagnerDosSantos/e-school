<?php

namespace Database\Seeders\Helpers;

use Illuminate\Database\Seeder;
use App\Models\Helpers\Classe;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Classe::insert(['nome' => 'Não Declarada']);
    }
}
