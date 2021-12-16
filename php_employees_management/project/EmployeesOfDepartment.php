<html>

<head>
      
</head>

<body style="text-align: center;">
    <div></div>

    <?php
          $mapb = $_REQUEST['IDPB']; //get data from browser
          $link = mysqli_connect("localhost", "root", "") or die("Khong thể kết nối với CSDL Mysql");
          mysqli_select_db($link, "dulieu");
          if ($mapb == "")
            $sql = "select * from nhanvien";
          else
            $sql = "select * from nhanvien where IDPB='$mapb'";
          $rs = mysqli_query($link, $sql);
          echo '<table border="1" width="100%">';
          echo '<TR>
                    <TH>IDNV</TH>
                    <TH>Hoten</TH>
                    <TH>IDPB</TH>
                    <TH>Diachi</TH>
                </TR>';
          while ($row = mysqli_fetch_array($rs)) {
            echo '<Tr>
                    <TD align="center">' . $row["IDNV"] . '</TD>
                    <TD align="center">' . $row["Hoten"] . '</TD>
                    <TD align="center">' . $row["IDPB"] . '</TD>
                    <TD align="center">' . $row["Diachi"] . '</TD>
              </Tr>';
          }
          echo '</table>';
          mysqli_free_result($rs);
          mysqli_close($link);
  ?>

<button name="Back" onclick="goBack()">BACK</button>
</body>

</html>
<script>
    function goBack(){
        history.back();
    } 
</script>