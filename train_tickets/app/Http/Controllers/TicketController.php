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
        $tickets = Ticket::all();

        $params = [
            'trains' => $trains,
            'cities' => $cities,
            'tickets'=>$tickets,
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
            'from_city_id'=>'required',
            'to_city_id' => 'required',
            'price' => 'required',
            'train_id' => 'required',
            'departure_time' => 'required',
            'arrival_time' => 'required',
            'path_time' => 'required',
        ]);

        // $train = Train::find($request->get('train_id'));
        // $toCity = City::find($request->get('to_city_id'));
        // $fromCity = City::find($request->get('from_city_id'));

        $ticket = new Ticket([
            'from_city_id'=> $request->get('from_city_id'),
            'to_city_id' => $request->get('to_city_id'),
            'price' => $request->get('price'),
            'departure_time' => $request->get('departure_time'),
            'arrival_time' => $request->get('arrival_time'),
            'path_time' => $request->get('path_time'),
            'train_id' => $request->get('train_id')
        ]);

        // $toCity->toCity()->save($toCity);
        // $fromCity->fromCity()->save($fromCity);
        // // $ticket->toCity()->save($toCity);
        // // $ticket->fromCity()->save($fromCity);

        // $train->tickets()->save($ticket);

        $ticket->save();

        return redirect('/admin-tickets')->with('success', 'Ticket saved!');
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
        $request->validate([
            'from_city_id'=>'required',
            'to_city_id' => 'required',
            'price' => 'required',
            'train_id' => 'required',
            'departure_time' => 'required',
            'arrival_time' => 'required',
            'path_time' => 'required',
        ]);

        $ticket = Ticket::find($id);
        $ticket->from_city_id =  $request->get('from_city_id');
        $ticket->to_city_id = $request->get('to_city_id');
        $ticket->price = $request->get('price');
        $ticket->train_id = $request->get('train_id');
        $ticket->departure_time = $request->get('departure_time');
        $ticket->arrival_time = $request->get('arrival_time');
        $ticket->path_time = $request->get('path_time');

        $ticket->save();
        return redirect('/admin-tickets')->with('success', 'Ticket updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $train = DB::table('tickets')->where('ticket_id',$id)->delete();

        return redirect('/admin-tickets');
    }
}
