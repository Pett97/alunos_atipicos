<?php

namespace Tests\Unit;

use App\Models\Student;
use PHPUnit\Framework\TestCase;

class StudentTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
    }


    public function test_should_can_create_a_new_student(): void
    {
        $newStudent = new Student([
            'name' => 'joao',
            'cpf' => '73939309001',
            'id_legal_responsible' => '1',
            'school_name' => 'utfpr'

        ]);
        $this->assertEquals($newStudent->name, 'joao');
    }
}
