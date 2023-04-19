<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $guarded = ['id'];
    protected $fillable = [
        'platform_id',
        'referral_email_id',
        'referral_user_id',
        'customer_id',

        'installment',
        'comment_count',
        'comment_per_price',
        'order_price',

        'profile_url',
        'note',
        'status', // 0: İşlemde, 1: Tamamlandı

        'created_at',
        'updated_at',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    // colum with carbon
    public function getCratedAt($value)
    {
        return Carbon::parse($value)->format('H:i d.m.Y');
    }

    public function platform()
    {
        return $this->belongsTo(Platform::class, 'platform_id', 'id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id')->withDefault();
    }

    public function sentEmail()
    {
        return $this->belongsTo(SentEmail::class, 'referral_email_id', 'id')->withDefault();
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'referral_user_id', 'id', 'users')->withDefault();
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'order_id', 'id', 'comments')->with('invoice');;
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    public function orderInstallments()
    {
        return $this->hasMany(OrderInstallment::class, 'order_id', 'id');
    }

    public function orderInstallment()
    {
        return $this->hasOne(OrderInstallment::class, 'order_id', 'id');
    }
}
