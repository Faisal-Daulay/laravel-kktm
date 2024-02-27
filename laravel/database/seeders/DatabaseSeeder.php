<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Student;
use App\Models\StudentParent;
// use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Student::factory(250)->create();

        // Buat orangtua untuk setiap siswa
        Student::all()->each(function ($student) {
            StudentParent::factory()->create([
                'student_id' => $student->id,
            ]);
        });
    }
}
