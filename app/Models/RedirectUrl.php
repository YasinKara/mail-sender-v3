<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RedirectUrl extends Model
{
    use HasFactory;
    protected $table = 'redirect_urls';
    protected $guarded = ['id'];
    protected $fillable = [
        'mail_code',
        'uuid',
        'bridge_url',
        'redirect_url',
        'counter',

        'request_ip',
        'request_ips',
        'request_is_from_trusted_proxy',
        'request_client_ip',
        'request_client_ips',
        'request_script_name',
        'request_user_agent',
        'request_referer',
    ];

    public function mail()
    {
        return $this->belongsTo(SentEmail::class, 'mail_code', 'mail_code');
    }
}
