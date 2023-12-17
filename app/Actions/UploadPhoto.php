<?php

declare(strict_types=1);

namespace App\Actions;

use Carbon\Carbon;

class UploadPhoto {

    protected ?string $newImageName ;

    public function singlePhoto ($image){
        $this->newImageName = Carbon::now()->timestamp .'jocelin.' . $image->file('logo_path')->extension();
        $path = $image->file("logo_path")->storeAs('uploads',$newImageName,'public');
        return $this->newImageName;
    }

    public function multiplePhoto(){

    }
}
