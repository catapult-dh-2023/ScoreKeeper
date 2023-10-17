<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultWay extends Model
{
    use HasFactory;
    
    protected $guarded = [
        'id',
        'crated_at',
        'updated_at',
    ];

}