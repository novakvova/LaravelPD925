<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function Index(Request $request)
    {
        $cars = Car::query()->get();
        //dd($cars);
        dd($cars[0]->CarImages);
    }
    public function Create(Request $request)
    {
        return view("cars.create");
    }

    public function Store(Request $request)
    {
        $files = $request->file('images');

        if($request->hasFile('images'))
        {
            foreach ($files as $file) {
                //$file
//                $file->store('images\\'.uniqid().$file);
                $fileName = 'profile-'.uniqid().'.'.$file->getClientOriginalExtension();

                // Save the file
                $path = $file->storeAs('public\files', $fileName);
                dd($path);
            }
        }
        dd($request);
        return view("cars.create");
    }
}
