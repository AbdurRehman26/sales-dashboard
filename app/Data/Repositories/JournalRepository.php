<?php

namespace App\Data\Repositories;

use Kazmi\Data\Contracts\RepositoryContract;
use Kazmi\Data\Repositories\AbstractRepository;
use App\Data\Models\Journal;

class JournalRepository extends AbstractRepository implements RepositoryContract
{
    /**
     *
     * These will hold the instance of Journal Class.
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
     * Example: Journal-1
     *
     * @var string
     * @access protected
     *
     **/

    protected $_cacheKey = 'Journal';
    protected $_cacheTotalKey = 'total-Journal';

    public function __construct(Journal $model)
    {
        $this->model = $model;
        $this->builder = $model;

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
     
        $this->builder = $this->model->orderBy('id', 'desc');

        if(!empty($input['market_id'])){
 
            $this->builder = $this->builder->where('market_id', '=', $input['market_id']);


        }

        return parent::findByAll($pagination, $perPage, $input);

    }

}
