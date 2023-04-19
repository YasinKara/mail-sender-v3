<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    use HasFactory;

    protected $table = 'platforms';
    protected $guarded = [];
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'website',
        'address',
        'logo_url',
        'slug',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function sentEmails()
    {
        return $this->hasMany(SentEmail::class, 'platform_id', 'id');
    }
}
