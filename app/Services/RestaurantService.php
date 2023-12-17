<?php

declare(strict_types=1);

namespace App\Services;

use App\Actions\StoreRestaurantAction;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Auth;

class RestaurantService {

    protected ?int $userId = Auth::user()->id;
    public function __construct(public StoreRestaurantAction $storeRestaurantAction){}

    public function getOndRestaurant() {
        return Restaurant::whereUserId($this->userId)->with("menus")->get();
    }

    public function store($data){
            $this->storeRestaurantAction->handler($data);
    }

}
