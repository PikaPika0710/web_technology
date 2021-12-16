<!DOCTYPE html>
<html>

<head>

</head>

<body style="text-align: center;">

    <?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == "" && $password == "") {
        header("Location: LOGINFORM.html");
    } else {
        $link = mysqli_connect("localhost", "root", "") or die("Cannot connect to database!");
        mysqli_select_db($link, "dulieu");
        $query = "Select * from admin where username='$username' AND password = '$password'";
        $rs = mysqli_query($link, $query);
        if (mysqli_num_rows($rs) == 0) {
            header("Location: LOGINFORM.html");
        } else {
            $rows = mysqli_fetch_array($rs);
            if ($rows['username'] == "admin" && $rows['password'] == "admin") {
                header("Location: IndexAdmin.html");
            } else if ($rows['username'] == "nhanvien" && $rows['password'] == "nhanvien") {
                header("Location: IndexEmployee.html");
            }
        }
    }

    ?>
    <button name="Back" onclick="goBack()">BACK</button>
</body>

</html>
<script>
    function goBack() {
        history.back();
    }
</script>