<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'users';
    protected $guarded = ['id'];
    protected $fillable = [
        'id',
        'team_leader_id',
        'name',
        'username',
        'email',
        'commission',

        'password',
        'role_id',
        'role',
        'is_passive',

        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
//        'password',
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

    public function sentEmails()
    {
        return $this->hasMany(SentEmail::class, 'sender_id', 'id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'referral_user_id', 'id');
    }

    public function teamLeader()
    {
        return $this->belongsTo(User::class, 'team_leader_id', 'id', 'users');
    }

    public function teamMembers()
    {
        return $this->hasMany(User::class, 'team_leader_id', 'id', 'users');
    }

    public function roleRelation()
    {
        return $this->belongsTo(Role::class, 'role_id', 'id', 'roles');
    }

    public function hasPermission($route_name)
    {
        return $this->roleRelation->permissions->contains('route_name', $route_name);
    }

    public function hasBackRoutePermission($route_name)
    {
        return $this->roleRelation->permissions->contains('back_route_name', $route_name);
    }

    public function role()
    {
        return $this->roleRelation->name;
    }

    public function signatures()
    {
        return $this->hasMany(Signature::class, 'user_id', 'id')->with('platform');
    }

    public function sip()
    {
        return $this->BelongsToMany(Sip::class, 'user_sip', 'user_id', 'sip_id');
    }
}
