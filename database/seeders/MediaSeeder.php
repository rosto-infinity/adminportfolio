<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("medias")->insert([
    [
        "link" => "https://www.facebook.com/thewayprintsarl/",
        "icon" => "uil uil-facebook-f"
    ],
    [
        "link" => "https://github.com/votrecompte", 
        "icon" => "uil uil-github" 
    ],
    [
        "link" => "https://youtube.com/votrechaine", 
        "icon" => "uil uil-youtube" 
    ]
]);

    }
}
