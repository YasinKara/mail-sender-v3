<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SentEmailApprovalDate extends Model
{
    use HasFactory;
    protected $table = 'sent_email_approval_dates';
    protected $guarded = ['id'];
    protected $fillable = [
        'sent_email_id',
        'user_id',
        'package_amount',
        'approval_date',
    ];

    public function sentEmail()
    {
        return $this->belongsTo(SentEmail::class, 'sent_email_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
