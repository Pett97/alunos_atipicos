<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'name'=>'Vettel Padua',
            'cpf'=>'01027040900',
            'id_legal_responsible'=>'2',
            'school_name'=>'capitão wagner'
        ]);
    }
}
