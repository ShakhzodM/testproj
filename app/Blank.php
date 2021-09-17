<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blank extends Model
{
    protected $fillable = ['name', 'phone_number', 'user_id', 'message', 'files', 'company'];
}
