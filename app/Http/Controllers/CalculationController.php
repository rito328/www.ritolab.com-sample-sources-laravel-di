<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Components\Calculation;

class CalculationController extends Controller
{
    protected $Calculation;

    public function __construct(Calculation $Calculation)
    {
        $this->Calculation = $Calculation;
    }

    public function index()
    {
        $result = [
            'add' =>  $this->Calculation->add(1, 1),
            'sub' =>  $this->Calculation->sub(2, 1),
            'mul' =>  $this->Calculation->mul(3, 2),
            'div' =>  $this->Calculation->div(4, 2),
        ];

        print_r($result);
        // => Array
        //  (
        //    [add] => 2
        //    [sub] => 1
        //    [mul] => 6
        //    [div] => 2
        //  )
    }
}
