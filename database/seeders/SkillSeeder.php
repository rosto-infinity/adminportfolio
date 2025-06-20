<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("skills")->insert([
            [
                "name" => "PHP",
                'proficiency' => '90',                
                'service_id' => '1',                
            ],
            [
                "name" => "DART",
                'proficienty' => '70',                
                'service_id' => '2',                
            ],
            [
                "name" => "PUTHON",
                'proficiency' => '60',                
                'service_id' => '3',                
            ],
            [
                "name" => "AI",
                'proficiency' => '90',                
                'service_id' => '4',                
            ],
            
        ]);
    }
}
