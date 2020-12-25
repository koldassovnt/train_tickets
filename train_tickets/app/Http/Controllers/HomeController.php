<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Dnsimmons\OpenWeather\OpenWeather;
use App\Models\City;
use App\Models\ScrapperAPI;
use App\Models\Train;
use DB;
use App\Models\Ticket;
use Mail;
use Spipu\Html2Pdf\Html2Pdf;
class HomeController extends Controller
{
    public function index()
    {
        $weather = new OpenWeather();
        //south
        $almaty = $weather->getCurrentWeatherByCityName('Almaty', 'metric');
        $shymkent = $weather->getCurrentWeatherByCityName('Shymkent', 'metric');
        $taraz = $weather->getCurrentWeatherByCityName('Taraz', 'metric');

        //north
        $astana = $weather->getCurrentWeatherByCityName('Astana','metric');
        $kokshetau = $weather->getCurrentWeatherByCityName('Kokshetau','metric');
        $qostanay = $weather->getCurrentWeatherByCityName('Qostanay','metric');

        //west
        $oral = $weather->getCurrentWeatherByCityName('Oral','metric');
        $aktau = $weather->getCurrentWeatherByCityName('Aktau','metric');
        $aktobe = $weather->getCurrentWeatherByCityName('Aqtobe','metric');

        //east
        $oskemen = $weather->getCurrentWeatherByCityName('Oskemen','metric');
        $pavlodar = $weather->getCurrentWeatherByCityName('Pavlodar','metric');
        $semey = $weather->getCurrentWeatherByCityName('Semey','metric');

        //middle
        $zhezqazghan = $weather->getCurrentWeatherByCityName('Zhezqazghan','metric');
        $qaraghandy = $weather->getCurrentWeatherByCityName('Qaraghandy','metric');
        $qyzilorda = $weather->getCurrentWeatherByCityName('Qyzylorda','metric');
        $cities = City::all();

        $params = [
            'almaty' => $almaty,
            'shymkent' => $shymkent,
            'taraz'=>$taraz,
            'astana' =>$astana,
            'kokshetau' => $kokshetau,
            'qostanay' => $qostanay,
            'oral' => $oral,
            'aktau' => $aktau,
            'aktobe' => $aktobe,
            'oskemen' => $oskemen,
            'pavlodar' => $pavlodar,
            'semey' => $semey,
            'zhezqazghan' => $zhezqazghan,
            'qaraghandy' => $qaraghandy,
            'qyzilorda' => $qyzilorda,
            'cities' => $cities
            ];
           

        return view('home')->with($params);
    }

    public function about()
    {
        return view('about');
    }

    public function mailText()
    {
        return view('emailText');
    }
    public function contacts()
    {
        return view('contacts');
    }

    public function payment(Request $request){
        if(auth()->user() == null){
            return view('Log.singIn');
        }

$ticket_id  = $request->ticket_id;
// dd(request()->all() );

$ticket = DB::table('tickets')->where(['ticket_id' => $ticket_id])->get()->first();

$current_user = auth()->user();
$params = [
    'current_user' => $current_user,
    'ticket' => $ticket
];

        return view('payment')->with($params);
    }
  
    public function search(Request $request){

     
        
        //dd( request()->all() );
        $code_from = $request->fromC;
        $code_to = $request->toC;

       

           $tickets  = DB::table('tickets')->where(
               ['departure_time' => $request->departure_date],
               ['from_city_id' =>  $code_from],
               ['to_city_id' => $code_to])->orderBy('departure_time', 'desc')->get();

           $dep_date = strtotime($request->departure_date);
           $needed_date = date('Y-m-d',$dep_date);

          $all_tickets = DB::table('tickets')->orderBy('departure_time', 'asc')->get();

          


$after_date = array();
$before_date = array();
          foreach( $all_tickets as $ticket){

            $time = strtotime($ticket->departure_time);
            $newformat = date('Y-m-d',$time);
           
            $from_city_1 =  DB::table('cities')->where(
                ['city_id' => $code_from]
            )->get()->first();
            $to_city_1 =  DB::table('cities')->where(
                ['city_id' =>  $code_to]
            )->get()->first();
            

            if(($newformat > $needed_date) && ($ticket->from_city_id == $from_city_1->city_id)){
array_push($after_date , $ticket);
            }
            else if($newformat < $needed_date && ($ticket->to_city_id == $to_city_1->city_id)){
                array_push($before_date , $ticket);
            }

          }

  $tickets = $tickets->toArray();

          usort($tickets, function($a, $b) {
            return ($a->price - $b->price) ;
    });

       $trains = Train::all();
       $cities = City::all();
    


// $tmp1 = array();
// foreach($before_date as $k => $v)
//     $tmp1[$k] = $v->departure_time;

// // Find duplicates in temporary array
// $tmp1 = array_unique($tmp1);

// // Remove the duplicates from original array
// foreach($before_date as $k => $v)
// {
//     if (!array_key_exists($k, $tmp1))
//         unset($before_date[$k]);
// }

       $params = [

           'after_date' => $after_date,
           'before_date' => $before_date,
        'trains' => $trains,
        'cities' => $cities,
        'tickets'=>$tickets,
        ];
           
        return view('search')->with($params);

    }

    public function buy(Request $request){
      $ticket_id = $request->ticket_id;
      $ticket = Ticket::find($ticket_id);
        $from_city = City::find($ticket->from_city_id);
        $to_city = City::find($ticket->to_city_id);
        $user = auth()->user();
$params = [
'ticket' => $ticket,
'from_city' => $from_city,
'to_city' => $to_city,
'user' => $user

];
  $html2pdf = new Html2Pdf('P', 'A4', 'en', true, 'UTF-8');
    $html2pdf->writeHTML
    (
      view('ticket')->with($params)
   
  );
 
    $html2pdf->Output('/Users/admin/Downloads/Ticket.pdf', 'F');
      
        $url = $request->externalURL;
        $data = array('name'=>"Traniata Comp.");
        Mail::send('emailText', $data, function($message) {
           $message->to(auth()->user()->email, auth()->user()->name)->subject
              ('Congrats! You bouth a ticket ))');
           $message->attach('/Users/admin/Downloads/Ticket.pdf');
           $message->from('ayannaimankhan@gmail.com','Traniata Team');
        });

        return redirect('/');
 
     }

  
}
