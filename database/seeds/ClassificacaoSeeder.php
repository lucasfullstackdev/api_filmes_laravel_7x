<?php

use Illuminate\Database\Seeder;

use App\Models\Classificacao;

class ClassificacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classificacoes = [
            [
                'ds_classificacao' => 'Livre para todos os públicos',
                'ds_observacao' => 'São admitidos com essa classificação obras que contenham predominantemente conteúdos sem inadequações',
                'ds_violencia' => 'Violência fantasiosa; presença de armas sem violência; mortes sem violência; ossadas e esqueletos sem violência',
                'ds_sexo_nudez' => 'Nudez não erótica; ou mesmo com a presença de nudez; sem a presença de conteúdo sexual',
                'ds_drogas' => 'Consumo moderado ou insinuado de drogas lícitas sem relevância para a obra'
            ],
            [
                'ds_classificacao' => 'Não recomendado para menores de dez anos',
                'ds_observacao' => 'São admitidos com essa classificação obras que contenham predominantemente conteúdos com inadequações leves',
                'ds_violencia' => 'Presença de armas com intuito de violência; medo/tensão; angústia; ossadas e esqueletos com resquícios de ato de violência; atos criminosos sem violência; linguagem depreciativa',
                'ds_sexo_nudez' => 'Conteúdos educativos sobre sexo',
                'ds_drogas' => 'Descrições verbais do consumo de drogas lícitas; discussão sobre o tema “tráfico de drogas”; uso medicinal de drogas ilícitas'
            ],
            [
                'ds_classificacao' => 'Não recomendado para menores de doze anos',
                'ds_observacao' => 'São admitidos com essa classificação obras que contenham predominantemente conteúdos com inadequações relativamentes leves',
                'ds_violencia' => 'Ato violento; lesão corporal; descrição de violência; presença de sangue; sofrimento da vítima; morte natural ou acidental com violência; ato violento contra animais; exposição ao perigo; exposição de pessoas em situações constrangedoras ou degradantes; agressão verbal; obscenidade; bullying; exposição de cadáver; assédio sexual; supervalorização da beleza física; supervalorização do consumo; morte derivada de ato heróico; violência psicológica',
                'ds_sexo_nudez' => 'Nudez velada; insinuação sexual; carícias sexuais; masturbação não explícita; linguagem obscena/palavrões; linguagem de conteúdo sexual; simulações de sexo; apelo sexual',
                'ds_drogas' => 'Consumo de drogas lícitas; indução ao consumo de drogas lícitas; consumo irregular de medicamentos; menção a drogas ilícitas; discussão sobre "Legalização de Drogas ilícitas"'
            ],
            [
                'ds_classificacao' => 'Não recomendado para menores de quatorze anos',
                'ds_observacao' => 'São admitidos com essa classificação obras que contenham predominantemente conteúdos com inadequações moderadas',
                'ds_violencia' => 'Morte intencional; preconceito; exploração sexual; aborto; eutanásia; pena de morte',
                'ds_sexo_nudez' => 'Nudez moderada; erotização; vulgaridade; relação sexual; prostituição',
                'ds_drogas' => 'Insinuação do consumo de drogas ilícitas; descrições verbais do consumo e tráfico de drogas ilícitas'
            ],
            [
                'ds_classificacao' => 'Não recomendado para menores de dezesseis anos',
                'ds_observacao' => 'São admitidos com essa classificação obras que contenham predominantemente conteúdos com inadequações intensas',
                'ds_violencia' => 'Estupro; Crimes de ódio; suicídio; tortura; mutilação; violência gratuita/banalização da violência; ato de pedofilia',
                'ds_sexo_nudez' => 'Nudez total; relação sexual intensa/de longa duração',
                'ds_drogas' => 'Produção ou Tráfico de qualquer droga ilícita; consumo de drogas ilícitas; indução ao consumo de drogas ilícitas'
            ],
            [
                'ds_classificacao' => 'Não recomendado para menores de dezoito anos',
                'ds_observacao' => 'São admitidos com essa classificação obras que contenham predominantemente conteúdos com inadequações extremas',
                'ds_violencia' => 'Elogio ou apologia da violência; crueldade.',
                'ds_sexo_nudez' => 'Sexo explícito; situações sexuais complexas/de forte impacto (incesto, sexo grupal, fetiches violentos e Pornografia em geral)',
                'ds_drogas' => 'Elogio ou apologia ao uso de drogas ilícitas'
            ]
        ];

        foreach ($classificacoes as $classificacao) {
            Classificacao::create($classificacao);
        }
    }
}
