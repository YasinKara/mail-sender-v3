<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogFiles extends Model
{
    use HasFactory;
    protected $table = 'log_files';
    protected $guarded = ['id'];
    protected $fillable = [
        'log_id',
        'file_path',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function log()
    {
        return $this->belongsTo(LogCustomer::class, 'log_id', 'id');
    }
}
