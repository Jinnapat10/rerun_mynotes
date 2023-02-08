<?php

    include_once('connect_db.php');

    if (isset($_GET['id'])) {
        $noteid = $_GET['id'];
        $deletedata = new DB_con();
        $sql = $deletedata->delete($noteid);

        if ($sql) {
            echo "<script>alert('Record Deleted Successfully!');</script>";
            echo "<script>window.location.href='index.php'</script>";
        }
    }

?>