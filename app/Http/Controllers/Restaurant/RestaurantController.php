<?php

namespace App\Http\Controllers\Restaurant;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRestaurantRequest;
use App\Services\RestaurantService;

class RestaurantController extends Controller
{
    public function __construct(public RestaurantService $restaurantService){}

    public function index(){
        return view("restaurant.index");
    }

    public function create()  {
        return view("restaurant.add-restaurant");
    }

    public function store(Request $request){
        $this->restaurantService->store($request);

        return redirect()->route("restaurant.index");
    }
}
