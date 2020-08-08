<?php

namespace App\Http\Controllers\Api\V1;

use App\Data\Repositories\JournalRepository;
use Kazmi\Http\Controllers\ApiResourceController;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;


class JournalController extends ApiResourceController{
    
    public $_repository;

    public function __construct(JournalRepository $repository){
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

        $input = request()->only('id', 'market_id', 'user_id', 'contacted_with', 'contacted_via', 'notes', 'contacted_at', 'color');
        
        return $input;
    }


    //Create single record
    public function store(Request $request)
    {
        $request->request->add(['method_type' => 'store']);

        $rules = $this->rules(__FUNCTION__);
        $input = $this->input(__FUNCTION__);

        $messages = $this->messages(__FUNCTION__);

        $color = $input['color'];


        $updateData['id'] = $journal['market_id'];
        $updateData['color'] = $color;
        
        app('MarketRepository')->update($updateData);


        unset($input['color']);

        $this->validate($request, $rules, $messages);

        $data = $this->_repository->create($input);

        $output = ['data' => $data, 'message' => $this->responseMessages(__FUNCTION__)];

        // HTTP_OK = 200;

        return response()->json($output, Response::HTTP_OK);

    }

    //Update single record
    public function update(Request $request, $id)
    {
        $request->request->add(['id' => $id]);

        $input = $this->input(__FUNCTION__);
        $rules = $this->rules(__FUNCTION__);

        $color = $input['color'];

        unset($input['color']);

        $messages = $this->messages(__FUNCTION__);

        $this->validate($request, $rules, $messages);

        $data = $this->_repository->update($input);
        $output = ['data' => $data, 'message' => $this->responseMessages(__FUNCTION__)];

        // HTTP_OK = 200;

        return response()->json($output, 200);

    }

}