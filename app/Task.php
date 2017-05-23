<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable =[
        'schedule_topic',
        'schedule_date',
        'publish_at'
    ];
}
