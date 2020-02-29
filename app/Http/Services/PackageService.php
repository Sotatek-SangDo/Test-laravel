<?php

namespace App\Http\Services;

use App\Package;

class PackageService
{
    private $model;

    public function __construct(Package $model)
    {
        $this->model = $model;
    }

    public function getList()
    {
        return $this->model->with(['detail'])->get();
    }
}
