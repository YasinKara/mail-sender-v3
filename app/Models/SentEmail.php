<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SentEmail extends Model
{
    use HasFactory;
    protected $table = 'sent_emails';
    protected $guarded = ['id'];
    protected $fillable = [
        'sender_id',
        'platform_id',
        'signature_id',

        'mail_code',
        'customer_email',
        'customer_name',
        'customer_gender',
        'package_name',

        'company_name',
        'first_phone_number',
        'second_phone_number',

        'approval',
        'approval_date',

        'installment',
        'comment_count',
        'comment_per_price',
        'package_price',
        'is_switzerland',

        'profile_link',
        'sent_email_html',
        'created_at',
        'updated_at',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'sender_id', 'id', 'users');
    }

    public function redirectUrls()
    {
        return $this->hasMany(RedirectUrl::class, 'mail_code', 'mail_code');
    }

    // gönderilen maile ait tüm yorumlar
    public function GetComments()
    {
        return $this->hasMany(SentEmailComment::class, 'sent_email_id', 'id');
    }

    public function platform()
    {
        return $this->belongsTo(Platform::class, 'platform_id', 'id');
    }

    public function signature()
    {
        return $this->belongsTo(Signature::class, 'signature_id', 'id');
    }

    public function approvalDates()
    {
        return $this->hasMany(SentEmailApprovalDate::class, 'sent_email_id', 'id');
    }

    public function referralOrder()
    {
        return $this->hasOne(Order::class, 'referral_email_id', 'id');
    }
}
