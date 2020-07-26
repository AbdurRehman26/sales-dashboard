<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JWTFactory;
use JWTAuth;
// use Validator;
use Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Market;
use App\MarketTypes;

class ApiController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($request->all(), [

            'email' => 'required|string|email|max:255|unique:users',
            'name' => 'required',
            'password'=> 'required',
            
        ]);
        if ($validator->fails()) {
           
           // return response()->json($validator->errors());
            $response['message'] = $validator->messages()->first();
            $response['status'] = false;
            return $response;
        }
        
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);
        
        $token = JWTAuth::fromUser($user);
        $status = true;
        return Response::json(compact('user','token','status'));
    }

    public function login(Request $request)
    {
        $status = 'false';
                
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password'=> 'required'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors());
        }
        
        $credentials = $request->only('email', 'password');
        $user = User::where('email',$request->email)->first();
        try {
            if (! $token = JWTAuth::attempt($credentials, ['exp' => \Carbon\Carbon::now()->addDays(365)->timestamp])) {
                return response()->json(['message' => 'Login Credentials are not correct.','status'=>$status], 401);
            }
        } catch (JWTException $e) {
            return response()->json(['message' => 'Token Expired.'], 500);
        }
       
       $user->fcm_id = $request->fcm_id;
       $user->save();
       return response()->json(compact('user','token'));
        
    }

    public function addMarket(Request $request){

        $data = $request->all();

        if($request->hasFile('pdf')) {
           
            $extension = $request->pdf->getClientOriginalExtension();
            $imageName = time() . '.' . 'pdf';

            $image_uploaded = $request->pdf->move(public_path('uploads/files'), $imageName);     
            $data['pdf'] = $imageName;

        }
        if($request->hasFile('audio')) {
           
            $extension = $request->audio->getClientOriginalExtension();
            $imageName = time() . '.' . 'mp3';

            $image_uploaded = $request->audio->move(public_path('uploads/audio'), $imageName);     
            $data['audio'] = $imageName;

        }
        if($request->hasFile('img')) {
           
            $extension = $request->img->getClientOriginalExtension();
            $imageName = time() . '.' . 'png';

            $image_uploaded = $request->img->move(public_path('uploads/img'), $imageName);     
            $data['img'] = $imageName;

        }
        //->addDays(7)
        $expiryDate = \Carbon\Carbon::now()->toDateTimeString();

        $data['expiry_date'] = $expiryDate;


        $market = Market::create($data);
        return Response::json(compact('market'));

    }
    public function getMarketTypes(){

        $types = MarketTypes::all();
        return Response::json(compact('types'));

    }
     public function getMarkets($id){

        $market = Market::withTrashed()->where('user_id',$id)->get();
        $user = User::where('id',$id)->first();
        return Response::json(compact('market','user'));

    }
    public function updateMarkets(Request $request){

        $data = $request->all();

        $data1=array();
        if($request->hasFile('pdf')) {
           
            $extension = $request->pdf->getClientOriginalExtension();
            $imageName = time() . '.' . 'pdf';
            $image_uploaded = $request->pdf->move(public_path('uploads/files'), $imageName);     
            $data['pdf'] = $imageName;
        }
        if($request->hasFile('audio')) {
            $extension = $request->audio->getClientOriginalExtension();
            $imageName = time() . '.' . 'mp3';
            $image_uploaded = $request->audio->move(public_path('uploads/audio'), $imageName);     
            $data['audio'] = $imageName;
            
        }
        if($request->hasFile('img')) {
            $extension = $request->img->getClientOriginalExtension();
            $imageName = time() . '.' . 'png';
            $image_uploaded = $request->img->move(public_path('uploads/img'), $imageName);     
            $data['img'] = $imageName;
        
        }
        
        Market::where('id',$request->id)->update($data);
        $market = Market::where('id',$request->id)->first();
       
        $status = 'true';
        return Response::json(compact('status','market'));

    }
    public function updateMarkets2(Request $request){
        $data = $request->all();
        if($request->has('color')){
            $data['color'] = $request->color;
           
        }
        if($request->has('item_quantity')){
            $data['item_quantity'] = $request->item_quantity;
            $data['status'] = 'complete';
        }
        if($request->has('total_amount')){
            $data['total_amount'] = $request->total_amount;
            
        }
         if($request->has('item_amount')){
            $data['item_amount'] = $request->item_amount;
            
        }
        if($request->has('notes')){
            $data['notes'] = $request->notes;
            
        }
		
         Market::where('id',$request->id)->update($data);
         $market = Market::where('id',$request->id)->first();
        $status = 'true';
        return Response::json(compact('status','market'));
    }
    public function getPoints(){

        $user = User::where('is_verified','yes')->get()->toArray();
        foreach($user as $key => &$value){
           $value['total_points'] = Market::where('user_id',$value['id'])->where('color','DarkGreen/Successfully Acquired & Sample left')->count('*');
        }
        foreach ($user as $key => $row) {
            $new_published[$key] = $row['total_points'];
        }
        array_multisort($new_published, SORT_DESC, $user);
        
        return Response::json(compact('user'));

    }
   
    
}
