<!Doctype html>
<html>
    <head>
        <title>Guess Game</title>
    </head>
    <body>
        <h1>Welcome to my Guessing Game</h1>
         <!-- check if the $_GET params is missing  -->
         <?php
            if(!isset($_GET['guess'])){
                echo("guess parameter is missing");
            }else{
                $guessValue = $_GET['guess'];
                $randomValue = rand(1, 100);

                // if the guessValue is between the targeted value  
                if ($guessValue >= 1 && $guessValue <= 100){
                    // if the values is less than randomValue
                    if($guessValue < $randomValue){
                        echo("Your value is lower");
                        // next line
                        echo("<br/>");
                        echo("The right value is ".$randomValue);
                    }else if($guessValue > $randomValue){
                        echo("Your value is greater");
                        // next line
                        echo("<br/>");
                        echo("The right value is ".$randomValue);
                    }else{
                        echo("You Win!");
                    }
                }else{
                    echo("Your value is too low or high");
                    // next line
                    echo("<br/>");
                    echo("Your value is out of range");
                }
            }
         ?>
         <form>
            <input type="number" size="20" name="guess">
            <button type="submit">Submit Guesss</button>
         </form>         
    </body>
</html>