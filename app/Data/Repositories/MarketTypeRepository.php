<?php

namespace App\Data\Repositories;

use Kazmi\Data\Contracts\RepositoryContract;
use Kazmi\Data\Repositories\AbstractRepository;
use App\Data\Models\MarketType;

class MarketTypeRepository extends AbstractRepository implements RepositoryContract
{
    /**
     *
     * These will hold the instance of MarketType Class.
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
     * Example: MarketType-1
     *
     * @var string
     * @access protected
     *
     **/

    protected $_cacheKey = 'MarketType';
    protected $_cacheTotalKey = 'total-MarketType';

    public function __construct(MarketType $model)
    {
        $this->model = $model;
        $this->builder = $model;

    }
}
