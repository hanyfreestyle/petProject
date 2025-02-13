<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shelter extends Model {
    protected $table = "shelters";
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'website',
        'services',
        'location',
        'landmark',
        'phone_number',
    ];

    protected $casts = [
        'phone_number' => 'array',
    ];

}
