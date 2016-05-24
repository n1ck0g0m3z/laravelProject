<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $fillable = [
        'id_number',
        'first_name',
        'last_name',
        'schedule_id'
    ];
}
