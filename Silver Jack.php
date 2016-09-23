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




































