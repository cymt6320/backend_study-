<?php
    $host ="127.0.0.1"//localhost;
    $user ="root";
    $password="";
    $database="test";
    $link=mysql_connect($host,$user,$password,$database);
    $sql="CREATE TABLE users(
        'username' varchar(16) PRIMARY KEY,
        'password varcha(11) NOT NULL,
        'name' varchar(20) NOT NULL,
        'phone'varchar(10),
        'e-mail'varchar(50) NOT NULL)";
        $result=mysql_query($link,$sql);
        echo $sql

        ?>