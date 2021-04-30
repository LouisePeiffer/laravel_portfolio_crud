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
                "percent"=>"100",
            ],
            [
                "skill"=>"PHP",
                "percent"=>"80",
            ],
            [
                "skill"=>"CSS",
                "percent"=>"90",
            ],
            [
                "skill"=>"WORDPRESS/CMS",
                "percent"=>"90",
            ],
            [
                "skill"=>"JAVASCRIPT",
                "percent"=>"75",
            ],
            [
                "skill"=>"PHOTOSHOP",
                "percent"=>"55",
            ],
        ]);
    }
}
