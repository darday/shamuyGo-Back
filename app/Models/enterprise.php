<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class enterprise extends Model
{
    protected $fillable = [
        'enterprise_code',
        'enterprise_name',
        'phone',
        'address',
        'google_maps',
        'img_logo', 
        'city',
        'province', 
        'responsable', 
        'url_web',         
        ]; // Add other fields as required

}
