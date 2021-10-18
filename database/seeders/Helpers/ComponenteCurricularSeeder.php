<?php

namespace Database\Seeders\Helpers;

use Illuminate\Database\Seeder;
use App\Models\Helpers\ComponenteCurricular;

class ComponenteCurricularSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ComponenteCurricular::insert([
            ['id' => '1', 'nome' => 'Língua / Literatura Portuguesa', 'censo_id' => '6', 'abreviacao' => 'Português'],
            ['id' => '2', 'nome' => 'Língua / Literatura estrangeira - Inglês', 'censo_id' => '7', 'abreviacao' => 'Inglês'],
            ['id' => '3', 'nome' => 'Língua / Literatura estrangeira - Espanhol
', 'censo_id' => '8', 'abreviacao' => 'Espanhol'],
            ['id' => '4', 'nome' => 'Língua / Literatura estrangeira - Francês', 'censo_id' => '30', 'abreviacao' => 'Francês'],
            ['id' => '5', 'nome' => 'Língua / Literatura estrangeira - outra
', 'censo_id' => '9', 'abreviacao' => 'Língua Estrangeira - Outras'],
            ['id' => '6', 'nome' => 'Língua indígena', 'censo_id' => '27', 'abreviacao' => 'Língua Indígena'],
            ['id' => '7', 'nome' => 'Libras', 'censo_id' => '23', 'abreviacao' => 'Libras'],
            ['id' => '8', 'nome' => 'Língua Portuguesa como Segunda Língua', 'censo_id' => '31', 'abreviacao' => 'Português como Segunda Língua'],
            ['id' => '9', 'nome' => 'Arte (Educação Artística, Teatro, Dança, Música, Artes Plásticas e outras]', 'censo_id' => '10', 'abreviacao' => 'Arte'],
            ['id' => '10', 'nome' => 'Educação Física', 'censo_id' => '11', 'abreviacao' => 'Ed. Física'],
            ['id' => '11', 'nome' => 'Matemática', 'censo_id' => '3', 'abreviacao' => 'Matemática'],
            ['id' => '12', 'nome' => 'Química', 'censo_id' => '1', 'abreviacao' => 'Química'],
            ['id' => '13', 'nome' => 'Física', 'censo_id' => '2', 'abreviacao' => 'Física'],
            ['id' => '14', 'nome' => 'Biologia', 'censo_id' => '4', 'abreviacao' => 'Biologia'],
            ['id' => '15', 'nome' => 'Ciências', 'censo_id' => '5', 'abreviacao' => 'Ciências'],
            ['id' => '16', 'nome' => 'História', 'censo_id' => '12', 'abreviacao' => 'História'],
            ['id' => '17', 'nome' => 'Geografia', 'censo_id' => '13', 'abreviacao' => 'Geografia'],
            ['id' => '18', 'nome' => 'Filosofia', 'censo_id' => '14', 'abreviacao' => 'Filosofia'],
            ['id' => '19', 'nome' => 'Estudos Sociais', 'censo_id' => '28', 'abreviacao' => 'Estudos Sociais'],
            ['id' => '20', 'nome' => 'Sociologia', 'censo_id' => '29', 'abreviacao' => 'Sociologia'],
            ['id' => '21', 'nome' => 'Informática/Computação', 'censo_id' => '16', 'abreviacao' => 'Informática'],
            ['id' => '22', 'nome' => 'Áreas do conhecimento profissionalizantes ', 'censo_id' => '17', 'abreviacao' => 'Áreas Profissionalizantes'],
            ['id' => '23', 'nome' => 'Áreas do conhecimento pedagógicas ', 'censo_id' => '25', 'abreviacao' => 'Áreas Pedagógicas'],
            ['id' => '24', 'nome' => 'Ensino religioso', 'censo_id' => '26', 'abreviacao' => 'Religião'],
            ['id' => '25', 'nome' => 'Estágio curricular supervisionado', 'censo_id' => '32', 'abreviacao' => 'Estágio Supervisionado'],
            ['id' => '26', 'nome' => 'Outras áreas do conhecimento', 'censo_id' => '99', 'abreviacao' => 'Diversificada']
        ]);
    }
}
