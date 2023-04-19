<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CallHistory extends Model
{
    use HasFactory;
    protected $table    = "call_histories";
    protected $guarded  = [];
    protected $fillable = ["id", "phone_id", "status", "created_at", "updated_at"];
}