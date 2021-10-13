<?php

namespace Database\Seeders\Helpers;

use Illuminate\Database\Seeder;
use App\Models\Helpers\AdditionalActivity;

class AdditionalActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdditionalActivity::insert([
            ['id' => '10103', 'name' => 'Iniciação Científica'],
            ['id' => '11002', 'name' => 'Canto coral'],
            ['id' => '11006', 'name' => 'Banda'],
            ['id' => '11011', 'name' => 'Iniciação musical'],
            ['id' => '12003', 'name' => 'Desenho'],
            ['id' => '12004', 'name' => 'Escultura e Cerâmica'],
            ['id' => '12005', 'name' => 'Grafite'],
            ['id' => '12007', 'name' => 'Pintura'],
            ['id' => '13001', 'name' => 'Cineclube'],
            ['id' => '13104', 'name' => 'Conservação do solo e composteira: canteiros sustentáveis (horta] e/ou jardinagem escolar'],
            ['id' => '13301', 'name' => 'Educação Ambiental e Desenvolvimento Sustentável'],
            ['id' => '13302', 'name' => 'Educação alimentar e nutricional'],
            ['id' => '13303', 'name' => 'Reciclagem'],
            ['id' => '13304', 'name' => 'Reflorestamento - Plantio de árvores'],
            ['id' => '13305', 'name' => 'Consumo consciente de água'],
            ['id' => '14001', 'name' => 'Teatro'],
            ['id' => '14002', 'name' => 'Danças'],
            ['id' => '14004', 'name' => 'Práticas Circenses'],
            ['id' => '14101', 'name' => 'Fotografia'],
            ['id' => '14102', 'name' => 'História em Quadrinhos'],
            ['id' => '14103', 'name' => 'Jornal Escolar'],
            ['id' => '14104', 'name' => 'Rádio Escolar'],
            ['id' => '14105', 'name' => 'Vídeo'],
            ['id' => '14201', 'name' => 'Robótica Educacional'],
            ['id' => '14202', 'name' => 'Tecnologicas Educacionais'],
            ['id' => '14203', 'name' => 'Ambientes de Redes Sociais'],
            ['id' => '14999', 'name' => 'Outra Categoria de Comunicação, Uso de Mídias e Cultura Digital e Tecnológica'],
            ['id' => '15001', 'name' => 'Capoeira'],
            ['id' => '15002', 'name' => 'Artesanato '],
            ['id' => '15003', 'name' => 'Brinquedos '],
            ['id' => '15004', 'name' => 'Contos'],
            ['id' => '15101', 'name' => 'Memória e História das Comunidades Tradicionais'],
            ['id' => '15201', 'name' => 'Memória e História das Cultura Afro-Brasileira e Africana'],
            ['id' => '15301', 'name' => 'Memória e História das Culturas e Indígenas'],
            ['id' => '16001', 'name' => 'Educação Patrimonial'],
            ['id' => '17002', 'name' => 'Línguas Estrangeiras'],
            ['id' => '17004', 'name' => 'Leitura'],
            ['id' => '17101', 'name' => 'Educação para o Consumo Sustentável'],
            ['id' => '17102', 'name' => 'Economia Solidária e Criativa'],
            ['id' => '17201', 'name' => 'Educação Financeira'],
            ['id' => '17202', 'name' => 'Economia'],
            ['id' => '17301', 'name' => 'Controle social do gasto público'],
            ['id' => '17302', 'name' => 'Educação Tributária'],
            ['id' => '18101', 'name' => 'Desenvolvimento de competências socioemocionais'],
            ['id' => '18102', 'name' => 'Atividades de autoconhecimento, identificação e gestão de sentimento'],
            ['id' => '18103', 'name' => 'Atividades de empatia e gestão de conflitos'],
            ['id' => '19999', 'name' => 'Outra categoria de Cultura, Artes e Educação Patrimonial'],
            ['id' => '21001', 'name' => 'Recreação (Brinquedoteca e Jogos]'],
            ['id' => '22007', 'name' => 'Yoga'],
            ['id' => '22009', 'name' => 'Tênis de campo'],
            ['id' => '22011', 'name' => 'Atletismo'],
            ['id' => '22012', 'name' => 'Badminton'],
            ['id' => '22014', 'name' => 'Basquete'],
            ['id' => '22015', 'name' => 'Ciclismo'],
            ['id' => '22018', 'name' => 'Futebol'],
            ['id' => '22019', 'name' => 'Futsal'],
            ['id' => '22020', 'name' => 'Ginástica (rítmica, artística, acrobática]'],
            ['id' => '22021', 'name' => 'Handebol'],
            ['id' => '22022', 'name' => 'Judô'],
            ['id' => '22023', 'name' => 'Karatê'],
            ['id' => '22024', 'name' => 'Luta Olímpica'],
            ['id' => '22025', 'name' => 'Natação'],
            ['id' => '22026', 'name' => 'Taekwondo'],
            ['id' => '22027', 'name' => 'Tênis de Mesa'],
            ['id' => '22028', 'name' => 'Voleibol'],
            ['id' => '22029', 'name' => 'Vôlei de Praia'],
            ['id' => '22032', 'name' => 'Xadrez tradicional/Xadrez virtual '],
            ['id' => '29999', 'name' => 'Outra categoria de Esporte e Lazer'],
            ['id' => '31001', 'name' => 'Matemática'],
            ['id' => '31002', 'name' => 'Português'],
            ['id' => '39999', 'name' => 'Outra categoria de Acompanhamento Pedagógico'],
            ['id' => '41001', 'name' => 'Direitos da criança e do adolescente'],
            ['id' => '41007', 'name' => 'Educação em Direitos Humanos'],
            ['id' => '41014', 'name' => 'Respeito e valorização do idoso'],
            ['id' => '41015', 'name' => 'Educação para o trânsito'],
            ['id' => '71007', 'name' => 'Promoção da Saúde ']
        ]);
    }
}
