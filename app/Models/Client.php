<?php

namespace App\Models;

use App\Traits\UsesUuid;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use UsesUuid;

    protected $fillable = [
        'email', 'name', 'surname', 'phone',
        'city', 'postcode', 'street',
        'building_nr', 'room_nr', 'stair_case', 'floor', 'stair_case_code',
        'note', 'marketing_allowed'
    ];

    protected $casts = [
        'marketing_allowed' => 'boolean',
    ];
}
