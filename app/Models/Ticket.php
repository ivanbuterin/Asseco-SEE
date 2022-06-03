<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Ticket extends Model
{
    protected $fillable = ['name', 'description', 'user_id', 'client_id'];
    public $timestamps = false;
    use HasFactory;

}
