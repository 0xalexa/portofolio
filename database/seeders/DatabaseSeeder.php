<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat User utama
        User::factory()->create([
            'name' => 'Alex Kusuma Wardana',
            'email' => 'alex@example.com',
        ]);

        // Buat data pesan kontak tiruan (dummy data)
        Contact::create([
            'name' => 'Budi Santoso',
            'email' => 'budi.santoso@gmail.com',
            'phone' => '081234567890',
            'subject' => 'Tanya Desain Website',
            'message' => 'Halo Alex, saya sangat menyukai portofolio Anda. Apakah Anda bersedia mengerjakan proyek landing page untuk bisnis UMKM saya?',
        ]);

        Contact::create([
            'name' => 'Siti Rahma',
            'email' => 'siti.rahma@yahoo.com',
            'phone' => '085678901234',
            'subject' => 'Kolaborasi Agensi',
            'message' => 'Hai Alex, kami dari agensi kreatif ingin menawarkan kolaborasi freelance untuk proyek-proyek Laravel ke depan. Apakah Anda tertarik?',
        ]);

        Contact::create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'phone' => '+15550199',
            'subject' => 'Freelance Laravel Project',
            'message' => 'Hi Alex, I am looking for a junior developer to help build a dynamic web application. Let me know if you are available for a remote gig.',
        ]);
    }
}
