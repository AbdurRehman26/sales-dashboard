<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class market_images extends Model
{
    protected $table = 'market_images';
    protected $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['market_id','image_name'];

}
