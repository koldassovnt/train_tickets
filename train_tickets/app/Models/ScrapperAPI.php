<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ticket;
use App\Models\City;
use DB; 
class ScrapperAPI extends Model
{
    use HasFactory;

   static function getTickets($fcity , $scity , $date ){

        $ch = curl_init();
        curl_setopt($ch , CURLOPT_URL , "https://rasp.yandex.kz/search/train/?fromId=$fcity&fromName=%D0%9D%D1%83%D1%80-%D0%A1%D1%83%D0%BB%D1%82%D0%B0%D0%BD+%28%D0%90%D1%81%D1%82%D0%B0%D0%BD%D0%B0%29&toId=$scity&toName=%D0%90%D0%BB%D0%BC%D0%B0%D1%82%D1%8B&when=$date");
        curl_setopt($ch , CURLOPT_RETURNTRANSFER , true);
        $tickets = array();
        $html = curl_exec($ch);
        
        $dom = new \DOMDocument();
        @ $dom -> loadHTML($html);
        function getElementsByClassName($dom, $ClassName, $tagName=null) {
            if($tagName){
                $Elements = $dom->getElementsByTagName($tagName);
            }else {
                $Elements = $dom->getElementsByTagName("*");
            }
            $Matched = array();
            for($i=0;$i<$Elements->length;$i++) {
                if($Elements->item($i)->attributes->getNamedItem('class')){
                    if($Elements->item($i)->attributes->getNamedItem('class')->nodeValue == $ClassName) {
                        $Matched[]=$Elements->item($i);
                    }
                }
            }
            return $Matched;
        }
        $spans = $dom->getElementsByTagName('h3');
        
        $spans_array = array();
        for ($i = 0 ; $i < sizeof($spans) ; $i++){
            $text = $spans[$i]->textContent;
            $spans_array = $text;
            $ticket = new Ticket();

            $Fcity =  DB::table('cities')
            ->select('city_id')
            ->where('city_code', '=', $fcity)
            ->get();

            $Scity =  DB::table('cities')
            ->select('city_id')
            ->where('city_code', '=', $scity)
            ->get();

            $ticket->from_city_id = $Fcity;

            $ticket->to_city_id = $Scity;

            array_push($tickets , $ticket);
        }
        
        // $elementsByClass = getElementsByClassName($dom, "SegmentTransport__item SegmentTransport__item_deluxeTrain", 'span');
        // $elems_array = array();
        //  for ($i = 0 ; $i < sizeof($spans) ; $i++){
            
        //     if($elementsByClass[$i]->textContent != "" || $elementsByClass[$i]->textContent != null){
        //         $text = $elementsByClass[$i]->textContent;
        //         $train = DB::table('trains')
        //         ->select('train_id')
        //         ->where('train_name', '=', utf8_decode($text))
        //         ->get();
        //         if($train == null){

        //             $new_train = new Train([
        //                 'train_name' => utf8_decode($text)
        //             ]);
            
        //             $new_train->save();

        //             $tickets[$i]->train_id = $new_train->train_id;
        //         }
        //         else{
        //             $tickets[$i]->train_id = $train;
        //         }

                
        //     }
        //     else{

        //         $ticket[$i]->train_id = 1;

        //     }
            

            
        // }
     
        $times = getElementsByClassName($dom, "SearchSegment__time", 'span');
        $times_array = array();
        for ($i = 0 ; $i < sizeof($times) ; $i+=2){
            $time1 =  $times[$i]->textContent;
            $time2 = $times[$i+1]->textContent;
            $tickets[$i]->departure_time = $time1;
            $tickets[$i]->arrival_time = $time2;
           
        }
        $durations = getElementsByClassName($dom, "SearchSegment__duration", 'div');
        $durations_array = array();
        for ($i = 0 ; $i < sizeof($durations) ; $i++){
            $text = $durations[$i]->textContent;
           $tickets[$i]->path_time = $text;
           
        }

        return $tickets;


    }
}