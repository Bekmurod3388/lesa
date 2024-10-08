<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentHistory extends Model
{
    use HasFactory;
    protected $fillable = ['client_id','service_id','difference','before','after'];
}
