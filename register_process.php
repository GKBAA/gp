<?php
include("connection.php");
$name=$_POST["fname"];
$email=$_POST["email"];
$password=$_POST["password"];
$gender=$_POST["gender"];
$query="insert into student_registration(name,email,password,gender)values('$name','$email','$password',
'$gender')";
$result=mysqli_query($con,$query);
if($result)
{
    echo  "<script>alert('Registration successfull')</script>";
    echo "<script>window.location.href='login.html'</script>";
}
else
{
    echo "<scipt> alert('Registration failed')</script>";
    echo "<script>window.location.href='register.html'</script>";

}




?>