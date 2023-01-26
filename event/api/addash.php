<?php

include('connect.php');
$result=mysqli_query($conn, "SELECT * FROM boooking");
if (mysqli_num_rows($result)<1){
    $result = null;
}


?>
    <!DOCTYPE html>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>addash</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/adstyle.css">
    </head>

    <body>
        <header class="header">

            <a href="#" class="logo"><span>e</span>vento</a>

            <nav class="navbar">
                <a href="../index.html">home</a>
                <a href="../logout.html">logout</a>
                <a href="">hello admin</a>
               
            </nav>

            <div id="menu-bars" class="fas fa-bars"></div>

        </header>


    <div class ="container">  
    <style>
        :root {
    --main-color: #3867d6;
}

        table {
          position: absolute;
          left:350px;
          top:230px;
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
        .heading {
            position: absolute;
                left: 450px;
                top: 150px;
                text-align: center;
                padding-bottom: 2rem;
                color: #fff;
                text-transform: uppercase;
                font-size: 4rem;
                   }

            .heading span {
                color: var(--main-color);
                        text-transform: uppercase;
                  }
 
        td {
            background-color: black;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
       
    </style>
          <h1 class="heading"> <span>Upcoming</span>Events</h1>
          <table>
          <tr>
                
                <th>Name</th>
                <th>Address</th>
                <th>Date</th>
                <th>Event</th>
                <th>Mobile no</th>
            </tr>
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['address'];?></td>
                <td><?php echo $rows['date'];?></td>
                <td><?php echo $rows['event'];?></td>
                <td><?php echo $rows['mobile'];?></td>
            </tr>
            <?php
              }
              ?>
        </table>
</div>
        <script src="" async defer></script>
    </body>

    </html>