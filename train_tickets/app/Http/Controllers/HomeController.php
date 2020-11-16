<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Dnsimmons\OpenWeather\OpenWeather;

class HomeController extends Controller
{
    public function index()
    {
        $weather = new OpenWeather();
        $current = $weather->getCurrentWeatherByCityName('Almaty');

        return view('home')->with('weather', $current);
    }

    public function about()
    {
        return view('about');
    }

    public function contacts()
    {
        return view('contacts');
    }
}
