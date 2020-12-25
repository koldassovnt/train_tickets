<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
use DB;  

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user() == null){
            return View("403");
        }
        if (auth()->user()->is_admin != true) {
            return View("403");
        }
        $cities = City::all();
        return view('admin.cities')->with('cities', $cities);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name'=>'required',
            'code'=>'required',
        ]);

        $city = new City([
            'city_name' => $request->get('name'),
            'city_code' => $request->get('code')
        ]);

        $city->save();
        return redirect('/admin-cities')->with('success', 'City saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $city_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'code'=>'required',
        ]);

        $city = City::find($id);
        $city->city_name =  $request->get('name');
        $city->city_code =  $request->get('code');
        $city->save();
        return redirect('/admin-cities')->with('success', 'City updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $city = DB::table('cities')->where('city_id',$id)->delete();

        return redirect('/admin-cities');
    }
}
