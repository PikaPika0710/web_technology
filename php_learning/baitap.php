<html>
    <head></head>
    <body>
        <?php
        $p=1;
        for ($i=1;; $i++){
            if($i>10) break;
            if($i%2!=0){
                continue;
            }
            else if($i % 2 ==0){
                $p = $p * $i;
            }
        }
        echo "10!! =".$p;
        ?>
        





    </body>
</html>