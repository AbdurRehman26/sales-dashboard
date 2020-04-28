<?php

namespace App\Http\Controllers\Api\V1;

use App\Data\Repositories\MarketRepository;
use Kazmi\Http\Controllers\ApiResourceController;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;


class MarketController extends ApiResourceController{
    
    public $_repository;

    public function __construct(MarketRepository $repository){
        $this->_repository = $repository;
    }

    public function rules($value=''){
        $rules = [];

        if($value == 'store'){
            

        }

        if($value == 'update'){

            $rules['id'] =  'required';

        }


        if($value == 'destroy'){

            $rules['id'] =  'required';

        }

        if($value == 'show'){

            $rules['id'] =  'required';

        }

        if($value == 'index'){
         
            $rules['pagination'] =  'nullable|in:true,false';

        }

        return $rules;
    
    }

    public function input($value=''){
        $input = request()->only('id', 'expiry_date', 'color', 'market_name', 'market_owner', 'owner_email', 'owner_phone', 'owner_address', 'contact_person_name', 'contact_person_phone', 'contact_person_email', 'other', 'notes', 'plz', 'market_type', 'img', 'pdf', 'other', 'audio');

        $input['user_id'] = request()->user()->id;
        

        if($value == 'store'){

            $input['expiry_date'] = \Carbon\Carbon::now()->addDays(7)->toDateTimeString();

        }



        return $input;
    }
}