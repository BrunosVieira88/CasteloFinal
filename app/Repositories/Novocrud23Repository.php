<?php

namespace App\Repositories;

use App\Models\Novocrud23;
use LaravelAux\BaseRepository;

class Novocrud23Repository extends BaseRepository
{
    /**
     * UserService constructor.
     *
     * @param Novocrud23 $model
     */
    public function __construct(Novocrud23 $model)
    {
        parent::__construct($model);
    }
}