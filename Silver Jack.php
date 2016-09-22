<!DOCTYPE html>
<html>
    <head>
        <title>Silver Jack</title>
          <link rel="stylesheet" type="text/css" href="css/sjcss.css"> </link>
    </head>
    
    <body>
<div class ="contain" </div>
<h1> Silver Jack</h1>

<?php

$hearts = array("ace_h" =>1, "two_h" =>2, "three_h"=>3, 
"four_h" => 4, "five_h" => 5, "six_h"=> 6, "svn_h"=> 7,
"eight_h" => 8, "nine_h" =>9, "ten_h" =>10, "J_h" => 11, 
"Q_h" => 12, "K_h" => 13);


$diamonds = array("ace_d" =>1, "two_d" =>2, "three_d"=>3,
"four_d" => 4, "five_d" => 5, "six_d"=> 6, "svn_d"=> 7,
"eight_d" => 8, "nine_d" =>9, "ten_d" =>10, "J_d" => 11, 
"Q_d" => 12, "K_d" => 13);


$spades = array("ace_s" =>1, "two_s" =>2, "three_s"=>3,
"four_s" => 4, "five_s" => 5, "six_s"=> 6, "svn_s"=> 7,
"eight_s" => 8, "nine_s" =>9, "ten_s" =>10, "J_s" => 11, 
"Q_s" => 12, "K_s" => 13);

$clovers = array("ace_c" =>1, "two_c" =>2, "three_c"=>3, 
"four_c" => 4, "five_c" => 5, "six_c"=> 6, "svn_c"=> 7,
"eight_c" => 8, "nine_c" =>9, "ten_c" =>10, "J_c" => 11, 
"Q_c" => 12, "K_c" => 13); 


Combine_Cards($hearts, $diamonds, $spades, $clovers);

echo "<img class = 'archer' src='Images/Players/Archer.png' alt = 'Player1' style = 'width: 76px;height:96px;'></img>";

echo "<br>";

echo "<img class = 'austin' src='Images/Players/Austin.jpg' alt = 'Player2' style = 'width: 76px;height:96px;'></img>";
echo "<br>";

echo "<img class = 'harambe' src='Images/Players/Harambe.jpg' alt = 'Player3' style = 'width: 76px;height:96px;'></img>";
echo "<br>";

echo "<img class = 'macho' src='Images/Players/MMRS.jpg' alt = 'Player4' style = 'width: 76px;height:96px;'></img>";



function Combine_Cards($hearts, $diamonds, $spades, $clovers)  
{

// Creates first half of deck with diamonds and spades 
$fsthalfdeck = array_merge($diamonds,$spades);

//Creates second half of deck with hearts and clovers 
$secndhalfdeck = array_merge ($hearts,$clovers);

// Creates a full deck by combining the 2 halves
$full_deck=array_merge($fsthalfdeck,$secndhalfdeck);

// Shuffles the cards.
$shuffled_deck = array();  //New array which will be our shuffled deck
$keys = array_keys($full_deck); // we set keys = to array of keys of array full_deck
shuffle($keys); //shuffle the keys

foreach($keys as $key) //Loop will set our new array with keys equal to our old array's keys 
{
    $shuffled_deck[$key] = $full_deck[$key];
}
// End of shuffling the cards   *look up*



foreach ($shuffled_deck as $k =>$card_value) 
{
    echo $k. "=>".$card_value. "<br>";
}


}

function Deal_Cards($shuffled_deck) 
{
    
}




































