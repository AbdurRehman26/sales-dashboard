<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use App\Market;

use Image;

class MarketController extends Controller
{
    public function indeX(){

        $users = User::where('user_type','!=',2)->count();
        return view('admin.dashboard',compact('users'));

    }
    public function users(){

        $users = User::where('user_type','!=',2)->get();
        return view('admin.manage_users',compact('users'));

    }
    public function addUser(){

        
        return view('admin.create_user');

    }

    protected function validator(array $data)
    {
        return Validator::make($data, [

            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'mobile_number' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|min:6' ,
            
        ]);
    }

    public function createUser(Request $request){

        $data = $request->all();
     
        $user_validator = Validator::make($request->all(), [

            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'mobile_number' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|min:6' ,
                
        ]);
        
        if ($user_validator->fails()) {

            $messages = $user_validator->messages();
            return back()->withError($messages)->with('error_message', "Treatment Comment is required");
        
        }
       
        
            if($request->hasFile('user_photo')) {
           
                $extension = $request->user_photo->getClientOriginalExtension();
                $imageName = time() . '.' . $extension;

                $image_uploaded = $request->user_photo->move(public_path('uploads/user/images'), $imageName);
         
                    
                $data['user_photo'] = $imageName;

            }
            if($request->hasFile('company_logo')) {

                $imageName = time() . '.' . $request->company_logo->getClientOriginalExtension();
                //echo $imageName;exit;
                $image_uploaded = $request->company_logo->move(public_path('uploads/company/images'), $imageName);

                    
                $data['company_logo'] = $imageName;

            }

            $data['password'] = bcrypt($data['password']);
            $user = User::create($data);
        
          
            //Session::flash('message', 'We have sent you a verification email!');
            return redirect()->to('/admin/users')->with('success', 'New User Added Successfully!');
      
    }
    public function updateUser(Request $request,$user_id){

        $data = $request->all();
        $user_exist = User::where('id',$user_id)->first();

        if($user_exist){

             if($request->hasFile('user_photo')) {
           
                $extension = $request->user_photo->getClientOriginalExtension();
                $imageName = time() . '.' . $extension;

                $image_uploaded = $request->user_photo->move(public_path('uploads/user/images'), $imageName);
         
                $data['user_photo'] = $imageName;
                $image_path = public_path("/uploads/user/images/".$user_exist->user_photo);  // Value is not URL but directory file path
                if(File::exists($image_path)) {
                    File::delete($image_path);
                }

            }
            if($request->hasFile('company_logo')) {

                $imageName = time() . '.' . $request->company_logo->getClientOriginalExtension();
                //echo $imageName;exit;
                $image_uploaded = $request->company_logo->move(public_path('uploads/company/images'), $imageName);

                    
                $data['company_logo'] = $imageName;
                $image_path = public_path("/uploads/company/images/".$user_exist->company_logo);  // Value is not URL but directory file path
                if(File::exists($image_path)) {
                    File::delete($image_path);
                }

            }

            $user=$user_exist->update($data);
            return redirect()->to('/admin/users')->with('success','User Updated Succeddfully!');

        }

    }

    public function editUser($user_id){

        $user = User::where('id',$user_id)->first();
        return view('admin.edit_user',compact('user'));

    }

    public function editUserStatus($user_id,$status){

        $user = User::where('id',$user_id)->first(); 
       
            if($status == 'yes'){
                $user->is_verified = 'yes';
                $user->save();
                return $status;
            }
            else if($status == 'no'){
                //return 0;
                $user->is_verified = 'no';
                $user->save();
                return $status;
        
        }
    }
    public function deleteUser($user_id){

        $user = User::where('id',$user_id)->delete();
        return back()->with('success','User Deleted Successfully!');
    }
    public function userDetail($user_id){

        $user = User::where('id',$user_id)->first();
        $products = Product::where('merchant_id',$user_id)->get();
        $product_images = ProductImages::all();

        return view('admin.user_datails',compact('user','products','product_images'));

    }

    public function addCategory(){

        return view('admin.create_category');

    }

    public function createCategory(Request $request){

        $data = $request->all();
   
        if($request->hasFile('icon')) {
           
            $extension = $request->icon->getClientOriginalExtension();
            $imageName = time() . '.' . $extension;

            $image_uploaded = $request->icon->move(public_path('uploads/category'), $imageName);
            
            $data['icon'] = $imageName;

        }
         
            $user = Categories::create($data);
            //Session::flash('message', 'We have sent you a verification email!');
            return redirect()->to('/admin/categories')->with('success', 'New Category Added Successfully!');
      
    }

    public function categories(){

        $categories = Categories::all();
        return view('admin.manage_categories',compact('categories'));
    }

    public function editCategory($category_id){

        $category = Categories::where('id',$category_id)->first();

        return view('admin.edit_category',compact('category'));
    }

    public function updateCategory(Request $request , $category_id){

        $data = $request->all();
        $category_exist = Categories::where('id',$category_id)->first();

        if($category_exist){

             if($request->hasFile('icon')) {
           
                $extension = $request->icon->getClientOriginalExtension();
                $imageName = time() . '.' . $extension;

                $image_uploaded = $request->icon->move(public_path('uploads/category'), $imageName);
         
                $data['icon'] = $imageName;
                $image_path = public_path("/uploads/category".$category_exist->icon);  // Value is not URL but directory file path
                if(File::exists($image_path)) {
                    File::delete($image_path);
                }

            }

            $user=$category_exist->update($data);
            return redirect()->to('/admin/categories')->with('success','Category Updated Succeddfully!');

        }

    }

    public function deleteCategory($category_id){


        $category = Categories::where('id',$category_id)->delete();
  return redirect()->to('/admin/categories')->with('success', 'Category Deleted Successfully!');
      
    }

    public function addProduct($merchant_id){

        return view('admin.add_product',compact('merchant_id'));

    }

    public function InserProduct(Request $request , $merchant_id){

         //return $request;
        if(!$request->has('fileUpload')){
            return back()->with('error','Please Select Atleast One Image!');
        }
        $data = $request->all();
       
        $user = \Auth::user();
        $data['added_by'] = $user->id;
        $data['merchant_id'] = $merchant_id;

        $product = Product::create($data)->id;

        if($request->has('fileUpload')){

            for($i=0;$i<sizeof($data['fileUpload']);$i++){

                $filenamewithextension = $data['fileUpload'][$i]->getClientOriginalName();
                //get filename without extension
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
                //get file extension
                $extension = $data['fileUpload'][$i]->getClientOriginalExtension();

                $filenametostore = $filename.'_'.time().'.'.$extension;
		        $filePath = public_path('uploads/products');
                
                $thumb_img = Image::make($data['fileUpload'][$i]->getRealPath());
                $thumb_img->save($filePath .'/'.$filenametostore , 80);
                //medium thumbnail name
                $mediumthumbnail = $filename.'_medium_'.time().'.'.$extension;

                $data1['product_image'] = $filenametostore;
                $data1['product_thumbnail'] = $mediumthumbnail;
            
                //create medium thumbnail
                $mediumthumbnailpath = public_path('uploads/products/thumbnail');
                //$this->createThumbnail($mediumthumbnailpath, 300, 300);
                $thumb_img = Image::make($data['fileUpload'][$i]->getRealPath())->resize(200, 300);
                $thumb_img->save($mediumthumbnailpath.'/'.$mediumthumbnail,80);

                $data1['merchant_id'] = $merchant_id;
                $data1['product_id'] = $product;

                $fabric_image = ProductImages::create($data1);

            }
            
        }
        
        return back()->with('success','Product Added Successfully!');

    }

    public function productDetails($product_id){

        $product = Product::where('id',$product_id)->first();
       
        $product_images = ProductImages::where('product_id',$product_id)->get();

        return view('admin.product_details',compact('product','product_images'));

    }
    public function showPdf($id){
        $market = Market::findOrFail($id); 
      
        $file1 = public_path() . "/uploads/files/" . $market->pdf;

        $headers = array(
            'Content-Type: application/pdf',
        );

        return \Response::download($file1, 'file.pdf', $headers);
        
        
    }
    public function showAudio($id){
        $market = Market::findOrFail($id); 
        
        $marketpath=public_path() .'/uploads/audio/'.$market->audio;
        
            
        	
         $headers = array(
            'Content-Type: application/audio',
        );

        return \Response::download($marketpath, 'file.mp3', $headers); 
        
    }
     public function showImg($id){
         
        
        $marketpath=public_path() .'/uploads/img/'.$id;
        
            
        	
         $headers = array(
            'Content-Type: application/png',
        );

        return \Response::download($marketpath, 'file.png', $headers); 
        
    }
    public function fcmView(){
        return view('admin.create_category');
    }
     public function fcm(Request $request){
          define( 'API_ACCESS_KEY', 'AAAAcdFMlcs:APA91bE3dmHng_0Hzb-tjDpCwT_76HwOsc9Gm4oMGCRnZFl1CyhujTjQCvr8IXa9LppLFpDjxJo8f1RBImp0TzowRLICe-uT3MyFlZdf9a4yFLcczOFIYDMBJgufV6ytVbTiyylzl8ae' );
                
                    #prep the bundle
                     $msg = array
                          (
                           'body'   => 'Body  Of Notification',
                                    'title' => $request->heading,
                                    'body' => $request->content,
                                   
                                    
                                    'icon'  => 'myicon',//Default Icon/
                                    'sound' => 'mySound'//Default sound/
                                  
                          );
          
       
      
                    $fields = array
                        (
                            'to' => '/topics/test',
                            'notification'  => $msg,
                            'data' => array('body' => array($msg),'sound' => 'default')
                        );
            
    
                    $headers = array
                        (
                            'Authorization: key=' . API_ACCESS_KEY,
                            'Content-Type: application/json'
                        );
                        
                    #Send Reponse To FireBase Server
                     
                    $ch = curl_init();
                    curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
                    curl_setopt( $ch,CURLOPT_POST, true );
                    curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
                    curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
                    curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
                    
                    
                    curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
                    $result = curl_exec($ch );
                    curl_close( $ch );
                    #Echo Result Of FireBase Server
                 
         
         return view('admin.create_category');
    }

    public function assign(Request $request)
    {
        \App\Market::whereNull('user_id')->update(['user_id' => $request->user_id]);

        return redirect('admin/market');

    }
}
