<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Notes</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <style>
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css");

        p {
          white-space: nowrap; 
          width: 200px; 
          overflow: hidden;
          text-overflow: ellipsis; 
          border: 1px solid light;
        }

        .bi-plus-circle::before {
            display: inline-block;
            content: "\F4FA";
            font-size: 2rem;
            color: #fff;
            padding: 5px;
        }
        .bi-arrow-right-circle::before {
            display: inline-block;
            content: "\F134";
            font-size: 2rem;
            color: #000;
            padding: 5px;
        }

        /* .bi-chevron-right::before {
            display: inline-block;
            content: "\F285";
            position: absolute;
            vertical-align: -.125rem;
            font-size: 1.5rem;
            color: #000;
            padding: 5px 0;
            width: 33px;
            height: 33px;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            border: 2px solid #000;
            text-align: center;
        } */

        .col-2 {
            text-align: center;
        }

        /* .bi ::before {
            font-family: 'Ionicons';
            content: '\F285';
            position: absolute;
            float: right;
            right: 1rem;
            font-size: 1rem;
            color: #000;
            padding: 5px;
            width: 30px;
            height: 30px;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            border: 1px solid #000;
            text-align: center;
        } */
    </style>
</head>

<body>
    
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid justify-content-space-between">
            <a href=""></a>
            <a class="navbar-brand">My Notes</a>
            <i class="bi-plus-circle" style="cursor: pointer;" onclick="window.location='insert.php';"></i>
        </div>
    </nav>

    <div class="container mt-5">
        
        <?php

            include_once('connect_db.php');
            $fetchdata = new DB_con();
            $sql = $fetchdata->fetchdata();
            while ($row = mysqli_fetch_array($sql)) {
        ?>

            
            <h3>วันที่ <?php echo $row['date']; ?></h3>
            <div class="row">
                <div class="col-10 bg-light text-black p-3">
                <div style="cursor: pointer;" onclick="window.location='detail.php?id=<?php echo $row['id']; ?>';">
                    <b><?php echo $row['name']; ?></b>
                    <p><?php echo $row['detail']; ?></p>
                </div>
                </div>

                <div class="col-2 bg-light p-3">
                    <i class="bi-arrow-right-circle" style="cursor: pointer;" onclick="window.location='update.php?id=<?php echo $row['id']; ?>';"></i>
                </div>
            </div>
        <?php } ?>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>