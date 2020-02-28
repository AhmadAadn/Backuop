<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    public $fillable = ['content', 'type'];

    public function student()
    {
        return $this->belongsTo(student::class);
    }
}
