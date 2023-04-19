<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminLog extends Model
{
    use HasFactory;
    protected $table = 'admin_logs';
    protected $guarded = ['id'];
    protected $fillable = [
        'user_id',
        'log_type',
        'log_title',
        'log_message',
        'detail_message',
        'file',
        'line',
        'code',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id', 'users');
    }
}
