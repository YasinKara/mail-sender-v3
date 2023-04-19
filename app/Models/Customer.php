<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $guarded = ['id'];
    protected $fillable = [
        'referral_email_id',
        'name',
        'email',
        'email_second',
        'phone_number',
        'phone_number_second',
        'gender',
        'note',

        'company',
        'country',
        'address',

        'tax_number',

        'disabled',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function invoices()
    {
        return $this->hasManyThrough(Invoice::class, Order::class);
    }

    public function comments()
    {
        return $this->hasManyThrough(Comment::class, Order::class);
    }

    public function sentEmail()
    {
        return $this->belongsTo(SentEmail::class, 'referral_email_id', 'id', 'sent_emails');
    }

    public function logs()
    {
        return $this->hasMany(LogCustomer::class, 'customer_id', 'id');
    }

    public function invoicesAndComments()
    {
        return $this->hasManyThrough(Invoice::class, Order::class)
            ->with('comments');
    }

    public function invoicesAndCommentsWithOrder()
    {
        return $this->hasManyThrough(Invoice::class, Order::class)
            ->with('comments')
            ->with('order');
    }

    public function invoicesAndCommentsWithOrderAndCustomer()
    {
        return $this->hasManyThrough(Invoice::class, Order::class)
            ->with('comments')
            ->with('order')
            ->with('order.customer');
    }
}
