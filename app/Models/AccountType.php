<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountType extends Model
{
    use HasFactory;
    protected $table = 'account_type';
    protected $connection = 'scims';
    protected $fillable = [
        'account_type_id',
        'entity_no',
        'scims_sys',
        'vamos_sys',
        'resbakuna_sys',
        'ikonsulta_sys',
        'doctrack_sys',
        'senior_sys',
        'joborder_sys',
        'barangay_sys',
        'let_sys',
        'pnp_sys',
    ];

    protected static function booted()
    {
        static::creating(function ($accountType) {
            // Generate a unique 6-character account_type_id consisting of 3 letters and 3 integers
            do {
                $account_type_id = (string) Str::uuid(); // Combine letters and numbers
            } while (self::whereAccount_type_id( $account_type_id)->exists());

            $accountType->account_type_id = $account_type_id;
        });
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'entity_no', 'entity_no');
    }
}
