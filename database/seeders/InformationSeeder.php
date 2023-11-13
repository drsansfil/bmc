<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('information')->insert(
            [
                'email_contact' => 'contact@e-build.tn',
                'lien_social' => 'https: //www.facebook.com/EBUILD-104737605485605',
                'image' => '',
                'chiffre_happyclient' => '57',
                'chiffre_projetencours' => '5',
                'chiffre_projetterminer' => '20',
            ]
        );
    }
}
