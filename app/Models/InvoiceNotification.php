<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceNotification extends Model
{
    use HasFactory;
    protected $table = 'invoice_notifications';
    protected $guarded = ['id'];
    protected $fillable = [
        'invoice_id',
        'stage', //
        'status', // 0: bekliyor, 1: gönderildi
        'send_notification_date',
    ];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class)->with('order.customer');
    }
}