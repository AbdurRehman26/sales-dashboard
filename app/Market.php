<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Market extends Model
{
	use SoftDeletes;
	
    protected $table = 'markets';
    protected $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','market_type','plz','market_name','market_owner','owner_email','owner_phone','owner_address','contact_person_name','contact_person_phone','contact_person_email','other','audio','pdf','img','color','status','notes','lat','lng', 'item_quantity', 'total_amount','display', 'item_amount', 'expiry_date'];

}
