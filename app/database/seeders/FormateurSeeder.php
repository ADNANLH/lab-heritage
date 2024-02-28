<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Formateur;

class FormateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = \Carbon\Carbon::now();
        Formateur::create([
            'nom' => 'Ahmed',
            'prenom' => 'Ben ali',
            'email' => 'ahmed@gmail.com',
            'type' => 'Formateur',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        Formateur::create([
            'nom' => 'Karim',
            'prenom' => 'Souiri',
            'email' => 'karim@gmail.com',
            'type' => 'Formateur',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        Formateur::create([
            'nom' => 'Imane',
            'prenom' => 'Alami',
            'email' => 'imane@gmail.com',
            'type' => 'Formateur',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        Formateur::create([
            'nom' => 'Salah',
            'prenom' => 'Kamari',
            'email' => 'salah@gmail.com',
            'type' => 'Formateur',
            'created_at' => $now,
            'updated_at' => $now,
        ]);
    }
}
