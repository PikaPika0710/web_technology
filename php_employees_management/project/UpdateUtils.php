<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
    <?php
        $IDPB = $_POST['IDPB']; //$_REQUEST
        $Tenpb = $_POST['Tenpb'];
        $Mota = $_POST['Mota'];
        if($Tenpb == "" || $Mota == ""){
            header("location:Update.php");
        }
        else{
            $link = mysqli_connect("localhost", "root", "") or die("Cannot connect to database!");
            mysqli_select_db($link, "dulieu");
            $query = "Update phongban set Tenpb='$Tenpb', Mota='$Mota' where IDPB='$IDPB'";
            $result = mysqli_query($link, $query);
            mysqli_free_result($result);
            mysqli_close($link);
            header("Location: Update.php");
        }
    ?>      
    
    </body>

</html>
