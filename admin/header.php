<?php
   // session_start(); 
   $site_url = 'http://localhost:8012/MCA_FinalProject/';
    if(isset($_SESSION['login']) && $_SESSION['login'] == TRUE)
    {
    if(isset($_SESSION['user_type']) && $_SESSION['user_type'] != 'admin')
    {
        $user_type = $_SESSION['user_type'];
        header('Location: /MCA_FinalProject/'.$user_type.'/dashboard.php');
    }
    }
    else 
    {
    header('Location: ../login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Admin | Dashboard </title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <link rel="stylesheet" href="../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

 <!--<link rel="stylesheet" href="../plugins/calendar/zabuto_calendar.min.css">-->

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

    </style>


  
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
