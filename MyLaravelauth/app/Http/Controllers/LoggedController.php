<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Car;
use App\Brand;
use App\Pilot;

class LoggedController extends Controller
{
    public function __construct() {

        $this -> middleware('auth');
    }

    public function edit($id){

        $car = Car::findOrFail($id);
        $brands = Brand::all();
        $pilots = Pilot::all();

        return view('pages.edit-car', compact('car', 'brands', 'pilots'));
    }

    public function update(Request $request, $id){

        $validated = $request -> validate([
            'name' => 'required|string|min:3',
            'model' => 'required|string|min:3',
            'kw' => 'required|integer|min:10|max:3000',
        ]);
        $car = Car::findOrFail($id);
        $car -> update($validated);

        $car -> brand() -> associate($request -> brand_id);
        $car -> save();

        $car -> pilots() -> sync($request -> pilots_id);

        return redirect() -> route('home');
    }
}
