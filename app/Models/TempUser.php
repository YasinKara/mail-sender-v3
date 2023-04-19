<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempUser extends Model
{
    use HasFactory;
    protected $connection = 'mysql_import';
    protected $table = 'users';
    protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'username',
        'email',

        'signature_name',
        'signature_title',
        'signature_email',
        'signature_phone',
        'role',

        'password',
    ];

    public function tempSentEmails()
    {
        return $this->hasMany(TempSentEmail::class, 'sender_id', 'id');
    }
}
