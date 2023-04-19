<?php

namespace App\Models\Central;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cdr extends Model
{
    use HasFactory;
    protected $table = 'cdr';
    protected $connection = 'central';
    protected $guarded = [];
    protected $fillable = [];
}
