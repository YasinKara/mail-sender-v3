<?php

namespace App\Models\Central;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QueueLog extends Model
{
    use HasFactory;
    protected $table = 'queues_log';
    protected $connection = 'central';
    protected $guarded = [];
    protected $fillable = [];
}
