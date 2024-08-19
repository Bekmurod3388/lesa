<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    use HasFactory;

    public const STATUS_ACTIVE = 1;

    public const STATUS_NOT_ACTIVE = 0;

    protected $fillable = ['client_id','service_id','quantity','status'];


    public function client(){
        return $this->belongsTo(Client::class);
    }
    public function service(){
        return $this->belongsTo(Service::class);
    }

    public function getStatusAttribute($value){
        return $value = self::STATUS_ACTIVE ? 'Aktiv':'Aktivmas';
    }
}
