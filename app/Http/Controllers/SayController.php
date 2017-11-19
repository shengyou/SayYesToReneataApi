<?php

namespace App\Http\Controllers;

use App\Contracts\SayYesToReneataContract;
use Illuminate\Http\Request;

class SayController extends Controller
{
    /**
     * @var SayYesToReneataContract
     */
    private $service;

    public function __construct(SayYesToReneataContract $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $url = $this->service->answer();

        return response()->json([
            'url' => $url,
        ]);
    }
}
