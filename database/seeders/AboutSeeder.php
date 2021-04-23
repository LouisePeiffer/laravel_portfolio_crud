<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            [
                "texteIntro"=>"Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.",
                "fonction"=>"UI/UX Designer & Web Developer.",
                "birthday"=>"111",
                "website"=>"www.example.com",
                "phone"=>"1234567890",
                "city"=>"New York, USA",
                "age"=>"30",
                "degree"=>"Master",
                "email"=>"email@example.com
                ",
                "freelance"=>"Available",
            ],
        ]);
    }
}
