<?php
declare(strict_types=1);

namespace App\Components;

class Calculation
{
    // 加算
    public function add(int $arg1, int $arg2): int
    {
        return $arg1 + $arg2;
    }

    // 減算
    public function sub(int $arg1, int $arg2): int
    {
        return $arg1 - $arg2;
    }

    // 乗算
    public function mul(int $arg1, int $arg2): int
    {
        return $arg1 * $arg2;
    }

    // 除算
    public function div(int $arg1, int $arg2): float
    {
        return $arg1 / $arg2;
    }
}
