<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScrapperAPI extends Model
{
    use HasFactory;

    function getTickets($fcity , $scity , $date ){

        $ch = curl_init();
        curl_setopt($ch , CURLOPT_URL , "https://rasp.yandex.kz/search/train/?fromId=c164&fromName=%D0%9D%D1%83%D1%80-%D0%A1%D1%83%D0%BB%D1%82%D0%B0%D0%BD+%28%D0%90%D1%81%D1%82%D0%B0%D0%BD%D0%B0%29&toId=c22177&toName=%D0%90%D0%BB%D0%BC%D0%B0%D1%82%D1%8B&when=16+%D0%BD%D0%BE%D1%8F%D0%B1%D1%80%D1%8F");
        curl_setopt($ch , CURLOPT_RETURNTRANSFER , true);
        
        $html = curl_exec($ch);
        
        $dom = new DOMDocument();
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
        foreach ($spans as $span){
            $text = $span->textContent;
            $spans_array = $text;
            echo  utf8_decode($text)  . '<br>';
        }
        
        $elementsByClass = getElementsByClassName($dom, "SegmentTransport__item SegmentTransport__item_deluxeTrain", 'span');
        $elems_array = array();
        foreach ($elementsByClass as $elem){
            $text = $elem->textContent;
            $elems_array = $text;
            echo  utf8_decode($text)  . '<br>';
        }
        $transports = getElementsByClassName($dom, "Link SegmentTransport__item SegmentTransport__item_company", 'a');
        $transports_array = array();
        foreach ($transports as $elem){
            $text = $elem->textContent;
            $transports_array = $text;
            echo  utf8_decode($text)  . '<br>';
        }
        $times = getElementsByClassName($dom, "SearchSegment__time", 'span');
        $times_array = array();
        foreach ($times as $elem){
            $text = $elem->textContent;
            $times_array = $text;
            echo  utf8_decode($text)  . '<br>';
        }
        $durations = getElementsByClassName($dom, "SearchSegment__duration", 'div');
        $durations_array = array();
        foreach ($durations as $elem){
            $text = $elem->textContent;
            $durations_array = $text;
            echo  utf8_decode($text)  . '<br>';
        }


    }
}