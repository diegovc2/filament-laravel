<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'testing_onemodal',
        'name',
        'email',
        'phone',
    ];
}
