<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model {

    protected $table = 'settings'; // تأكد من توافق اسم الجدول

    protected $fillable = [
        'name', 'slogan', 'des', 'logo', 'logo_dark', 'logo_side',
        'phone', 'mobile', 'whatsapp', 'facebook', 'twitter', 'instagram',
        'linkedin', 'map_url', 'map_is_active'
    ];

}
