<?php

declare(strict_types=1);

namespace App\Actions;

use App\Models\Restaurant;

class FrontAllRestaurant {
    public function handler(){
        return Restaurant::latest()->whereStatus(1)->limit(10)->get();
    }
}
