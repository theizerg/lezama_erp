<?php

use Illuminate\Database\Seeder;

class CabeceraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('cabeceras')->insert([
            'nb_titulo'      => 'Somos la mejor alternativa para tu aprendizaje musical.',
            'nb_sub_titulo' => 'Crece, aprende y desarrolla tus habilidades musicales junto a nosotros, en poco tiempo, con poca inversión recibirás lo mejor de lo mejor.',
            'status_id' => 1,
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s')
        ]);

        DB::table('somos')->insert([
            'nb_titulo'      => '¿Quiénes somos?',
            'nb_cuerpo'      => 'Nuestro principal motivo de elaborar este proyecto es que puedas aprender de una manera rápida, sencilla y muy práctica, te ofrecemos lo mejor en poco tiempo, para que tengas confianza, seguridad y validez en lo que nosotros deseamos impartirte.',
            'status_id' => 1,
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s')
        ]);
        
        DB::table('proyectos')->insert([
            'nb_titulo'      => 'Nuestro proyecto',
            'nb_sub_titulo' => 'Tiene que ver principalmente con el deseo de impartir lo que Dios nos ha dado, nuestros conocimientos deseamos colocarlos en las manos de Dios y en tí, para que crezcas y avances a nivel personal y musical.',
            'status_id' => 1,
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s')
        ]);

         DB::table('planes')->insert([
            'nb_titulo'      => 'Nuestros planes',
            'nb_sub_titulo' => 'Pensamos en tu economía y estamos ajustados para ayudarte y brindarte un servicio de calidad a bajo costo, prueba, crece, innova junto a nosotros y tu conocimiento cada día será mucho mayor.',
            'status_id' => 1,
            //'nb_color' => 'yellow-rgb-darken',
            //'nu_precio' => 80,
           // 'nb_cobro_plan' => 'Mensual',
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s')
        ]);


         DB::table('grupo_planes')->insert([
            'nb_titulo'      => 'PLAN BÁSICO',
            //'nb_sub_titulo' => 'Pensamos en tu economía y estamos ajustados para ayudarte y brindarte un servicio de calidad a bajo costo, prueba, crece, innova junto a nosotros y tu conocimiento cada día será mucho mayor.',
            'status_id' => 1,
            'nb_color' => 'yellow-rgb-darken',
            'nu_precio' => 60,
            'nb_cobro_plan' => 'M',
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s')
        ]);

         DB::table('grupo_planes')->insert([
            'nb_titulo'      => 'PLAN PLATINIUM',
            //'nb_sub_titulo' => 'Pensamos en tu economía y estamos ajustados para ayudarte y brindarte un servicio de calidad a bajo costo, prueba, crece, innova junto a nosotros y tu conocimiento cada día será mucho mayor.',
            'status_id' => 1,
            'nb_color' => 'gray-rgb-darken',
            'nu_precio' => 80,
            'nb_cobro_plan' => 'M',
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s')
        ]);


         DB::table('grupo_planes')->insert([
            'nb_titulo'      => 'PLAN GOLD',
            //'nb_sub_titulo' => 'Pensamos en tu economía y estamos ajustados para ayudarte y brindarte un servicio de calidad a bajo costo, prueba, crece, innova junto a nosotros y tu conocimiento cada día será mucho mayor.',
            'status_id' => 1,
            'nb_color' => 'yellow-rgb-darken',
            'nu_precio' => 120,
            'nb_cobro_plan' => 'M',
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s')
        ]);


          DB::table('equipos')->insert([
            'nb_titulo'      => 'Nuestro equipo de trabajo',
            'nb_sub_titulo' => 'Pensamos en tu economía y estamos ajustados para ayudarte y brindarte un servicio de calidad a bajo costo, prueba, crece, innova junto a nosotros y tu conocimiento cada día será mucho mayor.',
            'status_id' => 1,
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s')
        ]);

    }
}
