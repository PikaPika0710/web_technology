/* Version lớn hơn 5 sài SQLi */

<?php
//khai bao ket noi
$link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi deb CSDL MySQL");

// lua chon co so du lieu
mysqli_select_db($link, "dulieu4");

// query
$sql = "select * from table4";

$result = mysqli_query($link, $sql);

echo '<table border = "1" width = "100%">';

//tieu de cua bang
echo
    '<caption>
                    Du lieu truy xuat tu bang Nhan Su
                </caption>';
echo
    '<TR>
                    <TH>Ma So</TH>
                    <TH>Ho ten</TH>
                    <TH>Ngay sinh</TH>
                    <TH>Nghe nghiep</TH>
                </TR>';
while ($row = mysqli_fetch_array($result)) {

    // $maso = $row["maso"];
    // $hoten = $row["hoten"];
    // $ngaysinh = $row["ngaysinh"];
    // $nghenghiep = $row["nghenghiep"];
    // echo "<tr><td>$maso</td><td> $hoten</td><td>$ngaysinh</td><td>$nghenghiep</td></tr>";
    echo
    '<tr>
                    <td>', $row['maso'], '</td>
                    <td>', $row['hoten'], '</td>
                    <td>', $row['ngaysinh'], '</td>
                    <td>', $row['nghenghiep'], '</td>
                </tr>';
}

echo '</table>';

//giai phong tap cac ban ghi
mysqli_free_result($result);
mysqli_close($link);

?>