<?php

    include_once('connect_db.php');

    $updatedata = new DB_con();

    if (isset($_POST['update'])) {
        $noteid = $_GET['id'];
        $name = $_POST['name'];
        $detail = $_POST['detail'];

        $sql = $updatedata->update($name, $detail, $noteid);
    
        if ($sql) {
            echo "<script>alert('Updated Successfully!');</script>";
            echo "<script>window.location.href='index.php'</script>";
        } else {
            echo "<script>alert('Something went wrong! Please try again!');</script>";
            echo "<script>window.location.href='update.php'</script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>

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
        <?php
            $noteid = $_GET['id'];
            $updatedata = new DB_con();
            $sql = $updatedata->fetchonerecord($noteid);
            while ($row = mysqli_fetch_array($sql)) {
        ?>

    <form action="" method="post">

    <nav class="navbar navbar-dark bg-dark top">
        <div class="container-fluid justify-content-space-between">
            <i class="bi-arrow-left-circle" style="cursor: pointer;" onclick="window.location='index.php';"></i>
            <a class="navbar-brand">Edit</a>
            <button type="submit" name="update" class="btn btn-light">Save</button>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="container mt-3">
            <label for="name" class="form-label">เรื่อง</label>
            <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>" required>
        </div>
        <div class="container mt-3">
        <label for="detail">รายละเอียด</label>
            <textarea name="detail" cols="20" rows="10" class="form-control" required><?php echo $row['detail']; ?></textarea>
        </div>
    </div>
    
    <nav class="navbar navbar-dark bg-dark fixed-bottom">
        <div class="container-fluid justify-content-space-between">
            <a></a>
            <a></a>
            <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-light" onclick="return confirm('Confirm deletion of note?');">Delete</a>
        </div>
    </nav>
    
</form>
<?php } ?>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>
