<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        for($i = 1;$i<100;$i++){
            echo "$i," ;
        }
        echo $i;
        echo "<br>";
        $contador = 10;
        while($contador >= 1){
            if($contador == 1){
                echo $contador;
                $contador--;
            }else{
            print("$contador-");
            $contador--;
            }
        };
    ?>
</body>
</html>