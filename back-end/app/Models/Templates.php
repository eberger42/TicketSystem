<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Templates extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'text'];
    public $timestamps = false;
    
    // Define the foreign key constraint
    public function templateType()
    {
        return $this->belongsTo(TemplateType::class, 'template_id');
    }
}
