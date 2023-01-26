<?php

include('connect.php');

$username=$_POST['username'];
$password=$_POST['password'];

$check="select * from `user2` where username='$username 'and password='$password'";

$result= mysqli_query($conn,$check);

if(mysqli_num_rows($result)>0)
{
    
    echo'
    <script>
    alert("login sucessfully");
    window.location="../api/userdash.php"
    </script>
    ';
}
else{
    echo '
     <script>
     alert("invalid credentials");
     
     window.location="../register.html";
    </script>
    ';
}


?>