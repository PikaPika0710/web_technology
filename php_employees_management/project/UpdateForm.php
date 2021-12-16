<html>

<head>
      
</head>

<body>
    <div></div>
    <h1>UPDATE</h1>
    <?php
            $mapb = $_REQUEST['IDPB']; //get data from browser
            $link = mysqli_connect("localhost", "root", "") or die("Khong thể kết nối với CSDL Mysql");
            mysqli_select_db($link, "dulieu");
            if ($mapb == "")
                $sql = "select * from phongban";
            else
                $sql = "select * from phongban where IDPB='$mapb'";
            $rs = mysqli_query($link, $sql);
           
            $rows = mysqli_fetch_array($rs);
            echo '
                <form action="UpdateUtils.php" method="post">
                <label for="IDPB">IDPB</label>
                <input type="text" name="IDPB" value='.$rows['IDPB'].' readonly>
                <br><br>
                <label for="Tenpb">Tenpb</label>
                <input type="text" name="Tenpb" value='.$rows['Tenpb'].'>
                <br><br>
                <label for="Mota">Mota</label>
                <input type="text" name="Mota" value='.$rows['Mota'].'>
                <br><br>
                <input type="submit" value="OK">
                <input type="reset" value="RESET" >
                </form>       
            ';
            
            mysqli_free_result($rs);
            mysqli_close($link);
    ?>

</body>

</html>
<script>

</script>