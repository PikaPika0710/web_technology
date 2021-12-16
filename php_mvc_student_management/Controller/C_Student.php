<?php
    include_once("../Model/M_Student.php"); 
    
    class Controller_Student{
        public function __invoke()
        {
            if(isset($_GET['id'])){
                $model_Student = new Model_Student();
                $student = $model_Student->getStudentbyID($_GET['id']);
                include_once("../View/StudentDetail.html");
            }
            else if(isset($_GET['up'])){
                $model_Student = new Model_Student();
                $student = $model_Student->getStudentbyID($_GET['up']);
                include_once("../View/UpdateStudent.html");
            }
            else if(isset($_GET['del'])){
                $model_Student = new Model_Student();
                $model_Student->deleteStudentbyID($_GET['del']);
                header("Location:C_Student.php?mod3=1");
            }
            else if(isset($_GET['mod1'])){
                include_once("../View/InsertStudent.html");
            }
            else if(isset($_GET['mod2'])){
                //update
                $model_Student = new Model_Student();
                $studentList = $model_Student->getAllStudents();
                include_once("../View/StudentDetailList.html"); 
            }
            else if(isset($_GET['mod3'])){
                //xoa
                $model_Student = new Model_Student();
                $studentList = $model_Student->getAllStudents();
                include_once("../View/DeleteStudent.html"); 
            }
            else if(isset($_GET['mod4'])){
                //tim kiem
                include_once("../View/SearchStudent.html"); 
            }
            else if(isset($_POST['insert'])){
                $model_Student = new Model_Student();
                $model_Student->insertStudent($_REQUEST['id'], $_REQUEST['name'], $_REQUEST['age'], $_REQUEST['university'] );
                //echo $_REQUEST['id'] . $_REQUEST['name'] . $_REQUEST['age'] .$_REQUEST['university'];
                header("Location:C_Student.php");
            }
            else if(isset($_POST['update'])){
                $model_Student = new Model_Student();
                $model_Student->updateStudent($_REQUEST['id'], $_REQUEST['name'], $_REQUEST['age'], $_REQUEST['university'] );
                header("Location:C_Student.php?mod2=1");
            }
            else if(isset($_POST['search'])){
                $order = $_POST['select'];
                $info = $_POST['info'];
                if($order == "" || $info == ""){
                    header("Location:../Controller/C_Student.php?mod4=1");
                }
                else{
                $model_Student = new Model_Student();
                $studentList = $model_Student->getStudentbyMethod($order, $info);
                include_once("../View/StudentList.html");
                }
            }
            else{
                $model_Student = new Model_Student();
                $studentList = $model_Student->getAllStudents();
                include_once("../View/StudentList.html");
            }
        }
    
    }
            $Ctr_student= new Controller_Student();
            $Ctr_student->__invoke();
?>