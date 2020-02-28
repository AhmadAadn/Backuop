<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class advisor extends Model
{
  /*  use Notifiable;

     
    protected $fillable = [
        'name', 'email', 'Eid', 'dep', 'phone', 'Pemail','officeNumber',
    ];
 

    public function ticket()
    {
        return $this->hasMany(student::class);
    }
   / public function massage()
    {
        return $this->hasMany(massage::class);
    }
 */
}
