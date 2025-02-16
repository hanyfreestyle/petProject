<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class About extends Model {
    protected $table = 'about';

    protected $fillable = [
        'title', 'description', 'title_2', 'description_2', 'title_3', 'description_3','photo',
    ];

}
