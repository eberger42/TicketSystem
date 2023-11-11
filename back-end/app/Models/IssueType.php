<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use \App\Models\Issue;

class IssueType extends Model
{
    use HasFactory;
    
    protected $fillable = ['name'];

    public function issues(): HasMany
    {
        return $this->hasMany(Issue::class);
    }
}
