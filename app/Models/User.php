<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\enum\UserRole;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'role',
        'region_id',
        'bio',
        'profile_photo',
        'email_verified_at',
        'is_active',
        'password',
    ];

    /**
     * Un Utilisateur a un seul profil de type agriculteur
     *
     * @return void
     */
    public function farmerProfile()
    {
        return $this->hasOne(FarmerProfile::class);
    }

    /**
     * Un utilisateur a un seul profil de type client (acheteur)
     *
     * @return void
     */
    public function buyerProfile()
    {
        return $this->hasOne(BuyerProfile::class);
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'role' => UserRole::class
        ];
    }
}
