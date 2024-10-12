<?php

namespace Tests\Unit;

use App\Models\Student;
use PHPUnit\Framework\TestCase;

class StudentTest extends TestCase
{   

    private Student $newStudent;

    protected function setUp(): void
    {
        parent::setUp();
        $this->newStudent = new Student([
            'name' => 'joao',
            'cpf' => '73939309001',
            'id_legal_responsible' => '1',
            'school_name' => 'utfpr'
        ]);
    }
    
    public function test_should_can_create_a_new_student(): void
    {
        $this->assertEquals($this->newStudent->name, 'joao');
    }

    public function test_should_can_change_the_name_student():void{
        $this->assertEquals($this->newStudent->name, 'joao');
        $this->newStudent->setName("paulo");
        $this->assertEquals($this->newStudent->name, 'paulo');
    }
    
    public function test_should_can_change_the_name_of_school():void{
        $this->assertEquals($this->newStudent->school_name,'utfpr');
        $this->newStudent->setSchoolName('PUC');
        $this->assertEquals($this->newStudent->school_name,'PUC');
    }
}
