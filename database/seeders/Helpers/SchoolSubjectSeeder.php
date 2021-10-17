<?php

namespace Database\Seeders\Helpers;

use Illuminate\Database\Seeder;
use App\Models\Helpers\SchoolSubject;

class SchoolSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SchoolSubject::insert([
            ['id' => '1', 'name' => 'Língua / Literatura Portuguesa', 'census_id' => '6', 'abbreviation' => 'Português'],
            ['id' => '2', 'name' => 'Língua / Literatura estrangeira - Inglês', 'census_id' => '7', 'abbreviation' => 'Inglês'],
            ['id' => '3', 'name' => 'Língua / Literatura estrangeira - Espanhol
', 'census_id' => '8', 'abbreviation' => 'Espanhol'],
            ['id' => '4', 'name' => 'Língua / Literatura estrangeira - Francês', 'census_id' => '30', 'abbreviation' => 'Francês'],
            ['id' => '5', 'name' => 'Língua / Literatura estrangeira - outra
', 'census_id' => '9', 'abbreviation' => 'Língua Estrangeira - Outras'],
            ['id' => '6', 'name' => 'Língua indígena', 'census_id' => '27', 'abbreviation' => 'Língua Indígena'],
            ['id' => '7', 'name' => 'Libras', 'census_id' => '23', 'abbreviation' => 'Libras'],
            ['id' => '8', 'name' => 'Língua Portuguesa como Segunda Língua', 'census_id' => '31', 'abbreviation' => 'Português como Segunda Língua'],
            ['id' => '9', 'name' => 'Arte (Educação Artística, Teatro, Dança, Música, Artes Plásticas e outras]', 'census_id' => '10', 'abbreviation' => 'Arte'],
            ['id' => '10', 'name' => 'Educação Física', 'census_id' => '11', 'abbreviation' => 'Ed. Física'],
            ['id' => '11', 'name' => 'Matemática', 'census_id' => '3', 'abbreviation' => 'Matemática'],
            ['id' => '12', 'name' => 'Química', 'census_id' => '1', 'abbreviation' => 'Química'],
            ['id' => '13', 'name' => 'Física', 'census_id' => '2', 'abbreviation' => 'Física'],
            ['id' => '14', 'name' => 'Biologia', 'census_id' => '4', 'abbreviation' => 'Biologia'],
            ['id' => '15', 'name' => 'Ciências', 'census_id' => '5', 'abbreviation' => 'Ciências'],
            ['id' => '16', 'name' => 'História', 'census_id' => '12', 'abbreviation' => 'História'],
            ['id' => '17', 'name' => 'Geografia', 'census_id' => '13', 'abbreviation' => 'Geografia'],
            ['id' => '18', 'name' => 'Filosofia', 'census_id' => '14', 'abbreviation' => 'Filosofia'],
            ['id' => '19', 'name' => 'Estudos Sociais', 'census_id' => '28', 'abbreviation' => 'Estudos Sociais'],
            ['id' => '20', 'name' => 'Sociologia', 'census_id' => '29', 'abbreviation' => 'Sociologia'],
            ['id' => '21', 'name' => 'Informática/Computação', 'census_id' => '16', 'abbreviation' => 'Informática'],
            ['id' => '22', 'name' => 'Áreas do conhecimento profissionalizantes ', 'census_id' => '17', 'abbreviation' => 'Áreas Profissionalizantes'],
            ['id' => '23', 'name' => 'Áreas do conhecimento pedagógicas ', 'census_id' => '25', 'abbreviation' => 'Áreas Pedagógicas'],
            ['id' => '24', 'name' => 'Ensino religioso', 'census_id' => '26', 'abbreviation' => 'Religião'],
            ['id' => '25', 'name' => 'Estágio curricular supervisionado', 'census_id' => '32', 'abbreviation' => 'Estágio Supervisionado'],
            ['id' => '26', 'name' => 'Outras áreas do conhecimento', 'census_id' => '99', 'abbreviation' => 'Diversificada']
        ]);
    }
}
