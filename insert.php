<?php

    include_once('connect_db.php');

    $insertdata = new DB_con();

    if (isset($_POST['insert'])) {
        $name = $_POST['name'];
        $detail = $_POST['detail'];
        // $date = $_POST['date'];

        $sql = $insertdata->insert($name, $detail);

        if ($sql) {
            echo "<script>alert('Record Inserted Successfully!');</script>";
            echo "<script>window.location.href='index.php'</script>";
        } else {
            echo "<script>alert('Something went wrong! Please try again!);</script>";
            echo "<script>window.location.href='insert.php'</script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Note</title>

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

    <form action="" method="post">
    <nav class="navbar bg-dark">
        <div class="container-fluid justify-content-space-between">
            <i class="fa-solid fa-circle-chevron-left fa-2xl" style="color: white; cursor: pointer;" onclick="window.location='index.php';"></i>
            <a class="navbar-brand text-white">New Note</a>
            <button type="submit" name="insert" class="btn btn-light">Save</button>
        </div>
    </nav>

    <div class="container mt-5">
        <label for="name" class="form-label">เรื่อง</label>
        <input type="text" class="form-control" name="name" required>
    </div>
    <div class="container mt-3">
    <label for="detail">รายละเอียด</label>
        <textarea name="detail" cols="20" rows="10" class="form-control" required></textarea>
    </div>
    </form>

    <script src="https://kit.fontawesome.com/633b70146b.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    
</body>
</html>