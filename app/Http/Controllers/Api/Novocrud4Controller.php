<?php

namespace App\Http\Controllers\Api;

use App\Services\Novocrud4Service;
use App\Http\Requests\Novocrud4Request;
use LaravelAux\BaseController;

class Novocrud4Controller extends BaseController
{
    /**
     * UserController constructor.
     *
     * @param Novocrud4Service $service
     * @param Novocrud4Request $request
     */
    public function __construct(Novocrud4Service $service)
    {
        parent::__construct($service, new Novocrud4Request);
    }
}