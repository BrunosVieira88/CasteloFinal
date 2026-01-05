<?php

namespace App\Services;

use App\Repositories\Novocrud2Repository;
use LaravelAux\BaseService;

class Novocrud2Service extends BaseService
{
    /**
     * UserService constructor.
     *
     * @param Novocrud2Repository $repository
     */
    public function __construct(Novocrud2Repository $repository)
    {
        parent::__construct($repository);
    }
}