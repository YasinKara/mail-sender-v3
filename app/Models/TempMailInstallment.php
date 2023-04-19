<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempMailInstallment extends Model
{
    use HasFactory;
    protected $connection = 'mysql_import';
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

    public function mail()
    {
        return $this->belongsTo(TempSentEmail::class, 'mail_id', 'id');
    }
}
