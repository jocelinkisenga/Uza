<?php

declare(strict_types=1);

namespace App\Services;
use App\Models\Restaurant;

class AdminRestaurantService {

    protected $restaurant;


    public function getAllRestaurants(){
        return Restaurant::latest()->with("user")->get();
    }

    public function unactivateRestaurant(?int $id){
            $this->restaurant = Restaurant::find($id);
            $this->restaurant->update([
                "status" => 0
            ]);
    }

    public function activateRestaurant(?int $id){
        $this->restaurant = Restaurant::find($id);
        $this->restaurant->update([
            "status" => 1
        ]);
}
}
