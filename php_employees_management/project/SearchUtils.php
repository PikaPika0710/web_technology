<!DOCTYPE html>
<html>
    <head>

    </head>
    <body style="text-align: center;">
    <?php
        $order = $_POST['select'];
        $info = $_POST['info'];
      //  echo $order;       
      //  echo $info;
        if($order == "" || $info == ""){
            header("Location:Search.php");
        }
        else{
            //Tim trong ten chi can co chu ... la duoc su dung LIKE %abc%
            //Tim lastname su dung LIKE %abc
            $query = "Select * from nhanvien where $order LIKE '%$info%'";
            $link = mysqli_connect("localhost", "root", "") or die ("Cannot connect");
            mysqli_select_db($link, "dulieu");
            $result = mysqli_query($link, $query);
            if(mysqli_num_rows($result) == 0){
                header("Location:Search.php");
            }
            else{
                echo '<table border="1" width="100%">';
                echo '<tr>
                        <th>IDNV</th>
                        <th>Hoten</th>
                        <th>IDPB</th>
                        <th>DiaChi</th>
                </tr>';
                while($row = mysqli_fetch_array($result)){
                    echo '<tr>
                            <td align="center">'.$row['IDNV'].'</td>
                            <td align="center">'.$row['Hoten'].'</td>
                            <td align="center">'.$row['IDPB'].'</td>
                            <td align="center">'.$row['Diachi'].'</td>
                        </tr>';
                }
                echo '</table>';
            }
            mysqli_free_result($result);
            mysqli_close($link);
        }

    ?>
    <button value="BACK" onclick="goBack()">BACK</button>

    </body>
</html>
<script>
    function goBack(){
        history.back();
    }
</script>