<?php
    $IDNV=$_POST['IDNV'];
    $Hoten=$_POST['Hoten'];
    $IDPB=$_POST['select'];
    $Diachi=$_POST['Diachi'];
    if($IDNV== "" || $Hoten == "" || $IDPB == "" ||$Diachi == "" ) {
        header("location: AddEmployee.php");
    } 
    else{
        $link = mysqli_connect("localhost", "root", "") or die("Cannot connect")    ;
        mysqli_select_db($link, "dulieu");
        
                    $query1 = "Select * from nhanvien";
                    $rs = mysqli_query($link, $query1);
                    while($rows = mysqli_fetch_array($rs)){
                        if($rows['IDNV'] == $IDNV){
                                echo '<script language="javascript">';
                                echo 'alert("'.$rows['IDNV'].' da bi trung!!!")';
                                echo '</script>';
                                return;
                        }
                    }
        $query2 = "Insert into nhanvien(IDNV, Hoten, IDPB, DiaChi) VALUES('$IDNV', '$Hoten', '$IDPB', '$Diachi')";
        $result = mysqli_query($link, $query2);
        mysqli_free_result($result);
        mysqli_close($link);
        header("location: AddEmployee.php");
    }
