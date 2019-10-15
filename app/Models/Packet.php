<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Packet extends Model
{
    protected $table = 'packets';

    protected $fillable = [
        'name', 'short_description', 'description', 'image', 'active'
    ];

    protected $casts = [
        'active' => 'boolean'
    ];

    public function variants()
    {
        return $this->hasMany(Variant::class);
    }
}
