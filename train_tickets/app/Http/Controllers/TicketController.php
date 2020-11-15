<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;
use App\Models\City;
use App\Models\Ticket;
use DB;  

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $trains = Train::all();
        $cities = City::all();
        $ticket = Ticket::all();

        $params = [
            'trains' => $trains,
            'cities' => $cities,
            'ticket'=>$ticket,
            ];

        return view('admin.tickets')->with($params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $request->validate([
            'from_city_id'=>'required',
            'to_city_id' => 'required',
            'price' => 'required',
            'train_id' => 'required',
            'departure_time' => 'required',
            'arrival_time' => 'required',
            'path_time' => 'required',
        ]);

        $ticket = new Ticket([
            'from_city_id' => (int)$request->get('from_city_id'),
            'to_city_id' => (int)$request->get('to_city_id'),
            'price' => (int)$request->get('price'),
            'train_id' => (int)$request->get('train_id'),
            'departure_time' => $request->get('departure_time'),
            'arrival_time' => $request->get('arrival_time'),
            'path_time' => $request->get('path_time'),
        ]);

        $ticket->save();
        return redirect('/admin-tickets')->with('success', 'Ticket saved!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
