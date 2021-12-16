<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
    <?php
            $IDNV = $_REQUEST['IDNV']; //$_REQUEST
            echo $IDNV;
            $link = mysqli_connect("localhost", "root", "") or die("Cannot connect to database!");
            mysqli_select_db($link, "dulieu");
            $query = "Delete from nhanvien where IDNV='$IDNV'";
            $result = mysqli_query($link, $query);
            mysqli_free_result($result);
            mysqli_close($link);
            header("Location: Delete.php");
    ?>        
    </body>

</html>
