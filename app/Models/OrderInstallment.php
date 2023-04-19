<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderInstallment extends Model
{
    use HasFactory;
    protected $table = 'order_installments';
    protected $guarded = ['id'];
    protected $fillable = [
        'order_id',
        'installment_th',
        'installment_price',
        'installment_date',
        'payment_status',
        'payment_date',
    ];

    protected $dates = [
        'installment_date',
        'payment_date',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'id', 'orders');
    }
}
