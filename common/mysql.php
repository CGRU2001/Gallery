<?php
    function Connect($config = array()){
        $conn = mysqli_connect($config['host'], $config['username'], $config['password'], $config['database']);
        mysqli_set_charset($conn,$config['encoding']);
        return $conn;
    }

?>