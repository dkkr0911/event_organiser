<?php

include('connect.php');

$username=$_POST['username'];
$password=$_POST['password'];

$check="select * from `admin2` where username='$username 'and password='$password'";

$result= mysqli_query($conn,$check);

if(mysqli_num_rows($result)>0)
{
    echo'
    <script>
    alert("login sucessfully");
    window.location="addash.php"
    </script>
    ';
}
else{
    echo '
     <script>
     alert("invalid credentials");
     window.location="../admin.html";
    </script>
    ';
}

?>