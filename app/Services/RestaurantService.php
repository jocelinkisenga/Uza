<?php

declare(strict_types=1);

namespace App\Services;

use App\Actions\StoreRestaurantAction;

class RestaurantService {

 public function __construct(public StoreRestaurantAction $storeRestaurantAction) {}


 public function store($data){
    $this->storeRestaurantAction->handler($data);
 }

}
