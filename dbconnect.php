<?php
     $conn = mysqli_connect('localhost', 'root', '', 'web_tb') or die('không kết nối được');

     $conn->query("SET NAMES 'utf8mb4'");
     $conn->query("SET CHARACTER SET UTF8 ");
     $conn->query("SET SESSION collation_connection =  'utf8mb4_unicode_ci'"); //unicode hoặc general
?>