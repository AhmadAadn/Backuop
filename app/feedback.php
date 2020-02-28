<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
    public $fillable = ['content'];

    public function student()
    {
        return $this->belongsTo(student::class);
    }}
