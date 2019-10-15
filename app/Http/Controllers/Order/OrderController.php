<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;

class OrderController extends BaseController
{
    public function index()
    {
        return view('ordering.index');
    }
}
