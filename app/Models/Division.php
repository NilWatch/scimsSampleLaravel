<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;
    protected $connection = 'scims';
    protected $table = 'division_info';
    protected $fillable = [
        'id',
        'division_id',
        'division_code',
        'division_name',
        'division_logo',
        'division_tel_no',
        'division_email_add',
        'department_id', // This is the foreign key linking to the Department model
];

public function department()
{
    return $this->belongsTo(Department::class, 'department_id', 'department_id');
}

public function sections(){
    return $this->hasMany(SectionInfo::class, 'division_id', 'division_id');
}

}
