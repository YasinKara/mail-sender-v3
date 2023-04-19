<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;
    protected $table = 'logs';
    protected $guarded = ['id'];
    protected $fillable = [
        'log_type',
        'log_title',
        'log_message',
        'detail_message',
        'file',
        'line',
        'code',

        'request_ip',
        'request_ips',
        'request_is_from_trusted_proxy',
        'request_client_ip',
        'request_client_ips',
        'request_script_name',
        'request_user_agent',
        'request_referer',
    ];
}
