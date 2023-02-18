<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Notes</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <style>
        p {
          white-space: nowrap; 
          width: 200px; 
          overflow: hidden;
          text-overflow: ellipsis; 
          border: 1px solid light;
        }

        .col-2 {
            text-align: center;
        }
    </style>
</head>

<body>
    
    <nav class="navbar bg-dark">
        <div class="container-fluid justify-content-between">
            <a class="navbar-brand"></a>
            <a class="navbar-brand text-white">My Notes</a>
            <i class="fa-solid fa-circle-plus fa-2xl" style="color: white; cursor: pointer;" onclick="window.location='insert.php';"></i>
        </div>
    </nav>

    <div class="container mt-5">
        
        <?php

            include_once('connect_db.php');
            $fetchdata = new DB_con();
            $sql = $fetchdata->fetchdata();

            while ($row = mysqli_fetch_array($sql)) {

        ?>
            
            <?php $date = new DateTime($row['date']); ?>

            <h3 class="mt-3">วันที่ <?php echo $date->format('d/m/Y'); ?></h3>
            <div class="row">
                <div class="col-10 bg-light text-black p-3">
                <div style="cursor: pointer;" onclick="window.location='detail.php?id=<?php echo $row['id']; ?>';">
                    <b><?php echo $row['name']; ?></b>
                    <p><?php echo $row['detail']; ?></p>
                </div>
                </div>

                <div class="col-2 bg-light p-3">
                    <i class="fa-solid fa-circle-chevron-right fa-2xl" style=" cursor: pointer;" onclick="window.location='update.php?id=<?php echo $row['id']; ?>';"></i>
                </div>
            </div>
        <?php } ?>
    </div>



    <script src="https://kit.fontawesome.com/633b70146b.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>