<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\SampleService;

class SampleController extends Controller
{
    protected $SampleService;

    public function __construct(SampleService $SampleService)
    {
        $this->SampleService = $SampleService;
    }

    public function index()
    {
        $this->SampleService->index();
    }
}
