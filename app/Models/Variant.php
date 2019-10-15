<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    protected $table = 'variants';

    protected $fillable = [
        'name', 'description', 'packet_id'
    ];

    protected $casts = [
        'packet_id'     => 'integer'
    ];

    protected $with = ['calories'];

    public function packet()
    {
        return $this->belongsTo(Packet::class);
    }

    public function calories()
    {
        return $this->hasMany(Calory::class);
    }
}
