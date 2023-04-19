<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermissionGroup extends Model
{
    use HasFactory;
    protected $table = 'permission_groups';
    protected $fillable = [
        'name',
        'description',
        'created_at',
        'updated_at',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    // permission to permission group
    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'permission_group_permission', 'permission_group_id', 'permission_id');
    }

}
