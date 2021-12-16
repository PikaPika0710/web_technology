<?php
    include_once("E_Student.php");
    class Model_Student{
        public function __construct()
        {
            
        }
        public static function getAllStudents()
        {
            $link =mysqli_connect("localhost","root", "") or die("Cannot connect to database");
            mysqli_select_db($link, "dulieu");
            $query = "Select * from sinhvien";
            $result = mysqli_query($link, $query);
            $i= 0;
            while($row = mysqli_fetch_array($result)){
                $students[++$i] = new Entity_Student($row['id'], $row['name'], $row['age'], $row['university']);
            }
            mysqli_close($link);
            return $students;
            }
         
        public function getStudentbyID($id){
            $link =mysqli_connect("localhost","root", "") or die("Cannot connect to database");
            mysqli_select_db($link, "dulieu");
            $query = "Select * from sinhvien where id='$id'";
            $result = mysqli_query($link, $query);
            if(mysqli_num_rows($result) == 0){           
                    header("Location:../Controller/C_Student.php?mod4=1");    
            }
            else{

            while($row = mysqli_fetch_array($result)){
                $student=  new Entity_Student($row['id'], $row['name'], $row['age'], $row['university']);
            }
            return $student;
            mysqli_close($link);
            }
        }
        
        public function insertStudent($id, $name, $age, $university){
            $link =mysqli_connect("localhost","root", "") or die("Cannot connect to database");
            mysqli_select_db($link, "dulieu");
            $query2 = "Insert into sinhvien values($id, '$name', $age,'$university')";
            $result2 = mysqli_query($link, $query2);
            mysqli_close($link);
        }
        public function updateStudent($id, $name, $age, $university){
            $link =mysqli_connect("localhost","root", "") or die("Cannot connect to database");
            mysqli_select_db($link, "dulieu");
            $query = "Update sinhvien set name = '$name', age = $age, university = '$university' where id = $id ";
            $result = mysqli_query($link, $query);
            mysqli_close($link);
        }
        public function deleteStudentbyID($id){
            $link =mysqli_connect("localhost","root", "") or die("Cannot connect to database");
            mysqli_select_db($link, "dulieu");
            $query = "delete from sinhvien where id = '$id'";
            $result = mysqli_query($link, $query);
            mysqli_close($link);
        }
        public function getStudentbyMethod($method, $value){
            $link =mysqli_connect("localhost","root", "") or die("Cannot connect to database");
            mysqli_select_db($link, "dulieu");
            $query = "Select * from sinhvien where $method LIKE '%$value%'";
            $result = mysqli_query($link, $query);
            if(mysqli_num_rows($result) == 0){      
                header("Location:../Controller/C_Student.php?mod4=1");  
            }
            else{
                $i=0;
                while($row = mysqli_fetch_array($result)){
                    $students[++$i]=  new Entity_Student($row['id'], $row['name'], $row['age'], $row['university']);
                }
                return $students;
                mysqli_close($link);
            }
        }
        
    }