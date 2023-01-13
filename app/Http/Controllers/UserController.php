<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    private $cars=[
        ['id' => 1, 'name' => 'Mercedes', 'origin' => 'korea'],
        ['id' => 2, 'name' => 'Honda', 'origin' => 'USA'],
        ['id' => 3, 'name' => 'Toyota', 'origin' => 'Germany'],
        ['id' => 4, 'name' => 'Chev', 'origin' => 'france'],
    ];

    public function show()
    {
    $product=$this->cars;
     return view ('about',compact('product'));}
}
