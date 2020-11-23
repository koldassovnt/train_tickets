<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Dnsimmons\OpenWeather\OpenWeather;
use App\Models\City;
use App\Models\ScrapperAPI;
use App\Models\Train;
use App\Models\Ticket;

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

    public function contacts()
    {
        return view('contacts');
    }

    public function search(Request $request){

       

        $date = substr($request->departure_date , 4 , 6);
        $code_from = $request->city_from_code;
        $code_to = $request->city_to_code;

       $tickets =  ScrapperAPI::getTickets($code_from , $code_to, $date );

       $trains = Train::all();
       $cities = City::all();
    
       $params = [
        'trains' => $trains,
        'cities' => $cities,
        'tickets'=>$tickets,
        ];
           
        return view('search')->with($params);

    }
}
