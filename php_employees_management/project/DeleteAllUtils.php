<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
    <?php
            $IDNV = $_POST['listID']; //$_REQUEST
            $link = mysqli_connect("localhost", "root", "") or die("Cannot connect to database!");
            mysqli_select_db($link, "dulieu");
            foreach($IDNV as $i){
                $query = "Delete from nhanvien where IDNV='$i'";
                $result = mysqli_query($link, $query);
            }
            mysqli_free_result($result);
            mysqli_close($link);
            header("Location: DeleteAll.php");
                 
    ?>        
    </body>

</html>
