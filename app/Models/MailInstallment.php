<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MailInstallment extends Model
{
    use HasFactory;
    protected $table = 'mail_installments';
    protected $guarded = ['id'];
    protected $fillable = [
        'mail_id',
        'installment_number',
        'installment_th',
        'installment_price',
        'installment_date',
        'payment_status',
    ];

    public function sentEmail()
    {
        return $this->belongsTo(SentEmail::class, 'mail_id', 'id', 'sent_emails');
    }
}
