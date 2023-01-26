<?php

include("connect.php");

$name=$_POST['name'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$cfpassword=$_POST['cfpassword'];
$username=$_POST['username'];


if($password!=$cfpassword)
{
     echo '<script>
          alert("password doest not match!!");
          window.location="../register.html";
     </script>';
}
else{
    $insert = "insert into `user2`(name,mobile,username,password) values('$name','$mobile','$username','$password')"; 
   $result=mysqli_query($conn,$insert);
    if($result)
    {
        echo '<script>
        alert("Registration sucessfully completed");
        window.location="../user.html";
        </script>';
    }
    else{
        echo '<script>
        alert("some error occure");
        window.location="../register.html";
        </script>';
    }
    
}


?>


