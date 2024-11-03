<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assistant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'cpf',
        'id_responsible_student',
        'school_work',
    ];

    public function getName()
    {
        return $this->attributes['name'];
    }

    public function setName($name)
    {
        $this->attributes['name'] = $name;
    }

    public function getCpf()
    {
        return $this->attributes['cpf'];
    }

    public function setCpf($cpf)
    {
        $this->attributes['cpf'] = $cpf;
    }

    public function getIdResponsibleStudent()
    {
        return $this->attributes['id_responsible_student'];
    }

    public function setIdResponsibleStudent($IdResponsibleStudent)
    {
        $this->attributes['id_responsible_student'] = $IdResponsibleStudent;
    }
}
