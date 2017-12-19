<?php

namespace App\Http\Controllers;
use App\Cuisine;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function menus()
    {
        $menus=Cuisine::all();
        return view('user.food',compact('menus'));
    }
}
