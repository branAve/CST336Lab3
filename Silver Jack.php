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

/* 
$deck = array();
$counter = 0;
$idNum;
$suit;
$value;
$imgLoc;

for($index = 0; $index < 4; $index++)
{
    if($index = 0)
    {
        $suit = "hearts";
    }
    elseif($index = 1)
    {
        $suit = "diamonds";
    }
    elseif($index = 2)
    {
        $suit = "clovers";
    }
    else
    {
        $suit = "spades";
    }
    
    
    for($index2 = 0; $index2 < 13; $index++)
    {
        $idNum = $counter;
        $value = $index2;
        $imgLoc = "/Images/".$suit."/".$value.".png";
        
        $deck[] = array("id"=>$idNum, "suit"=>$suit, "value"=>$value, "imgLoc"=>$imgLoc);
        
        $counter++;
    }
    
}

while( $element = each( $deck ) )
{
 echo $element[ 'id' ];
 echo ' - ';
 echo $element[ 'suit' ];
 echo ' - ';
 echo $element[ 'value'];
 echo '  : imgLoc = ';
 echo $element[ 'imgLoc'];
 echo '<br />';
}


$playerOneNumCards = rand(4,6);
$playerTwoNumCards = rand(4,6);
$playerThreeNumCards = rand(4,6);
$playerFourNumCards = rand(4,6);

$playerOneCards = array();
$playerTwoCards = array();
$playerThreeCards = array();
$playerFourCards = array();

function dealCards()
{
    
}

*/

Combine_Cards($hearts, $diamonds, $spades, $clovers);

$player_pics = array ("Macho", "Harambe", "Archer", "Austin");

function Shuffle_Players($player_pics)
{
    shuffle($player_pics);
    
    for ($i=0; $i<4; $i++)
    {
       if  ($player_pics[0] == "Macho")
       {
           echo "<img class = 'macho' src='Images/Players/MMRS.jpg' alt = 'Player4' style = 'width: 76px;height:96px;'></img>";
       }
       else if ($player_pics[0] == "Harambe")
       {
           echo "<img class = 'harambe' src='Images/Players/Harambe.jpg' alt = 'Player3' style = 'width: 76px;height:96px;'></img>";
       }
       
       else if ($player_pics[0] == "Archer")
       {
           echo "<img class = 'archer' src='Images/Players/Archer.png' alt = 'Player1' style = 'width: 76px;height:96px;'></img>";
       }
       
       else{
           echo "<img class = 'austin' src='Images/Players/Austin.jpg' alt = 'Player2' style = 'width: 76px;height:96px;'></img>";
       }
       echo "p";
    }
}


/* 
echo "<img class = 'archer' src='Images/Players/Archer.png' alt = 'Player1' style = 'width: 76px;height:96px;'></img>";

echo "<br>";

echo "<img class = 'austin' src='Images/Players/Austin.jpg' alt = 'Player2' style = 'width: 76px;height:96px;'></img>";
echo "<br>";

echo "<img class = 'harambe' src='Images/Players/Harambe.jpg' alt = 'Player3' style = 'width: 76px;height:96px;'></img>";
echo "<br>";

echo "<img class = 'macho' src='Images/Players/MMRS.jpg' alt = 'Player4' style = 'width: 76px;height:96px;'></img>";

*/

//<<<<<<< HEAD
//=======

function Combine_Cards($hearts, $diamonds, $spades, $clovers)  
{

// Creates first half of deck with diamonds and spades 
$fsthalfdeck= array_merge($diamonds,$spades);

//Creates second half of deck with hearts and clovers 
$secndhalfdeck = array_merge ($hearts,$clovers);

// Creates a full deck by combining the 2 halves
$full_deck=array_merge($fsthalfdeck,$secndhalfdeck);

// Shuffles the cards.
$shuffled_deck = array();                   //New array which will be our shuffled deck
$keys = array_keys($full_deck);              // we set keys = to array of keys of array full_deck
shuffle($keys);                              //shuffle the keys

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

?>
</body>
</html>

<!--/* */>>>>>>> e3b694f8c37b7a1d65f545f96fff4562ca2907cc-->




































