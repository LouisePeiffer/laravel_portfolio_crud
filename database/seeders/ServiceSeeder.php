<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                "icone"=>"icofont-computer",
                "titre"=>"Lorem Ipsuum",
                "texte"=>"Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident",
            ],
            [
                "icone"=>"icofont-chart-bar-graph",
                "titre"=>"Dolor Sitemaa",
                "texte"=>"Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata",
            ],
            [
                "icone"=>"icofont-earth",
                "titre"=>"Sed ut perspiciatiss",
                "texte"=>"Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur",
            ],
            [
                "icone"=>"icofont-image",
                "titre"=>"Magni Dolorees",
                "texte"=>"Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum",
            ],
            [
                "icone"=>"icofont-settings",
                "titre"=>"Nemoo Enim",
                "texte"=>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque",
            ],
            [
                "icone"=>"icofont-tasks-alt",
                "titre"=>"Eiusmod Tempurr",
                "texte"=>"Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi",
            ],
        ]);
    }
}
