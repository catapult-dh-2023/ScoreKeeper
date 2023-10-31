<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
    public function games()
    {
        return $this->belongsToMany(Game::class, 'league_game')->withTimestamps();
    }
}
