<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Car;

class GuestController extends Controller
{
    public function home(){

        $cars = Car::all();

        return view('pages.home', compact('cars'));
    }

    public function test(){

        return view('home');
    }


}
