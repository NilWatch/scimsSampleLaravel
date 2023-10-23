<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class VamosIndividual extends Model
{
    use HasFactory, Searchable;

    protected $connection = 'vamos';
    protected $table = 'individual';
    protected $fillable = [
        'id',
        'entity_no',
        'firstname',
        'middlename',
        'lastname',
        'suffix',
        'gender',
        'birthdate',
        'mobile_no',
        'street',
        'barangay',
        'city',
        'province',
        'email'


    ];

    public function toSearchableArray(): array
    {
        $array = [
            'id' => $this->id,
            'entity_no' => $this->entity_no,
            'firstname' => $this->firstname,
            'middlename' => $this->middlename,
            'lastname' => $this->lastname,
            'suffix1' => $this->suffix1,
            'gender' => $this->gender,
            'birthdate' => $this->birthdate,
            'mobile_no' => $this->mobile_no,
            'street' => $this->street,
            'barangay' => $this->barangay,
            'city' => $this->city,
            'province' => $this->province,
            'email' => $this->email,
        ];
        return $array;
    }
}
