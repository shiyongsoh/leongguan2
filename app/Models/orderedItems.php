<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderedItems extends Model
{
    use HasFactory;
    protected $fillable = [
        "status",
        "amount",
        "userid",
        "productID"
    ];
}
