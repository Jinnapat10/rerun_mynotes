<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Note</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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

    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid justify-content-space-between">
            <i class="bi-arrow-left-circle" style="cursor: pointer;" onclick="window.location='index.php';"></i>
            <a class="navbar-brand">Note</a>
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>