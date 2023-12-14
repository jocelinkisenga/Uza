<?php

namespace App\Http\Controllers;

use App\Services\HomeService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(public HomeService $homeService){}
    public function index(){
        $restaurants = $this->homeService->getAllFrontRestaurant();

        return view("frontend.index",compact("restaurants"));
    }
}
