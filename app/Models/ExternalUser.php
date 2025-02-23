<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExternalUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'phone_2',
        'address',
        'dob',
    ];

    public function internalUser()
    {
        return $this->belongsTo(InternalUser::class, 'user_id');
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class, 'external_user_id');
    }
}
