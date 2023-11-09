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
                $letters = Str::random(3); // Generate 3 random letters
                $numbers = str_pad(rand(100, 999), 3, '0', STR_PAD_LEFT); // Generate 3 random integers between 100 and 999
                $account_type_id = $letters . $numbers; // Combine letters and numbers
            } while (self::where('account_type_id', $account_type_id)->exists());

            $accountType->account_type_id = $account_type_id;
        });
    }
}
