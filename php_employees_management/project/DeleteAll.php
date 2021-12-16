<html>
    <head>
        <title>Xem thong tin NV</title>
        <meta charset="utf8">
    </head>
    <body style="text-align: center;">
        <?php
            $conn = mysqli_connect("localhost", "root", "") or die("Cannot Connect!");

            mysqli_select_db($conn, "dulieu");

            $query = "Select * from nhanvien";

            $result = mysqli_query($conn, $query);
            echo '<form action="DeleteAllUtils.php" method = "post">';
            echo '
            <table border = "1" width ="100%">';
            echo'   
            <caption>
                DANH SACH NHAN VIEN
            </caption>';
            echo '
                <tr>
                    <th>IDNV</th>
                    <th>Hoten</th>
                    <th>IDPB</th>
                    <th>Diachi</th>
                    <th>Xoa</th>
                </tr>';
            while($row = mysqli_fetch_array($result)){
                echo'
                    <tr>
                        <td align="center">'.$row['IDNV'].'</td>
                        <td align="center">'.$row['Hoten'].'</td>
                        <td align="center">'.$row['IDPB'].'</td>
                        <td align="center">'.$row['Diachi'].'</td>
                        <td align="center"><input type="checkbox" name="listID[]" value='.$row['IDNV'].'></td>
                    </tr>';
            }
           
            echo'</table>';
            mysqli_free_result($result);
            mysqli_close($conn);
            echo'<input type="submit" value="Xoa tat ca" style="margin-left: 90%; font-size:15px;" >';
            echo '</form>';
        ?>
     
    </body>
</html>
