<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $table = 'invoices';
    protected $guarded = ['id'];
    protected $fillable = [
        'order_id',
        'invoice_number',
        'amount',
        'invoice_file',
        'payment_status',
        'payment_amount',
        'payment_image_file',
        'called',
        'called_date',
        'is_sent',
        'sent_date',
    ];

    // called_date attribute is Carbon instance
    protected $dates = [
        'called_date',
        'sent_date',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function invoiceNotifications()
    {
        return $this->hasMany(InvoiceNotification::class, 'invoice_id', 'id');
    }
}
