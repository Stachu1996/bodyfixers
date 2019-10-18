<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\BaseController;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends BaseController
{
    public function __construct()
    {
        Cart::add('231aa', 'Product 1', 2, 1);
        //Cart::store('username');
        //Cart::add('293ad', 'Product 1', 1, 999, ['size' => 'large']);
        //Cart::add('293ab', 'Product 1', 1, 999, ['size' => 'large']);
    }

    public function getCart()
    {
        dd( Cart::content()->all() );
    }
}
