<?php

namespace Salesjet\Laracms\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TestController extends Controller
{
    public function index()
    {
        echo Carbon::now()->toDateTimeString();
    }
}
