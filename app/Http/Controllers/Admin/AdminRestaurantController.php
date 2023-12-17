<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\AdminRestaurantService;
use Illuminate\Http\Request;

class AdminRestaurantController extends Controller
{
    public  $restaurants;

    public function __construct(public AdminRestaurantService $service){}
    public function index(){
        $this->restaurants = $this->service->getAllRestaurants();
        return view("admin.list-restaurant", ["restaurants" => $this->restaurants]);
    }

    public function unactivate(int $restaurantId){
        $this->service->unactivateRestaurant($restaurantId);
        return redirect()->back();
    }

    public function activate(int $restaurantId){
        $this->service->activateRestaurant($restaurantId);
        return redirect()->back();
    }
}
