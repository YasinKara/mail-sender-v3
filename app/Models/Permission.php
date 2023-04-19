<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    protected $table = 'permissions';
    protected $fillable = [
        'name',
        'description',
        'route_name',
        'back_route_name',
        'is_editable',
        'is_erasable',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_permission', 'permission_id', 'role_id')->withTimestamps();
    }

    public function permissionGroups()
    {
        return $this->belongsToMany(PermissionGroup::class, 'permission_group_permission', 'permission_id', 'permission_group_id', 'id', 'id');
    }
}
