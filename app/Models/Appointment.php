<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'schedule_id',
        'status',
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'gender',
        'contact_number',
        'address'
    ];

    public function prettyStatus()
    {
        $status = [
            'Pending',
            'Accepted',
            'To be rate'
        ];
        return $status[$this->status];
    }
}
