<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempSentEmail extends Model
{
    use HasFactory;
    protected $connection = 'mysql_import';
    protected $table = 'sent_emails';
    protected $guarded = ['id'];
    protected $fillable = [
        'sender_id',
        'mail_code',
        'customer_email',
        'customer_gender',
        'customer_name',

        'approval',
        'approval_date',

        'package_name',
        'comment_count',
        'comment_per_price',
        'package_price',

        'sent_email_html',
        'profile_link',
        'platform',
    ];

    public function sender()
    {
        return $this->belongsTo(TempUser::class, 'sender_id', 'id');
    }

    public function tempInstallments()
    {
        return $this->hasMany(TempMailInstallment::class, 'mail_id', 'id');
    }
}
