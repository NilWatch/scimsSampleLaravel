<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionInfo extends Model
{
    use HasFactory;

    protected $connection = 'scims';
    protected $table = 'section_info';
    protected $fillable = [
        'section_id',
        'department_id',
        'division_id',
        'section_code',
        'section_name',

    ];

    public function division(){
        return $this->belongsTo(Division::class,'division_id', 'division_id');
    }

}
