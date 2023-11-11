<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

use \App\Models\Ticket;
use \App\Models\Issue;
use \App\Models\SupportArticle;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'company',
    ];

    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }

    public function issues(): HasMany
    {
        return $this->hasMany(Issue::class);
    }

    public function support_articles(): BelongsToMany
    {
        return $this->belongsToMany(SupportArticle::class);
    }
}
