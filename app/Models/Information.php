<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Information extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'account_type',
        'avatar',
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'gender',
        'contact_number',
        'barangay',
        'municipality',
        'province'
    ];
}
