<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail 
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'country',
        'city',
        'address',
        'phone',
        'avatar',
        'user_type',
        'is_admin',
        'referral_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //hasMany products
    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }

    //hasOne seller
    public function seller()
    {
        return $this->hasOne('App\Models\Seller');
    }

    //hasMany bbforce
    public function bbforce()
    {
        return $this->hasMany('App\Models\Bbforce');
    }

    //hasMany buyers
    public function buyers()
    {
        return $this->hasMany('App\Models\Buyer');
    }

    //hasMany vacancies
    public function vacancies()
    {
        return $this->hasMany('App\Models\Vacancy');
    }

    //hasMany personalizes
    public function personalizes()
    {
        return $this->hasMany('App\Models\Personalize');
    }

    //hasMany providers
    public function providers()
    {
        return $this->hasMany('App\Models\Provider');
    }

    //hasMany escrows
    public function escrows()
    {
        return $this->hasMany('App\Models\Escrow');
    }
}
