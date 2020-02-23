<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'avatar', 'email', 'phone', 'details', 'payments', 'verified', 'verified_at', 'location','user_id', 'slug'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'verified_at' => 'datetime',
        'payments' => 'array',
        'location' => 'array',
        'verified' => 'boolean',
        'user_id' => 'integer'
    ];
}
