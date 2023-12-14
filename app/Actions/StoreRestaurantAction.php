<?php

declare(strict_types=1);

namespace App\Actions;

use App\Models\Restaurant;
use Illuminate\Support\Facades\Auth;

class StoreRestaurantAction {

    private ?string $newImageName;

    public function __construct(public UploadPhoto $uploadPhoto){

    }

    public function handler( $data){
       $this->newImageName = $this->uploadPhoto->singlePhoto($data);

       Restaurant::create([
            "user_id" => Auth::user()->id,
            "name" => $data->name,
            "description" => $data->description,
            "logo_photo" => $this->newImageName,
            "status" => 1
       ]);
    }


}
