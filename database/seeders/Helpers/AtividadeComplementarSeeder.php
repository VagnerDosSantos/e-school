<?php

namespace Database\Seeders\Helpers;

use Illuminate\Database\Seeder;
use App\Models\Helpers\AtividadeComplementar;

class AtividadeComplementarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AtividadeComplementar::insert([
            ['id' => '10103', 'nome' => 'Iniciação Científica'],
            ['id' => '11002', 'nome' => 'Canto coral'],
            ['id' => '11006', 'nome' => 'Banda'],
            ['id' => '11011', 'nome' => 'Iniciação musical'],
            ['id' => '12003', 'nome' => 'Desenho'],
            ['id' => '12004', 'nome' => 'Escultura e Cerâmica'],
            ['id' => '12005', 'nome' => 'Grafite'],
            ['id' => '12007', 'nome' => 'Pintura'],
            ['id' => '13001', 'nome' => 'Cineclube'],
            ['id' => '13104', 'nome' => 'Conservação do solo e composteira: canteiros sustentáveis (horta] e/ou jardinagem escolar'],
            ['id' => '13301', 'nome' => 'Educação Ambiental e Desenvolvimento Sustentável'],
            ['id' => '13302', 'nome' => 'Educação alimentar e nutricional'],
            ['id' => '13303', 'nome' => 'Reciclagem'],
            ['id' => '13304', 'nome' => 'Reflorestamento - Plantio de árvores'],
            ['id' => '13305', 'nome' => 'Consumo consciente de água'],
            ['id' => '14001', 'nome' => 'Teatro'],
            ['id' => '14002', 'nome' => 'Danças'],
            ['id' => '14004', 'nome' => 'Práticas Circenses'],
            ['id' => '14101', 'nome' => 'Fotografia'],
            ['id' => '14102', 'nome' => 'História em Quadrinhos'],
            ['id' => '14103', 'nome' => 'Jornal Escolar'],
            ['id' => '14104', 'nome' => 'Rádio Escolar'],
            ['id' => '14105', 'nome' => 'Vídeo'],
            ['id' => '14201', 'nome' => 'Robótica Educacional'],
            ['id' => '14202', 'nome' => 'Tecnologicas Educacionais'],
            ['id' => '14203', 'nome' => 'Ambientes de Redes Sociais'],
            ['id' => '14999', 'nome' => 'Outra Categoria de Comunicação, Uso de Mídias e Cultura Digital e Tecnológica'],
            ['id' => '15001', 'nome' => 'Capoeira'],
            ['id' => '15002', 'nome' => 'Artesanato '],
            ['id' => '15003', 'nome' => 'Brinquedos '],
            ['id' => '15004', 'nome' => 'Contos'],
            ['id' => '15101', 'nome' => 'Memória e História das Comunidades Tradicionais'],
            ['id' => '15201', 'nome' => 'Memória e História das Cultura Afro-Brasileira e Africana'],
            ['id' => '15301', 'nome' => 'Memória e História das Culturas e Indígenas'],
            ['id' => '16001', 'nome' => 'Educação Patrimonial'],
            ['id' => '17002', 'nome' => 'Línguas Estrangeiras'],
            ['id' => '17004', 'nome' => 'Leitura'],
            ['id' => '17101', 'nome' => 'Educação para o Consumo Sustentável'],
            ['id' => '17102', 'nome' => 'Economia Solidária e Criativa'],
            ['id' => '17201', 'nome' => 'Educação Financeira'],
            ['id' => '17202', 'nome' => 'Economia'],
            ['id' => '17301', 'nome' => 'Controle social do gasto público'],
            ['id' => '17302', 'nome' => 'Educação Tributária'],
            ['id' => '18101', 'nome' => 'Desenvolvimento de competências socioemocionais'],
            ['id' => '18102', 'nome' => 'Atividades de autoconhecimento, identificação e gestão de sentimento'],
            ['id' => '18103', 'nome' => 'Atividades de empatia e gestão de conflitos'],
            ['id' => '19999', 'nome' => 'Outra categoria de Cultura, Artes e Educação Patrimonial'],
            ['id' => '21001', 'nome' => 'Recreação (Brinquedoteca e Jogos]'],
            ['id' => '22007', 'nome' => 'Yoga'],
            ['id' => '22009', 'nome' => 'Tênis de campo'],
            ['id' => '22011', 'nome' => 'Atletismo'],
            ['id' => '22012', 'nome' => 'Badminton'],
            ['id' => '22014', 'nome' => 'Basquete'],
            ['id' => '22015', 'nome' => 'Ciclismo'],
            ['id' => '22018', 'nome' => 'Futebol'],
            ['id' => '22019', 'nome' => 'Futsal'],
            ['id' => '22020', 'nome' => 'Ginástica (rítmica, artística, acrobática]'],
            ['id' => '22021', 'nome' => 'Handebol'],
            ['id' => '22022', 'nome' => 'Judô'],
            ['id' => '22023', 'nome' => 'Karatê'],
            ['id' => '22024', 'nome' => 'Luta Olímpica'],
            ['id' => '22025', 'nome' => 'Natação'],
            ['id' => '22026', 'nome' => 'Taekwondo'],
            ['id' => '22027', 'nome' => 'Tênis de Mesa'],
            ['id' => '22028', 'nome' => 'Voleibol'],
            ['id' => '22029', 'nome' => 'Vôlei de Praia'],
            ['id' => '22032', 'nome' => 'Xadrez tradicional/Xadrez virtual '],
            ['id' => '29999', 'nome' => 'Outra categoria de Esporte e Lazer'],
            ['id' => '31001', 'nome' => 'Matemática'],
            ['id' => '31002', 'nome' => 'Português'],
            ['id' => '39999', 'nome' => 'Outra categoria de Acompanhamento Pedagógico'],
            ['id' => '41001', 'nome' => 'Direitos da criança e do adolescente'],
            ['id' => '41007', 'nome' => 'Educação em Direitos Humanos'],
            ['id' => '41014', 'nome' => 'Respeito e valorização do idoso'],
            ['id' => '41015', 'nome' => 'Educação para o trânsito'],
            ['id' => '71007', 'nome' => 'Promoção da Saúde ']
        ]);
    }
}
