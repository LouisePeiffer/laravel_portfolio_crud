<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            [
                "skill"=>"HTML",
                "ariavaluenow"=>"100",
                "percent"=>"100",
            ],
            [
                "skill"=>"PHP",
                "ariavaluenow"=>"80",
                "percent"=>"80",
            ],
            [
                "skill"=>"CSS",
                "ariavaluenow"=>"90",
                "percent"=>"90",
            ],
            [
                "skill"=>"WORDPRESS/CMS",
                "ariavaluenow"=>"90",
                "percent"=>"90",
            ],
            [
                "skill"=>"JAVASCRIPT",
                "ariavaluenow"=>"75",
                "percent"=>"75",
            ],
            [
                "skill"=>"PHOTOSHOP",
                "ariavaluenow"=>"55",
                "percent"=>"55",
            ],
        ]);
    }
}
