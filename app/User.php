<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Carbon\Carbon;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'id', 'full_name', 'email', 'phone_no', 'dob',
        'join_date', 'termination_date','gender','role', 
        'next_of_kin', 'next_of_kin_phn', 'next_of_kin_email',
        'rela_next_of_kin', 'emergency_phn', 'emergency_email',
        'emergency_name', 'emergency_rela', 'employment_type',
        'address',
    ];

    public function competences(){
        return $this->hasMany(Competence::class);
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public $incrementing = false;
}
