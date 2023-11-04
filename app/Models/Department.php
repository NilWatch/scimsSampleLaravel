<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Department extends Model
{
    use HasFactory;

    protected $connection = 'scims';
    protected $table = 'department_info';
    protected $fillable = [
        'id',
        'department_id',
        'department_code',
        'department_name',
        'department_logo',
        'department_tel_no',
        'department_email_add',

    ];

    public function divisions()
    {
        return $this->hasMany(Division::class, 'department_id', 'department_id');
    }
}
