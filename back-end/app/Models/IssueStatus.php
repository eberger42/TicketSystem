<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use \App\Models\Issue;

class IssueStatus extends Model
{
    use HasFactory;
    
    protected $fillable = ['name'];
    public $timestamps = false;

    public function issues(): HasMany
    {
        return $this->hasMany(Issue::class);
    }
}
