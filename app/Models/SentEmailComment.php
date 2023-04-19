<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SentEmailComment extends Model
{
    use HasFactory;
    protected $table = 'sent_email_comments';
    protected $guarded = ['id'];
    protected $fillable = [
        'sent_email_id',
        'comment',
    ];

    public function sentEmail()
    {
        return $this->belongsTo(SentEmail::class);
    }
}