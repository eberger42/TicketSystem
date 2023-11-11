<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

use \App\Models\User;
use \App\Models\Ticket;

class Client extends Model
{
    use HasFactory;
    
    protected $fillable = ['name'];

    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
