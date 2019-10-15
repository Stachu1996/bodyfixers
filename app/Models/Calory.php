<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calory extends Model
{
    protected $table = "calories";

    protected $fillable = [
        'name', 'price', 'variant_id'
    ];

    protected $casts = [
        'variant_id' => 'integer'
    ];

    public function variant()
    {
        return $this->belongsTo(Variant::class);
    }
}
