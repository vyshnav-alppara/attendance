<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class InternalUser extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'username',
        'email',
        'phone',
        'password',
    ];

    public function externalUser()
    {
        return $this->hasOne(ExternalUser::class, 'user_id');
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class, 'internal_user_id');
    }
}
