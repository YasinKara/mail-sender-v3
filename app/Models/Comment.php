<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $guarded = ['id'];
    protected $fillable = [
        'order_id',
        'invoice_id',
        'owner',
        'content',
        'lawyer_took_action', // 0: Hayır, 1: Evet
        'removed_date',
        'image',
        'note',
        'status', // 0: Beklemede, 1: Onaylandı, 2: Faturalandırıldı (Onaylandı), 3: Reddedildi,
    ];

    protected $dates = [
        'commented_date',
        'removed_date',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

    // Hiç işlem yapılmamışlar / Avukat işlemine alınmayı bekleyenler
    public function getWaitingCount($query)
    {
        return $query->where('status', 0); 
    }

    // Avukat işlemine alınanlar
    public function getLawyerTookActionCount($query)
    {
        return $query->where('status', 0)->where('lawyer_took_action', 1); 
    }

    // Silinmiş yorumlar
    public function getDeletedCount($query)
    {
        return $query->where('status', 1)->orWhere('status', 2);
    }

    // Silinmiş ve Faturalandırılmış yorumlar
    public function getBilledCount($query)
    {
        return $query->where('status', 2);
    }

    // Reddedilmiş yorumlar
    public static function getRejectedCount($query)
    {
        return $query->where('status', 3);
    }
}