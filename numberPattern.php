<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    for($i=1; $i<=4; $i++)
    {
        for($j=4-1; $j>=$i; $j--){
            echo "&nbsp;&nbsp";
        }
        for($k=$i-1; $k>=-($i-1); $k--){
            printf($i-abs($k));
        }
        echo "<br>";
    }


    for($i=3; $i>=1; $i--)
    {
        echo "&nbsp;";
        echo "&nbsp;";
        for($j=3-1; $j>=$i; $j--){
            echo "&nbsp;";
            
        }
        for($k=$i-1; $k>=-($i-1); $k--){
            printf($i-abs($k));
        }
        echo "<br>";
    }
    
    ?>
</body>
</html>