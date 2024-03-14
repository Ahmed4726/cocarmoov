<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laratrust\Contracts\LaratrustUser;
use Laratrust\Traits\HasRolesAndPermissions;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Contracts\Auth\MustVerifyEmail;
class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasRolesAndPermissions;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'last_name',
        'family_name',
        'phone_number',
        'email',
        'password',
        'user_type',
        'quantity',
        'birthday',
        'vehicle_condition_test',
        'income_contribution',
        'vehicle_carrier_reg',
        'transport_insurance',
        'transport_capacity',
        'signed_contract',
        'bank_details',
        'trade_plates',
        'carmov_insurance',
        'professional_liabilities',
        'company_registeration',
        'driving_lisence',
        'mission_document',
        'id_card',
        'photo',
        'card_number',
        'swift_code',
        'account_owner',
        'IBAN_number',
        'expiry_date',
        'issue_date',
        'language',
        'city',
        'postal_code',
        'adddress',
        'company_name',
        'place_of_birth',
        'status',
        'note',
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
        'password' => 'hashed',
    ];
}
