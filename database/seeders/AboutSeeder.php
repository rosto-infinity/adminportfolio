<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("abouts")->insert([
            [
                "name"=> "Waffo lele",
                "email"=> "wffoele@gmail.com",
                "phone"=> "+237691584819",
                "address"=> "Bafoussam 2 gouogouo",
                "description"=> "Waffo lele description",
                "summary"=> "Waffo lele summary",
                "tagline"=> "Waffo lele tagline",
                "home_image"=> "no-image.png",
                "banner_image"=> "no-image.png",
                "cv"=> "johndoe-Cv.pdf",
            ]
        ]);
    }
}
  