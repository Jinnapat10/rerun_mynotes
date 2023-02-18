<?php

    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'my_notes');

    class DB_con {
        function __construct() {
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
            $this->dbcon = $conn;

            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
        }

        public function insert($name, $detail) {
            $result = mysqli_query($this->dbcon, "INSERT INTO mynotes(name, detail) VALUES('$name', '$detail')");
            return $result;
        }

        public function fetchdata() {
            $result = mysqli_query($this->dbcon, "SELECT * FROM mynotes ORDER BY date DESC");
            return $result;
        }

        public function fetchonerecord($noteid) {
            $result = mysqli_query($this->dbcon, "SELECT * FROM mynotes WHERE id = '$noteid'");
            return $result;
        }

        public function update($name, $detail, $noteid) {
            $result = mysqli_query($this->dbcon, "UPDATE mynotes SET name = '$name', detail = '$detail' WHERE id = '$noteid'");
            return $result;
        }

        public function delete($noteid) {
            $deleterecord = mysqli_query($this->dbcon, "DELETE FROM mynotes WHERE id = '$noteid'");
            return $deleterecord;
        }
    }

?>