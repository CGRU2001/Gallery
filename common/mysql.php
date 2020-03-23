<?php
    function Connect($config = array()){
        $conn = mysqli_connect($config['host'], $config['username'], $config['password'], $config['database']);
        mysqli_set_charset($conn,$config['encoding']);
        return $conn;
    }
    function Execute($sql, $conn){
        $return = mysqli_query($conn, $sql);
        return ($return);
    }
?>