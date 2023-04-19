<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CentralCdr extends Model
{
    use HasFactory;
    protected $connection = 'central';
    protected $table = 'cdr';
    protected $guarded = ['id'];
    protected $fillable = [
        'cdr_id',
        'calldate',
        'clid',
        'did',
        'source',
        'src',
        'dst',
        'destination',
        'dcontext',
        'channel',
        'dstchannel',
        'lastapp',
        'lastdata',
        'duration',
        'billsec',
        'disposition',
        'amaflags',
        'accountcode',
        'auth_code',
        'customer_code',
        'pin_code',
        'uniqueid',
        'linkedid',
        'sequence',
        'peeraccount',
        'calltype',
        'recfile',
        'cloud_path',
        'tenant',
        'trunk',
    ];


    protected $dates = [
        'calldate',
        'created_at',
        'updated_at',
    ];
}
