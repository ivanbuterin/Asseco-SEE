<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'technician_id',
        'ticket_id',
    ];

    public $table = "ticket_user";
}
