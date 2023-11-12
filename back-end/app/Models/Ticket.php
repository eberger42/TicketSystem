<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'assigned_user_id',
        'client_user_id',
        'product_id',
        'ticket_status_id',
        'ticket_priority_id',
        'name',
        'description',
        'date_closed',
    ];

    public function developer()
    {
        return $this->belongsTo(User::class, 'assigned_user_id');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_user_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function status()
    {
        return $this->belongsTo(TicketStatus::class, 'ticket_status_id');
    }

    public function priority()
    {
        return $this->belongsTo(TicketPriority::class, 'ticket_priority_id');
    }
}
