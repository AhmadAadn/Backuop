<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class massage extends Model
{
    public $fillable = ['content'];

    public function student()
    {
        return $this->belongsTo(student::class);
    }
   /* public function advisor()
    {
        return $this->belongsTo(advisor::class);
    }*/
}
