<?php
session_start();
require "conn.php";

if (isset($_POST['login-btn'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  $mysql_qry = "select * from user1 where username = '$username' and password = '$password'";
  $result = mysqli_query($conn ,$mysql_qry);

  if(mysqli_num_rows($result) == 1){
      $user = mysqli_fetch_assoc($result);

  	  if($user['type'] === "student"){
        $temp_userID = $user['userID'];
        $mysql_qry2 = "select * from student where userID = '$temp_userID'";
        $result2 = mysqli_query($conn ,$mysql_qry2);
        $student = mysqli_fetch_assoc($result2);
        $_SESSION['studentid'] = $student['studentID'];
        $_SESSION['userid'] = $user['userID'];
        $_SESSION['type'] = $user['type'];
        header('location: ../student/studentHome.php');

      } else if ($user['type'] === "representative"){
        $temp_userID = $user['userID'];
        $mysql_qry2 = "select * from companyrep where userID = '$temp_userID'";
        $result2 = mysqli_query($conn ,$mysql_qry2);
        $rep = mysqli_fetch_assoc($result2);
        $_SESSION['compID'] = $rep['compID'];
        $_SESSION['repID'] = $rep['repID'];
        $_SESSION['userid'] = $user['userID'];
        $_SESSION['type'] = $user['type'];
        header('location: ../company/companyHome.php');

      } else if ($user['type'] === "admin"){
        $_SESSION['userid'] = $user['userID'];
        $_SESSION['type'] = $user['type'];
        header('location: ../admin/adminHome.php');

      } else if ($user['type'] === "instructor"){
        $_SESSION['userid'] = $user['userID'];
        $_SESSION['type'] = $user['type'];
        header('location: ../instructor/instructorHome.php');
      }
    

  }
  else {
      $error= "Wrong Credintials! Try Again";
      echo "<script type='text/javascript'>alert('$error');</script>";
      echo "<script type='text/javascript'>window.location.href = '../Login.html';</script>";
  }
}

 mysqli_close($conn);

?>
