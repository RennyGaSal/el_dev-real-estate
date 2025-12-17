<?php

    function connectDB() : mysqli {
        $db = mysqli_connect('localhost', 'root', 'root*', 'realestate_crud');

        if (!$db) {
            echo "Error: Unable to connect to MySQL.";
            exit;
        } else {
            // echo "Success: A proper connection to MySQL was made.";
            return $db;
        }
    }