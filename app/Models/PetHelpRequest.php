<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PetHelpRequest extends Model
{
    protected $fillable = ['pet_name', 'owner_name', 'owner_phone', 'last_seen', 'details', 'image','status'];

}
