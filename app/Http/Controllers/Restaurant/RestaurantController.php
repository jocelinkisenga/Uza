<?php

namespace App\Http\Controllers\Restaurant;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRestaurantRequest;
use App\Services\RestaurantService;

class RestaurantController extends Controller
{
    protected $restaurantWithMenus;
    public function __construct(public RestaurantService $service){}

    public function index(){
        return view("restaurant.index");
    }

    public function create()  {
        return view("restaurant.add-restaurant");
    }

    public function store(Request $request){
        $this->service->store($request);
        return redirect()->route("restaurant.index");
    }

    public function show(){
        $this->restaurantWithMenus = $this->service->getOndRestaurant();

        return view("restaurant.show", ["restaurant" => $this->restaurantWithMenus]);
    }
}
