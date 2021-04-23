<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facts')->insert([
            [
                "icone"=>"icofont-simple-smile",
                "chiffre"=>"233",
                "titre"=>"Happy Clients",
                "texte"=>"ldfbslbh",
            ],
            [
                "icone"=>"icofont-document-folder",
                "chiffre"=>"522",
                "titre"=>"Projects",
                "texte"=>"rljsbhjg",
            ],
            [
                "icone"=>"icofont-live-support",
                "chiffre"=>"1464",
                "titre"=>"Hours Of Support",
                "texte"=>"qlergblqqerlghb",
            ],
            [
                "icone"=>"icofont-users-alt-5",
                "chiffre"=>"16",
                "titre"=>"Hard Workers",
                "texte"=>"kfg biluhgfkh",
            ],
        ]);
    }
}
