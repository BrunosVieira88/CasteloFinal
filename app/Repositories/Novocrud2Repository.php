<?php

namespace App\Repositories;

use App\Models\Novocrud2;
use LaravelAux\BaseRepository;

class Novocrud2Repository extends BaseRepository
{
    /**
     * UserService constructor.
     *
     * @param Novocrud2 $model
     */
    public function __construct(Novocrud2 $model)
    {
        parent::__construct($model);
    }
}