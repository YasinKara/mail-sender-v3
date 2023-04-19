<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogCustomer extends Model
{
    use HasFactory;
    protected $table = 'log_customers';
    protected $guarded = ['id'];
    protected $fillable = [
        'category_id',
        'user_id',
        'customer_id',
        'subject',
        'message',

        'created_at',
        'updated_at',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }

    public function files()
    {
        return $this->hasMany(LogFiles::class, 'log_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(LogCategory::class, 'category_id', 'id');
    }
}
