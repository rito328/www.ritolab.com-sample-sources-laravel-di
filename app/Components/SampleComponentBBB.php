<?php
declare(strict_types=1);

namespace App\Components;

use App\Services\SampleInterface;

class SampleComponentBBB implements SampleInterface
{
    public function execute(): string
    {
        return 'BBB';
    }
}
