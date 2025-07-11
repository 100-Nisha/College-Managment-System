<?php 


  $db_conn = mysqli_connect('localhost', 'root', '','project_database');

  if (!$db_conn) {
    echo 'Connection Failed';
    exit;
  }

  session_start();
  date_default_timezone_set('Asia/Kolkata');
  include('functions.php');


 



    
?>