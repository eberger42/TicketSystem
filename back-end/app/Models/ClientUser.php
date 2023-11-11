<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use \App\Models\Client;
use \App\Models\User;

class ClientUser extends Model
{
    use HasFactory;

    protected $fillable = ['client_id', 'user_id'];

    public $timestamps = false;

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
