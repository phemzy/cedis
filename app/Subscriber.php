<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
	use Notifiable;
    //
    protected $fillable = ['name', 'email'];
}
