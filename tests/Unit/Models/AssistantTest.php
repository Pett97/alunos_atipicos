<?php

namespace Tests\Unit;

use App\Models\Assistant;
use App\Models\Student;
use Tests\TestCase;

class AssistantTest extends TestCase
{
    private Student $newStudent;
    private Assistant $newAssistant;

    protected function setUp(): void
    {

        parent::setUp();
        $this->newStudent = new Student([
            'name' => 'ana',
            'cpf' => '73939309002',
            'id_legal_responsible' => '3',
            'school_name' => 'testeteste'
        ]);

        $this->newAssistant = new Assistant([
            'name' => 'bianca',
            'cpf' => '01027040900',
            'id_responsible_student' => $this->newStudent->id,
            'school_work' => 'testeteste',
        ]);
    }

    public function test_should_can_create_a_new_assistant(): void
    {
        $this->assertEquals($this->newAssistant->name, 'bianca');
    }

    public function test_should_have_a_student():void
    {
        $this->assertEquals($this->newAssistant->id_responsible_student, $this->newStudent->id);
    }
}
