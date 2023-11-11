<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

use \App\Models\Product;

class SupportArticle extends Model
{
    use HasFactory;
    
    protected $fillable = ['text'];
    
    public function product(): BelongsToMany
    {
        return $this->belongsToMany(Product::class)
    }

}
