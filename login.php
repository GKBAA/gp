<?php
include("connection.php");
$username=$_POST["username"];
$password=$_POST["password"];
$query="select * from student_registration where name='$username' && password='$password'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)){
    while($row=mysqli_fetch_array($result))
    {
        $name=$row["name"];
      
        $id=$row["id"];
        session_start();
        $_SESSION["id"]=$id;
        $_SESSION["name"]=$name;
    
        
    }
    echo  "<script>alert('Login successfull')</script>";
    echo "<script>window.location.href='main.html' </script>";
}
else
{
    echo  "<script>alert('Login failed')</script>";
    echo "<script>window.location.href='login.html' </script>";
}
?>
