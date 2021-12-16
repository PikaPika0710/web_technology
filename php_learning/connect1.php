<html>

<head>
    <title>CONNECT TO MYSQLSERVER</title>
    <meta charset="utf8_encode">
</head>

<body>
    <div>
        <?php
        $conn = mysqli_connect("localhost", "root", "") or die("Cannot connect to database");

        mysqli_select_db($conn, "dulieu4");

        $query = 'select * from table4';

        $result = mysqli_query($conn, $query);

        echo '
            <table border = "1" width ="100%">';
        echo'   
            <caption>
                DANH SACH NHAN SU
            </caption>';
        echo'       
             <tr>
                    <th>maso</th>
                    <th>hoten</th>
                    <th>ngaysinh</th>
                    <th>nghenghiep</th>
            </tr>';
        
        while($row = mysqli_fetch_array($result)){
                echo'
                    <tr>
                        <td>'.$row['maso'].'</td>
                        <td>'.$row['hoten'].'</td>
                        <td>'.$row['ngaysinh'].'</td>
                        <td>'.$row['nghenghiep'].'</td>
                    </tr>';
        }
        echo'</table>';
        mysqli_free_result($result);
        mysqli_close($conn);
        ?>
    </div>

</body>

</html>