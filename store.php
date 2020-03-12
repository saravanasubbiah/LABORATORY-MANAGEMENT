<?php
require_once("connection.php");
if(isset($_POST['submit']))
{
    if(empty($_POST['lab_name']) || empty($_POST['sys_no']) || empty($_POST['fault']))
    {
        echo 'please fill in the blanks';

    }
    else{
        $lab_name=$_POST['lab_name'];
        $sys_no=$_POST['sys_no'];
        $fault=$_POST['fault'];

        $query = "insert into records (lab_name, sys_no, fault) values('$lab_name','$sys_no','$fault') ";
        $result = mysqli_query($conn,$query);
        if($result)
        {
            header("location:view.php");
        }
        else{
            echo 'please check your query';
        }
    }
}
else{
    header("location:index.php");
}