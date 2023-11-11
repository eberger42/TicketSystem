<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'issue_type_id',
        'issue_status_id',
        'issue_priority_id',
        'name',
        'description',
        'date_resolved',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function issueType()
    {
        return $this->belongsTo(IssueType::class);
    }

    public function issueStatus()
    {
        return $this->belongsTo(IssueStatus::class);
    }

    public function issuePriority()
    {
        return $this->belongsTo(IssuePriority::class);
    }
}
