<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kioskCode extends Model
{
    use HasFactory;
    protected $fillable = [
        'userid',
        'kiosk_userid',
        'kioskCode',
        'active',
    ];
}
