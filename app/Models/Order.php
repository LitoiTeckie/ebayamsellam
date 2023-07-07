<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function region()
    {
        return $this->belongsTo(Shipregion::class, 'region_id', 'id');
    }

    public function ville()
    {
        return $this->belongsTo(Shipville::class, 'ville_id', 'id');
    }

    public function quartier()
    {
        return $this->belongsTo(Shipquartier::class, 'quartier_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }



}
