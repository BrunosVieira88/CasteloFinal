<?php

namespace App\Services;

use App\Repositories\Novocrud4Repository;
use LaravelAux\BaseService;

class Novocrud4Service extends BaseService
{
    /**
     * UserService constructor.
     *
     * @param Novocrud4Repository $repository
     */
    public function __construct(Novocrud4Repository $repository)
    {
        parent::__construct($repository);
    }
}