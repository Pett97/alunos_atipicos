<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'cpf',
        'id_legal_responsible',
        'school_name',
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

    public function getIdLegalResponsible()
    {
        return $this->attributes['id_legal_responsible'];
    }

    public function setIdLegalResponsible($idLegalResponsible)
    {
        $this->attributes['id_legal_responsible'] = $idLegalResponsible;
    }

    public function getSchoolName()
    {
        return $this->attributes['school_name'];
    }

    public function setSchoolName($schoolName)
    {
        $this->attributes['school_name'] = $schoolName;
    }
}
