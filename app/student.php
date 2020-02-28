<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use Notifiable;


    protected $fillable = [
        'name', 'email', 'Eid', 'dep', 'phone', 'Pemail',
    ];



    /*public function advisor()
    {
        return $this->belongsTo(advisor::class);
    }*/
    public function ticket()
    {
        return $this->hasMany(ticket::class);
    }
    public function feedback()
    {
        return $this->hasMany(feedback::class);
    }
    public function subject()
    {
        return $this->hasMany(subject::class);
    }
    public function ias()
    {
        return $this->hasMany(ias::class);
    }
    public function massage()
    {
        return $this->hasMany(massage::class);
    }
}
