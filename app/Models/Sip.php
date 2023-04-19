<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sip extends Model
{
    use HasFactory;
    protected $table = 'sips';
    protected $guarded = ['id'];
    protected $fillable = [
        'internal',
        'password',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->BelongsToMany(User::class, 'user_sip', 'sip_id', 'user_id');
    }
}
