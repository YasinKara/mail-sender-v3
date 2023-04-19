<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{
    use HasFactory;
    protected $table = 'user_groups';
    protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'team_leader_id',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function teamLeader()
    {
        return $this->belongsTo(User::class, 'team_leader_id', 'id')->withDefault();
    }
}
