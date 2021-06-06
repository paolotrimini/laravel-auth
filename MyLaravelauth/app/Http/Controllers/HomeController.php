<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Car;
use App\Pilot;
use App\Brand;

class HomeController extends Controller
{
    public function home(){

        $cars = Car::all();

        return view('pages.home', compact('cars'));
    }

    public function pilot($id){

        $pilot = Pilot::findOrFail($id);

        return view('pages.pilot', compact('pilot'));
    }

    public function createCar(){

        $brands = Brand::all();

        return view('pages.new-car', compact('brands'));
    }

    public function storecar(Request $request){

        $validated = $request -> validate([
            'name' => 'required|string|min:3',
            'model' => 'required|string|min:3',
            'kw' => 'required|integer|min:10|max:3000',
        ]);

        $brand = Brand::findOrFail($request -> get('brand_id'));

        $car = Car::make($validated);

        $car -> brand() -> associate($brand);

        $car -> save();

        return redirect() -> route('home');
    }
}
