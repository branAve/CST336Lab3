<!DOCTYPE html>
<html>
    <head>
        <title>Silver Jack</title>
          <link rel="stylesheet" type="text/css" href="css/Lab3.css"> </link>
    </head>
    
    <body>
<div class ="contain"</div>
<h1> Silver Jack</h1>

<?php

//declaring the array for the deck
$deck = array();


//array of keys for player images
$players = array ("Macho", "Harambe", "Archer", "Austin");


//image locations for each player
$player_pics = array("Macho" => "Images/Players/MMRS.jpg", "Harambe" => "Images/Players/Harambe.jpg", "Archer" => "Images/Players/Archer.png", "Austin" => "Images/Players/Austin.jpg");


//randomize the players
shuffle($players);


//setting the number of cards each player gets
$player1count = rand(4,6);
$player2count = rand(4,6);
$player3count = rand(4,6);
$player4count = rand(4,6);



//creating empty array for each players hand
$player1hand = array();
$player2hand = array();
$player3hand = array();
$player4hand = array();



//creating an array for player scores
$scores = array();


//create a variable to store the winner's number
$winner = 0;



//set values for the deck
for($i = 0; $i < 52; $i++)
{
    $deck[$i] = $i + 1;
}



//shuffle the deck
shuffle($deck);



//deal player1's hand
for($i = 0; $i < $player1count; $i++)
{
    array_push($player1hand, array_pop($deck));
}



//deal player2's hand
for($i = 0; $i < $player2count; $i++)
{
    array_push($player2hand, array_pop($deck));
}



//deal player3's hand
for($i = 0; $i < $player3count; $i++)
{
    array_push($player3hand, array_pop($deck));
}



//deal player4's hand
for($i = 0; $i < $player4count; $i++)
{
    array_push($player4hand, array_pop($deck));
}



//calculate player1's score
for($i = 0; $i < $player1count; $i++)
{
    $scores[0] += value($player1hand[$i]);
}



//calculate player2's score
for($i = 0; $i < $player2count; $i++)
{
    $scores[1] += value($player2hand[$i]);
}



//calculate player3's score
for($i = 0; $i < $player3count; $i++)
{
    $scores[2] += value($player3hand[$i]);
}



//calculate player1's score
for($i = 0; $i < $player4count; $i++)
{
    $scores[3] += value($player4hand[$i]);
}


//determine the winner
for($i = 0; $i < 4; $i++)
{
    if($scores[0] > 42)
    {
        $winner = 1;
    }
    elseif($scores[$i] > $scores[$winner] && $scores[$i] <= 42)
    {
        $winner = $i;
    }
}

//determine the suit of the card

function suit($card)
{
    if(($card > 0) && ($card < 14))
    {
        return "clovers";
    }
    elseif(($card > 13) && ($card < 27))
    {
        return "diamonds";
    }
    elseif(($card > 26) && ($card < 40))
    {
        return "hearts";
    }
    elseif(($card > 39) && ($card < 53))
    {
        return "spades";
    }
    
}



//determine the game value of the card
function value($card)
{
    $value = $card % 13;
    
    if($value == 0)
    {
        return 13;
    }
    else 
    {
        return $value;
    }
}


?>

//player 1 
<div class = "playerLayout">
    <?php
    
    echo "<img class = 'player' src='" . $player_pics["$players[0]"] . "' alt = 'player 1'></img> Player1:  " . $players[0];
    
    
    for($i = 0; $i < count($player1hand); $i++)
    {   
        echo "<img class = 'card' src='Images/" . suit($player1hand[$i]) . "/" . value($player1hand[$i]) . ".png' alt = 'card'></img>;";
    }

    ?>

    
    <div class = "score" align = center>
        <?php
        echo "<font size = 4>" . $scores[0] . "</font>";
        ?>
    </div>
</div>



//player 2
<div class = "playerLayout">
    <?php
     echo "<img class = 'player' src='" . $player_pics["$players[1]"] . "' alt = 'player 2'></img> Player2:  " . $players[1];
    for($i = 0; $i < count($player2hand); $i++)
    {
        
        echo "<img class = 'card' src='Images/" . suit($player2hand[$i]) . "/" . value($player2hand[$i]) . ".png' alt = 'card'></img>;";
    }
   
    ?>
    
    <div class = "score" align = center>
        <?php
        echo "<font size = 4>" . $scores[1] . "</font>";
        ?>
    </div>
    
</div>


//player 3
<div class = "playerLayout">
    <?php
     echo "<img class = 'player' src='" . $player_pics["$players[2]"] . "' alt = 'player 3'></img> Player3:  " . $players[2];
     for($i = 0; $i < count($player3hand); $i++)
    {
        
        echo "<img class = 'card' src='Images/" . suit($player3hand[$i]) . "/" . value($player3hand[$i]) . ".png' alt = 'card'></img>;";
    }
    
    ?>
    
    <div class = "score" align = center>
        <?php
        echo "<font size = 4>" . $scores[2] . "</font>";
        ?>
    </div>
    
</div>


//player 4
<div class = "playerLayout">
    <?php
     echo "<img class = 'player' src='" . $player_pics["$players[3]"] . "' alt = 'player 4'></img> Player4:  " . $players[3];
     for($i = 0; $i < count($player4hand); $i++)
    {
        
        echo "<img class = 'card' src='Images/" . suit($player4hand[$i]) . "/" . value($player4hand[$i]) . ".png' alt = 'card'></img>;";
    }
  
    ?>
    
     <div class = "score" align = center>
        <?php
        echo "<font size = 4>" . $scores[3] . "</font>";
        ?>
    </div>
    
    
</div>



<div class = winnerCard align = center>
    <?php
    echo "Winner is player # " . ($winner + 1);
    ?>
</div>

</body>
</html>
