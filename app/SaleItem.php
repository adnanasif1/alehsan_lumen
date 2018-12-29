<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaleItem extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'itemname', 'default', 'status', 'ordering'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}