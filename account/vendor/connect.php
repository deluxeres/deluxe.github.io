<?php

    $connect = mysqli_connect('localhost', 'root', 'root', 'site');

    if (!$connect) {
        die('Error connect to DataBase');
    }