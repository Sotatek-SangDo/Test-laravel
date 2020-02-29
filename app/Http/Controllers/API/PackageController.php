<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\PackageService;

class PackageController extends Controller
{
    private $service;

    public function __construct(PackageService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $packages = $this->service->getList();

        return response()->json(['data' => $packages]);
    }
}
