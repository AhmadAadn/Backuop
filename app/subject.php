<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subject extends Model
{

    public function student()
    {
        return $this->belongsTo(student::class);
    }
}
