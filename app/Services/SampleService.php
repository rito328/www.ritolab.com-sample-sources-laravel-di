<?php
declare(strict_types=1);

namespace App\Services;

class SampleService
{
    protected $SampleComponent;

    public function __construct(SampleInterface $SampleComponent)
    {
        $this->SampleComponent = $SampleComponent;
    }

    public function index()
    {
        return  $this->SampleComponent->execute();
    }
}
