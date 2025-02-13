<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigData extends Model {

    protected $table = "config_data";
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'name', 'cat_id', 'is_active'];


}
