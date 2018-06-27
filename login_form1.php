<?php
    session_start();
    require_once("connect1.php");
    $Emp_User = $_REQUEST['Emp_User'];
    $Emp_Password = $_REQUEST['Emp_Password'];

    //SQL Statment
    $sql = "SELECT * FROM employee WHERE Emp_User = '$Emp_User' and Emp_Password = '$Emp_Password' and  Emp_Status = 'Admin' ";
    //SQL Query
    $query = mysqli_query($link,$sql);
    //SQL 
    $result = mysqli_fetch_assoc($query);  
    //SESSION MEMBER ID
    $_SESSION['global_member_id'] = $result['Emp_ID']; 

    if($result)
    {
        echo  "<script type='text/javascript'>
                    alert('Admin');
                    window.location = 'forAdmin.php';
                </script>";
    }
    else
    {
    $sql2 = "SELECT * FROM employee WHERE Emp_User = '$Emp_User' and Emp_Password = '$Emp_Password' and  Emp_Status = 'พนักงาน' and Emp_Status1 ='Y'  ";
    //SQL Query
    $query2 = mysqli_query($link,$sql2);
    //SQL 
    $result2 = mysqli_fetch_assoc($query2);  
    //SESSION MEMBER ID
    $_SESSION['global_member_id'] = $result2['Emp_ID']; 

    if($result2)
    {
        echo  "<script type='text/javascript'>
                    alert('พนักงาน');
                    window.location = 'foremployee.php';
                </script>";
    }
    else
    {
        echo  "<script type='text/javascript'>
                    alert('Login ไม่สำเร็จ, กรุณา Login อีกครั้ง');
                    window.location = 'Login.php';
                </script>";
    }  

    }
?>
