<?php

include("connect.php");

$name=$_POST['name'];
$address=$_POST['address'];
$date=$_POST['date'];
$event=$_POST['event'];
$mobile=$_POST['mobile'];




    $insert = "insert into `boooking`(name,address,date,event,mobile) values('$name','$address','$date','$event',$mobile)"; 
   $result=mysqli_query($conn,$insert);
    if($result)
    {
        echo '<script>
        alert("Booking sucessfully completed");
        alert("Our team will contact you soon");
        window.location="../book.html";
        </script>';
    }
    
    



?>


