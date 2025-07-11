<?php
   // session_start(); 
   $site_url = 'http://localhost:8012/MCA_FinalProject/';
    if(isset($_SESSION['login']))
    {
    if(isset($_SESSION['user_type']) && $_SESSION['user_type'] != 'teacher')
    {
        $user_type = $_SESSION['user_type'];
        header('Location: /MCA_FinalProject/'.$user_type.'/dashboard.php');
    }
    }
    else 
    {
    header('Location: ../login.php');
    }

  $std_id = $_SESSION['user_id'];
  $student = get_user_data($std_id);
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Teacher | Dashboard </title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>

  <style>

    body {
        font-family: Arial, sans-serif;
    }


    .card {
        margin-bottom: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .table {
        width: 100%;
        margin-bottom: 1rem;
        color: #212529;
    }

    .table th,
    .table td {
        padding: 0.75rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
    }

    .table tbody tr:hover {
        background-color: #f5f5f5;
    }

    .btn {
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn-success {
        background-color: #28a745; 
        color: white;
    }

    .btn-success:hover {
        background-color: #218838; 
    }

    .form-control {
        padding: 10px;
        border: 1px solid #ced4da;
        border-radius: 5px;
        transition: border-color 0.3s ease;
    }

    .form-control:focus {
        border-color: #80bdff; 
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, .25); 
    }



        .chat-message {
            margin: 10px 0;
        }
        .msg-sender {
            font-weight: bold;
        }
        .msg-time {
            font-size: 0.8em;
            color: grey;
        }
        .user-msg {
            padding: 10px;
            background-color: #e9ecef;
            border-radius: 15px;
            max-width: 70%;
        }
        .reply-msg {
            padding: 10px;
            background-color: #007bff;
            color: white;
            border-radius: 15px;
            max-width: 70%;
        }



    </style>
    
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
