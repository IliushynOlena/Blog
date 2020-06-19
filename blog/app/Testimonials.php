<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Testimonials extends Model
{
    use Notifiable;


    protected $fillable = [
        'author_id', 'title', 'body',
    ];
}
