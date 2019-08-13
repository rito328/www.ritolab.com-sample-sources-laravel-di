<?php
declare(strict_types=1);

namespace App\Components;

use App\Services\SampleInterface;

class SampleComponentAAA implements SampleInterface
{
    public function execute(): string
    {
        return 'AAA';
    }
}
