<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndividualResult extends Model
{
    use HasFactory;
    
    protected $guarded = [
        'id',
        'crated_at',
        'updated_at',
    ];
    
    //多対1モデル
    public function game()
    {
        return $this->belongsTo(Game::class);
    }
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function result()
    {
        return $this->belongsTo(Result::class);
    }
    public function result_way()
    {
        return $this->belongsTo(ResultWay::class);
    }
}
