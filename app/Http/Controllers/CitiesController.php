<?php

namespace App\Http\Controllers;

use App\Model\City;
use DemeterChain\C;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    public function index()
    {
        $cities = City::all();
        return view('cities.list', compact('cities'));
    }

    public function store(Request $request)
    {
        $cities = new City();
        $cities->name = $request->name;
        $cities->save();

        $request->session()->flash('city', 'Thêm thành phố thành công ');
        return redirect(route('city.list'));
    }

    public function delete(Request $request, $id)
    {
        $city = City::findOrFail($id)->delete();
        return redirect(route('city.list'));
    }

    public function formAdd($id)
    {
        $city = City::findOrFail($id);
        return view('cities.add',
            [
                'city' => $city,
                'id' => $id
            ]);
    }

    public function update(Request $request, $id) {
        $city = City::where('id', $id)->update([
           'name' => $request->input('name')
        ]);

        return redirect(route('city.list'));
        aaaaas
    }
}
