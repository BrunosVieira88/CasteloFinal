<?php

namespace App\Services;

use App\Repositories\Novocrud23Repository;
use LaravelAux\BaseService;

class Novocrud23Service extends BaseService
{
    /**
     * UserService constructor.
     *
     * @param Novocrud23Repository $repository
     */
    public function __construct(Novocrud23Repository $repository)
    {
        parent::__construct($repository);
    }
}