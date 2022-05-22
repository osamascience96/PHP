<?php 

    if(isset($_GET['demoSel'])){
        $numbersArray = $_GET['demoSel'];      
    }

    foreach($numbersArray as $number){
        // print the table of each number 
        echo("----------------------------------------------------------"."<br>");
        for($count = 1; $count <= 10; $count++){
            echo($number." * ".strval($count)." = ".strval(intval($number) * $count)."<br>");
        }
        echo("----------------------------------------------------------"."<br>");
    }
?>