<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MarketTypes extends Model
{
    protected $table = 'market_types';
    protected $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];
}
