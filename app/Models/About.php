<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'image',
        'content',
        'stylist_id',
        'type', // 1-destiny, 2-about, 3-passion, 4-stylist
        'user_id',
    ];
}
