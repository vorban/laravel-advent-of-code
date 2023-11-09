<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        dd('homepage');
    }

    public function solve(int $year, int $day, string $env)
    {
        dd(`Solution for year {$year}, day {$day}, {$env} environment`);
    }
}
