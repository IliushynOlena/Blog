<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Testimonial extends Model
{
    use Notifiable;


    protected $fillable = [
        'id', 'autor_name', 'title', 'body', 'avatar'
    ];
}
