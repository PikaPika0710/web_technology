<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">    
        <script>
                function goBack(){
                    // <?php
                    //     header("location: MenuAdmin.php");
                    // ?>

                    history.back();
                }
        </script>
    </head>
    <body style="text-align: center;">
        <?php
             $conn = mysqli_connect("localhost", "root", "") or die("Cannot Connect!");
 
             mysqli_select_db($conn, "dulieu");
 
             $query = "Select * from phongban";
 
             $result = mysqli_query($conn, $query);
 
             echo '<table border = "1" width ="100%">';
             echo '<caption>DANH SACH PHONG BAN</caption>';
             echo '
                 <tr >
                     <th>IDPB</th>
                     <th>Tenpb</th>
                     <th>Mota</th>
                     <th>Cap nhat thong tin</th>
                 </tr>   
             ';
             while($row = mysqli_fetch_array($result)){
                 echo'
                 <tr > 
                     <td align="center">'.$row['IDPB'].'</td>
                     <td align="center">'.$row['Tenpb'].'</td>
                     <td align="center">'.$row['Mota'].'</td>   
                     <td align="center"><a href="UpdateForm.php?IDPB='.$row['IDPB'].'">Update</a></td>
                 </tr>   
                 ';
             }
             echo '</table>';
             mysqli_free_result($result);
             mysqli_close($conn);
             
         ?>  
    </body>
</html>
