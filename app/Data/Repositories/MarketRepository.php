<?php

namespace App\Data\Repositories;

use Kazmi\Data\Contracts\RepositoryContract;
use Kazmi\Data\Repositories\AbstractRepository;
use App\Data\Models\Market;

class MarketRepository extends AbstractRepository implements RepositoryContract
{
    /**
     *
     * These will hold the instance of Market Class.
     *
     * @var object
     * @access public
     *
     **/
    public $model;

    /**
     *
     * This is the prefix of the cache key to which the
     * App\Data\Repositories data will be stored
     * App\Data\Repositories Auto incremented Id will be append to it
     *
     * Example: Market-1
     *
     * @var string
     * @access protected
     *
     **/

    protected $_cacheKey = 'Market';
    protected $_cacheTotalKey = 'total-Market';

    public function __construct(Market $model)
    {
        $this->model = $model;
        $this->builder = $model;
    }

        /**
     *
     * This method will fetch single model
     * and will return output back to client as json
     *
     * @access public
     * @param $id
     * @param bool $refresh
     * @param bool $details
     * @param bool $encode
     * @return mixed
     *
     * @author Usaama Effendi <usaamaeffendi@gmail.com>
     *
     */
    public function findById($id, $refresh = false, $details = false, $encode = true)
    {

        $data = parent::findById($id, $refresh, $details, $encode);
        $data->formatted_created_at = \Carbon\Carbon::parse($data->created_at)->diffForHumans();
        $data->username = $data->user_id ? app('UserRepository')->findById($data->user_id)->name : '';

        $data->market_type_name = $data->market_type ? app('MarketTypeRepository')->findById($data->market_type)->name : '';

        return $data;
    }


        /**
     *
     * This method will fetch all exsiting models
     * and will return output back to client as json
     *
     * @access public
     * @return mixed
     *
     * @author Usaama Effendi <usaamaeffendi@gmail.com>
     *
     **/
    public function findByAll($pagination = false, $perPage = 10, array $input = [] ) {
     
        $this->builder = $this->model->withTrashed();

        if(!empty($input['to_import'])){
 
            $this->builder = $this->builder->whereNull('user_id');


        }


        if(!request()->user()->user_type){

            $this->builder = $this->model->where('user_id', request()->user()->id);
        
        }

        return parent::findByAll($pagination, $perPage, $input);

    }



    public function sendFcm($data)
    {

          define( 'API_ACCESS_KEY', 'AAAAcdFMlcs:APA91bE3dmHng_0Hzb-tjDpCwT_76HwOsc9Gm4oMGCRnZFl1CyhujTjQCvr8IXa9LppLFpDjxJo8f1RBImp0TzowRLICe-uT3MyFlZdf9a4yFLcczOFIYDMBJgufV6ytVbTiyylzl8ae' );
                    
                
                    #prep the bundle
                     $msg = array
                          (
                           'body'   => 'Body  Of Notification',
                                    'title' => $data->heading,
                                    'body' => $data->content,
                                   
                                    
                                    'icon'  => 'myicon',/*Default Icon*/
                                    'sound' => 'mySound'/*Default sound*/
                                  
                          );
          
       
      
                    $fields = array
                        (
                            'to' => '/topics/test',
                            'notification'  => $data->msg,
                            'data' => array('body' => array($data->msg),'sound' => 'default')
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
                    


    }
}
