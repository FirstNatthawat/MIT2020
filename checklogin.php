<?php
session_start();
if(isset($_POST['user_name'])){
    //connection
    include("connection_connect.php");
    //รับค่า user & password
    $user_name = $_POST['user_name'];
    $pass_word = $_POST['pass_word'];
    //query

    $sql="SELECT * FROM user Where user_name='".$user_name."' and pass_word='".$pass_word."' ";
    $result = mysqli_query($conn,$sql);

   // echo (string)$sql;
   // echo mysqli_num_rows($result);

    if(mysqli_num_rows($result)==1) {
        $row = mysqli_fetch_array($result);
      //  print_r($row);

        $_SESSION["user_id"] = $row["user_id"];
        $_SESSION["user_full_name"] = $row["name"]." ".$row["surname"];
        $_SESSION["user_role"] = $row["user_role"];

        if($_SESSION["user_role"]=="Admin"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php

            Header("Location:index_admin.php");
        }
          if ($_SESSION["user_role"]=="Student" || $_SESSION["user_role"]=="Teacher" ) { //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php
              Header("Location: user_page.php");
        }
    }else{
        echo "<script>";
        echo "alert(\" username หรือ  password ไม่ถูกต้อง\");";
        echo "window.history.back()";
        echo "</script>";

    }

}else
    {

    Header("Location: index.php"); //user & password incorrect back to login again
}
?>