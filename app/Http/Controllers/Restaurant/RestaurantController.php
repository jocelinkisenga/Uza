<?php

namespace App\Http\Controllers\Restaurant;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRestaurantRequest;

class RestaurantController extends Controller
{
    public function index(){
        return view("restaurant.index");
    }

    public function create()  {
        return view("restaurant.add-restaurant");
    }

    public function store(StoreRestaurantRequest $storeRestaurantRequest){
        dd($storeRestaurantRequest);
    }
}
