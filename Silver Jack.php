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


Combine_Cards($hearts, $diamonds, $spades, $clovers);

echo "<img class = 'archer' src='Images/Players/Archer.png' alt = 'Player1' style = 'width: 76px;height:96px;'></img>";

echo "<br>";

echo "<img class = 'austin' src='Images/Players/Austin.jpg' alt = 'Player2' style = 'width: 76px;height:96px;'></img>";
echo "<br>";

echo "<img class = 'harambe' src='Images/Players/Harambe.jpg' alt = 'Player3' style = 'width: 76px;height:96px;'></img>";
echo "<br>";

echo "<img class = 'macho' src='Images/Players/MMRS.jpg' alt = 'Player4' style = 'width: 76px;height:96px;'></img>";





?>


</div>
    </body>
</html>
































