<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'internal_user_id',
        'external_user_id',
        'login_time',
        'logout_time',
    ];

    public function internalUser()
    {
        return $this->belongsTo(InternalUser::class, 'internal_user_id');
    }

    public function externalUser()
    {
        return $this->belongsTo(ExternalUser::class, 'external_user_id');
    }
}
