<?php

// $json= file_get_contents("recipes.json");

// Title =
// Create DOM from URL or file
function getcontent($argv)
{
$html = file_get_contents($argv);
 preg_match_all('/<meta property=og:title content="(.*?)">/s', $html, $titleregex);
    preg_match_all('/ <span class=release_date>(.*?)<\/span>/s', $html, $date);
    preg_match_all('/<meta name=description content="(.*?)">/s', $html, $description);
    preg_match_all('/<p><strong><bdi>Status<\/bdi><\/strong> (.*?)<\/p>/s', $html, $realease);
    preg_match_all('/<p><strong><bdi>Runtime<\/bdi><\/strong> (.*?)<\/p>/s', $html, $duration);
    preg_match_all('/<p><strong><bdi>Budget<\/bdi><\/strong> (.*?)<\/p>/s', $html, $budget);
    preg_match_all('/<p><strong><bdi>Revenue<\/bdi><\/strong> (.*?)<\/p>/s', $html, $revenue);
    preg_match_all('/<p><strong><bdi>Original Language<\/bdi><\/strong> (.*?)<\/p>/s', $html, $langue);
    preg_match_all('/<p><strong><bdi>Original Language<\/bdi><\/strong> (.*?)<\/p>/s', $html, $langue);
    preg_match_all('/<li><a href=https:\/\/www.themoviedb.org\/genre\/12-adventure\/movie>(.*?)<\/a><\/li>/s', $html, $action);
    preg_match_all('/<li><a href=https:\/\/www.themoviedb.org\/genre\/35-comedy\/movie>(.*?)<\/a><\/li>/s', $html, $comedy);
    preg_match_all('/<li><a href=https:\/\/www.themoviedb.org\/genre\/10751-family\/movie>(.*?)<\/a><\/li>/s', $html, $family);
    preg_match_all('/<li><a href=https:\/\/www.themoviedb.org\/genre\/878-science-fiction\/movie>(.*?)<\/a><\/li>/s', $html, $sciencefiction);
    // 
    preg_match_all('/<li><a href=https:\/\/www.themoviedb.org\/keyword\/211-bureaucracy\/movie>(.*?)<\/a><\/li>/s', $html, $bureacycracy);
    preg_match_all('/<li><a href=https:\/\/www.themoviedb.org\/keyword\/803-android\/movie>(.*?)<\/a><\/li>/s', $html, $android);
    preg_match_all('/<li><a href=https:\/\/www.themoviedb.org\/keyword\/818-based-on-novel-or-book\/movie>(.*?)<\/a><\/li>/s', $html, $novel);
    preg_match_all('/<li><a href=https:\/\/www.themoviedb.org\/keyword\/3713-chase\/movie>(.*?)<\/a><\/li>/s', $html, $chase);
    preg_match_all('/<li><a href=https:\/\/www.themoviedb.org\/keyword\/3801-space-travel\/movie>(.*?)<\/a><\/li>/s', $html, $space);
    preg_match_all('/<li><a href=https:\/\/www.themoviedb.org\/keyword\/4270-galaxy\/movie>(.*?)<\/a><\/li>/s', $html, $galaxy);
    preg_match_all('/<li><a href=https:\/\/www.themoviedb.org\/keyword\/9951-alien\/movie>(.*?)<\/a><\/li>/s', $html, $alien);
    preg_match_all('/<li><a href=https:\/\/www.themoviedb.org\/keyword\/10349-survival\/movie>(.*?)<\/a><\/li>/s', $html, $survival);
    preg_match_all('/<li><a href=https:\/\/www.themoviedb.org\/keyword\/11097-part-stop-motion\/movie>(.*?)<\/a><\/li>/s', $html, $motion);

    preg_match_all('/<li><a href=https:\/\/www.themoviedb.org\/keyword\/11546-hitchhiker\/movie>(.*?)<\/a><\/li>/s', $html, $hitchhiker);
    preg_match_all('/<li><a href=https:\/\/www.themoviedb.org\/keyword\/14544-robot\/movie>(.*?)<\/a><\/li>/s', $html, $robot);
    preg_match_all('/<li><a href=https:\/\/www.themoviedb.org\/keyword\/14909-alien-invasion\/movie>(.*?)<\/a><\/li>/s', $html, $invasion);
    preg_match_all('/<li><a href=https:\/\/www.themoviedb.org\/keyword\/177145-hyperspace\/movie>(.*?)<\/a><\/li>/s', $html, $hyperspace);
    preg_match_all('/<li><a href=https:\/\/www.themoviedb.org\/keyword\/177146-meaning-of-life\/movie>(.*?)<\/a><\/li>/s', $html, $life);
    preg_match_all('/<li><a href=https:\/\/www.themoviedb.org\/keyword\/221653-destruction-of-earth\/movie>(.*?)<\/a><\/li>/s', $html, $destruction);
    preg_match_all('/<li><a href=https:\/\/www.themoviedb.org\/keyword\/221654-intergalactic-travel\/movie>(.*?)<\/a><\/li>/s', $html, $travel);
    preg_match_all('/<li><a href=https:\/\/www.themoviedb.org\/keyword\/221655-islington-england\/movie>(.*?)<\/a><\/li>/s', $html, $england);
    preg_match_all('/<p class=character>(.*?)<\/p>/s', $html, $caracter);


    //cast
    preg_match_all('/<p><a href=https:\/\/www.themoviedb.org\/person\/(.*?)>(.*?)<\/a><\/p>/s', $html, $cast);

// foreach ($cast[2] as $key => $value) {
//     $cast[2][$key] = str_replace('&#x27;', '', $value);
// }
// $i=0;  
var_dump($caracter);
// var_dump($date[1][0]);
// <h2 class="27">Batman: The Animated Series</h2>



$array = array("status"=> "ok","result" => array("movie" => [array(

    "title" => $titleregex[1][0],
    "date" => $date[1][0],
    "description" => $description[1][0],
    "status" => $realease[1][0],
    "duration" => $duration[1][0],
    "budget" => $budget[1][0],
    "revenue" => $revenue[1][0],
    "originalLanguage" => $langue[1][0],
    "genre" => [
         $action[1][0],
         $comedy[1][0],
         $family[1][0],
        $sciencefiction[1][0],
    ],
    "keywords" => [
        $bureacycracy[1][0],
        $android[1][0],
        $novel[1][0],
        $chase[1][0],
        $space[1][0],
        $galaxy[1][0],
        $alien[1][0],
        $survival[1][0],
        $motion[1][0],
        $hitchhiker[1][0],
        $robot[1][0],
        $invasion[1][0],
        $hyperspace[1][0],
        $life[1][0],
        $destruction[1][0],
        $travel[1][0],
        $england[1][0],
    ],
    "cast" => [
        array(
            "name" => $cast[2][0],
            "character" => $caracter[1][0],

            
        ),
        array(
            "name" => $cast[2][1],
            "character" => $caracter[1][1],
            
        ),
        array(
            "name" => $cast[2][2],
            "character" => $caracter[1][2],
            
        ),
        array(
            "name" => $cast[2][3],
            "character" => $caracter[1][3],
            
        ),
        array(
            "name" => $cast[2][4],
            "character" => $caracter[1][4],
            
        ),
        array(
            "name" => $cast[2][5],
            "character" => $caracter[1][5],
            
        ),
        array(
            "name" => $cast[2][6],
            "character" => $caracter[1][6],
            
        ),
        array(
            "name" => $cast[2][7],
            "character" => $caracter[1][7],
        ),
        
        

    ]
    
)]));

$json = json_encode($array, JSON_PRETTY_PRINT);
$bytes = file_put_contents("result.json", $json); 
return $bytes;
}
getcontent($argv[1],$argv[2]);
?>