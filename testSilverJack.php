<!DOCTYPE html>
<html>
    <head>
        <title>Silver Jack</title>
          <link rel="stylesheet" type="text/css" href="Lab3.css"> </link>
    </head>
    
    <body>
<div class ="contain"</div>
<h1> Silver Jack</h1>

<?php

//declaring the array for the deck
$deck = array();



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
    $scores[0] += $player1hand[$i] % 13;
}



//calculate player2's score
for($i = 0; $i < $player2count; $i++)
{
    $scores[1] += $player2hand[$i] % 13;
}



//calculate player3's score
for($i = 0; $i < $player3count; $i++)
{
    $scores[2] += $player3hand[$i] % 13;
}



//calculate player1's score
for($i = 0; $i < $player4count; $i++)
{
    $scores[3] += $player4hand[$i] % 13;
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


?>


<div>
    <?php
    echo "Player1:  ";
    for($i = 0; $i < count($player1hand); $i++)
    {
        echo $player1hand[$i] . ", ";
    }
    echo "    Player1 Score:  " . $scores[0];
    ?>
</div>
<div>
    <?php
    echo "Player2:  ";
     for($i = 0; $i < count($player2hand); $i++)
    {
        echo $player2hand[$i] . ", ";
    }
    echo "    Player2 Score:  " . $scores[1];
    ?>
</div>
<div>
    <?php
    echo "Player3:  ";
     for($i = 0; $i < count($player3hand); $i++)
    {
        echo $player3hand[$i] . ", ";
    }
    echo "    Player3 Score:  " . $scores[2];
    ?>
</div>
<div>
    <?php
    echo "Player4:  ";
     for($i = 0; $i < count($player4hand); $i++)
    {
        echo $player4hand[$i] . ", ";
    }
    echo "    Player4 Score:  " . $scores[3];
    ?>
</div>

<div>
    <?php
    echo "Winner is player # " . ($winner + 1);
    ?>
</div>

</body>
</html>
