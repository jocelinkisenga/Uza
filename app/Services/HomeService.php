<?php

declare(strict_types=1);

namespace App\Services;

use App\Actions\FrontAllRestaurant;

class HomeService {

    public function __construct(public FrontAllRestaurant $frontAllRestaurant){

    }

    public function getAllFrontRestaurant(){
        return $this->frontAllRestaurant->handler();
    }
}
