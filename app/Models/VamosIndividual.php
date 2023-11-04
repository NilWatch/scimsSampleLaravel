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
            'email' => $this->email,
        ];
        return $array;
    }
}
