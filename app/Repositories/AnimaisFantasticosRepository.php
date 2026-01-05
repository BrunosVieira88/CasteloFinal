<?php

namespace App\Repositories;

use App\Models\AnimaisFantasticos;
use LaravelAux\BaseRepository;

class AnimaisFantasticosRepository extends BaseRepository
{
    /**
     * UserService constructor.
     *
     * @param AnimaisFantasticos $model
     */
    public function __construct(AnimaisFantasticos $model)
    {
        parent::__construct($model);
    }
}