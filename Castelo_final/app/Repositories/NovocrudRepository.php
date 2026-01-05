<?php

namespace App\Repositories;

use App\Models\Novocrud;
use LaravelAux\BaseRepository;

class NovocrudRepository extends BaseRepository
{
    /**
     * UserService constructor.
     *
     * @param Novocrud $model
     */
    public function __construct(Novocrud $model)
    {
        parent::__construct($model);
    }
}