<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add() {
        Cart::add(array(
            'id' => 456,
            'name' => 'Exemple voyage',
            'price' => '677.99',
            'quantity' => 1,
            'attributes' => array()
        ));
    }

    public function index() {

    }
}
