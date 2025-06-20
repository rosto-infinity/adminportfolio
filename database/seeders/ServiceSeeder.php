<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table("services")->insert([
        // 1. Service de design UI/UX
        [
            "name" => "UI/UX Design",
            "icon" => "uil uil-web-grid",
            "description" => "Conception d'interfaces utilisateur intuitives et d'expériences utilisateur optimisées.",
            "created_at" => now(),
            "updated_at" => now()
        ],
        
        // 2. Développement Web
        [
            "name" => "Développement Web",
            "icon" => "uil uil-code-branch",
            "description" => "Création de sites web responsives et applications web sur mesure.",
            "created_at" => now(),
            "updated_at" => now()
        ],
        
        // 3. Marketing Digital
        [
            "name" => "Marketing Digital",
            "icon" => "uil uil-megaphone",
            "description" => "Stratégies de marketing en ligne pour augmenter votre visibilité numérique.",
            "created_at" => now(),
            "updated_at" => now()
        ],
        
        // 4. Développement Mobile
        [
            "name" => "Apps Mobiles",
            "icon" => "uil uil-mobile-android",
            "description" => "Développement d'applications iOS et Android natives ou cross-platform.",
            "created_at" => now(),
            "updated_at" => now()
        ],
        
        // 5. Hébergement Cloud
        [
            "name" => "Solutions Cloud",
            "icon" => "uil uil-cloud-computing",
            "description" => "Services d'hébergement et de stockage cloud sécurisés et scalables.",
            "created_at" => now(),
            "updated_at" => now()
        ]
    ]);
    }
}
