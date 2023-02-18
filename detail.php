<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Note</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css");

        .bi-arrow-left-circle::before {
            display: inline-block;
            content: "\F12A";
            font-size: 2rem;
            color: #fff;
            padding: 5px;
        }
    </style>

</head>
<body>

    <nav class="navbar bg-dark">
        <div class="container-fluid justify-content-space-between">
            <i class="fa-solid fa-circle-chevron-left fa-2xl" style="color: white; cursor: pointer;" onclick="window.location='index.php';"></i>
            <a class="navbar-brand text-white">Note</a>
            <a href=""></a>
        </div>
    </nav>

    <div class="container mt-5">

    <?php
        include_once('connect_db.php');
        $noteid = $_GET['id'];
        $fetchdata = new DB_con();
        $sql = $fetchdata->fetchonerecord($noteid);
        while ($row = mysqli_fetch_array($sql)) {
    ?>

        <h3>เรื่อง</h3>
        <p><?php echo $row['name']; ?></p>
        <h3>รายละเอียด</h3>
        <p><?php echo $row['detail']; ?></p>

    <?php } ?>
    
    </div>

    <script src="https://kit.fontawesome.com/633b70146b.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>