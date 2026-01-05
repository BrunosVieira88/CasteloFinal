<?php

namespace App\Repositories;

use App\Models\Novocrud4;
use LaravelAux\BaseRepository;

class Novocrud4Repository extends BaseRepository
{
    /**
     * UserService constructor.
     *
     * @param Novocrud4 $model
     */
    public function __construct(Novocrud4 $model)
    {
        parent::__construct($model);
    }
}