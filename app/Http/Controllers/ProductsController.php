<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index($category = null)
    {
        if ($category == 'food-beverage') {
            return view('food_beverages');
        } elseif ($category == 'beauty-health') {
            return view('beauty_health');
        } elseif ($category == 'home-care') {
            return view('home_care');
        } elseif ($category == 'baby-kid') {
            return view('baby_kid');
        } else {
            return 'maaf, tidak ada kategori tersebut';
        }
    }
}
