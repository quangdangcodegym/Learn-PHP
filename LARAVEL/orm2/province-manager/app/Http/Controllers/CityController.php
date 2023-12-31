<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::all();
        dd($cities[0]->customers);
        // return view('cities.list', compact('cities'));
    }

    public function create()
    {
        return view('cities.create');
    }

    public function store(Request $request)
    {
        $city = new City();
        $city->name = $request->input('name');
        $city->save();
        Session::flash('success', 'Thêm mới tỉnh thành thành công');
        return redirect()->route('cities.index');
    }

    public function edit($id)
    {
        $city = City::findOrFail($id);
        return view('cities.edit', compact('city'));
    }

    public function update(Request $request, $id)
    {
        $city = City::findOrFail($id);
        $city->name = $request->input('name');
        $city->save();
        Session::flash('success', 'Cập nhật tỉnh thành thành công');
        return redirect()->route('cities.index');
    }

    public function destroy($id)
    {
        $city = City::findOrFail($id);
        $city->customers()->delete();
        $city->delete();
        Session::flash('success', 'Xóa tỉnh thành thành công');
        return redirect()->route('cities.index');
    }
}
