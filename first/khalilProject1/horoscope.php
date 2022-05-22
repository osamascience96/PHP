<?php
    $dob = $_GET['birthday'];

    $date = date('m-d', strtotime($dob));
    $zodiacSign = "";


    // comparing only month-date format
    if($date >= '03-21' && $date <= '04-19'){
        $zodiacSign = "Aries";
    }else if($date >= '04-20' && $date <= '05-20'){
        $zodiacSign = "Taurus";
    }else if($date >= '05-21' && $date <= '06-20'){
        $zodiacSign = "Gemini";
    }else if($date >= '06-21' && $date <= '07-22'){
        $zodiacSign = "Cancer";
    }else if($date >= "07-23" && $date <= "08-22"){
        $zodiacSign = "Leo";
    }else if($date >= "08-23" && $date <= "09-22"){
        $zodiacSign = "Virgo";
    }else if($date >= "09-23" && $date <= "10-22"){
        $zodiacSign = "Libra";
    }else if($date >= "10-23" && $date <= "11-21"){
        $zodiacSign = "Scorpio";
    }else if($date >= "11-22" && $date <= "12-21"){
        $zodiacSign = "Sagittarius";
    }else if($date >= "12-22" && $date <= "01-19"){
        $zodiacSign = "Capricon";
    }else if($date >= "01-20" && $date <= "02-18"){
        $zodiacSign = "Aquarius";
    }else if($date >= "02-19" && $date <= "03-20"){
        $zodiacSign = "Pisces";
    }
?>

<!doctype html>
<html>
    <head>
        <title>ZodiacSign Result</title>
    </head>
    <body>
        <!-- display zodiac sign -->
        <h1>Your Ziodiac Sign is <span style="color:blue;"><?=$zodiacSign?></span> </h1>

        <?php if($dob == date('Y-m-d')){?>
            <h2>Today is also your birthday, so <span style="color:green;">Happy Birthday</span> </h2>
        <?php }?>
    </body>
</html>