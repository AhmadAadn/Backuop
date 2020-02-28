<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ias extends Model
{

    public function student()
    {
        return $this->belongsTo(student::class);
    }
}
