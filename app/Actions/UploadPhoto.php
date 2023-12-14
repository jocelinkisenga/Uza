<?php

declare(strict_types=1);

namespace App\Actions;

use Carbon\Carbon;

class UploadPhoto {

    public function singlePhoto ($image){
        $newImageName = Carbon::now()->timestamp .'jocelin.' . $image->file('logo_path')->extension();
        $path = $image->file("logo_path")->storeAs('uploads',$newImageName,'public');
        return $newImageName;
    }

    public function multiplePhoto(){

    }
}
