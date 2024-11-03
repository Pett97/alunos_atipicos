<?php

namespace Database\Seeders;

use App\Models\Assistant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssistantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Assistant::create([
            'name'=>"Barbara",
            'cpf'=>"13408643040",
            'id_responsible_student'=>1,
            'school_work'=>'capitão wagner'
        ]);
    }
}
