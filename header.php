<?php
//session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collage Managment System</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!--Box icon-->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
     <!-- Fony Awesome -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

    
    <style>
     @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

    *,
    *::before,
    *::after {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: 'poppins' sans-serif;

    }

    body {

        line-height: 1.6;
    }

    /*header section*/
    .header_content{
        background:  linear-gradient(0deg, hsl(0, 0%, 98%, 0.7) 4%, hsl(226, 84%, 31%, 0.5) 64%),url("./assets/images/banner.jpg");
        background-size: cover;
    }

    

    /* About section*/
    .about-section {
        padding: 5rem 0;
        background-image: radial-gradient(at bottom right,hsl(226, 84%, 31%, 0.3) 0%, #FFFFFF 70%);
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
    }

    .col-left {
        flex: 1;
        padding: 2rem;
    }

    .col-right {
        flex: 1;
        background-size: cover;
        background-position: center;
        min-height: 300px; 
        border-radius: 10px;
        margin-right: 1rem;
    }

    .col-right:hover{
        border: 3px solid #007bff;
        transform: scale(1);
    }

    .section-title {
        font-weight: 700;
        font-size: 2rem;
        margin-bottom: 1rem;
        
    }

    



    .text-content p {
        margin-bottom: 1rem;
    }

    .btn-secondary-btn {
        background-color: #007bff;
        color: white;
        padding: 0.5rem 1rem;
        text-decoration: none;
        border-radius: 5px;
    }

    .btn-secondary-btn:hover {
        background-color: #0056b3;
    }

    /* Teacher section */
    .teachers-section{
        padding: 5rem 20px;
        background-image: linear-gradient(120deg, #fdfbfb 0%,rgb(226, 226, 226) 100%);
        text-align: center; 
    }

    .teachers-text{
        margin-bottom: 3rem;
    }

    .teachers-heading {
        font-size: 2.5rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
    }

    .teachers-para {
        font-size: 1rem;
        font weight:400;
        color: #333;
    }

    .teachers-container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
    }

    .teachers-row {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin: 0 -15px;
    }

    .teachers-Content{
        padding: 0 15px;
        box-sizing: border-box;
        margin: 2rem ;
        width: 100%; 
    }

    .teachers-card {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
      /*  overflow: hidden;*/
        position: relative;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
        padding-top: 60px;
    }

    .teachers-card:hover {
        transform: translateY(-5px); 
    }


    .teachers-avatar {
        position: absolute;
        top: 10px;
        left: 50%;
        transform: translateX(-50%);
    }

    .teachers-avatar-img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        border: 3px solid #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);
    }

    .teachers-card-body {
        padding: 2rem;
       margin-top: 110px; 
    }

    .teachers-card-title {
        margin: 0;
    }

        
    .rating {
        margin: 0.5rem 0;
    }

    .star {
        color: #ffcc00; 
        font-size: 1.2rem;
    }

    .teachers-card-text {
        margin: 0.5rem 0;
        color: #555;
        font-size: 0.9rem;
    }

    .teachers-social {
        margin-top: 1rem;
    }

    .social-link {
        display: inline-block;
        margin: 0 0.5rem;
        color: #777;
        font-size: 1rem;
        text-decoration: none;
        transition: color 0.3s ease-in-out;
    }

    .social-link:hover {
        color: #007bff; 
    }
            
    /*Achivement section */    
    .achievements-section {
        padding: 5rem 0;
        background-image: linear-gradient(45deg, #93a5cf 0%, #e4efe9 100%);
        color: #333;
    }

    .container {
        width: 90%;
        max-width: 1200px;
        margin: 0 auto;
       
    }

    .row {
        display: flex;
        flex-wrap: wrap;
    }

    .col-left-achi {
        flex: 1;
        padding-right: 2rem;
        margin-bottom: 2rem;
    }

    .col-left-achi h2{
        font-size: 3rem;
        color: #333;
        font-weight: 700;
        margin-bottom: 10px;
       
    }

    .col-left-achi p{
        color: #555; 
        font-size: 1.1rem; 
        line-height: 1.6; 
    }

    .col-left-achi img{
        border-radius: 10px; 
        width: 100%; 
        height: auto;
        display: block; 
    }

    .col-left-achi img:hover{
        transform: scale(1.05);
        border: 2px solid #fff;
        transition: transform 0.3s ease-in-out, border 0.3s ease-in-out;
    }


    .col-right-achi {
        flex: 1;
        display: flex;
        align-items: stretch;
        flex-wrap: wrap; 
    }

    .col-item {
        flex: 1 1 calc(50% - 1rem); 
       /* margin-bottom: 2rem;*/
        margin-bottom: 2rem;
        color: #333;
        padding: 0.5rem;
        box-sizing: border-box;
        display: flex;
    }

    .card-container {
        border: 1px solid transparent;
        border-radius: 0.5rem;
        text-align: center;
        padding: 1.5rem;
        /*background: rgba(255, 255, 255, 0.1);*/
        background-color: #fff; 
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); 
        width: 100%; 
        display: flex;
        flex-direction: column;
        justify-content: center; 
        align-items: center; 

    }

    .card-body-containt {
        padding: 1rem;
    }

    .card-body-containt span i{
        color:#DAA520;
        font-size: 3rem;
        margin-bottom: 0.5rem;
    }

    .card-body-containt h4 {
        font-size: 1rem;
        color: #555;
        margin-top: 0.5rem;
    }

    .count {
        margin: 0.5rem 0;
        font-weight: bold;
        font-size: 1.75rem;
        color: #333;
    }

    .divider {
        border: none;
        border-top: 2px solid #DAA520; 
    }

    .responsive-image {
        width: 100%;
        height: auto;
    }

    /*testimonial */
    .testimonial-section {
        background-image: linear-gradient(45deg, #93a5cf 0%, #e4efe9 100%);
      /*  background-image: radial-gradient(at bottom right,hsl(226, 84%, 31%, 0.3) 0%, #FFFFFF 70%);*/
        padding: 4rem 0;
        text-align: center;
    }

    .testimonial-header {
        margin-bottom: 3rem;
    }

    .testimonial-title {
        font-size: 2.5rem; 
        font-weight: bold;
        color: #343a40; 
        margin-bottom: 0.5rem;
    }

    .testimonial-subtitle {
        color: #6c757d; 
        font-size: 1rem;
    }

    .testimonial-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 2.5rem; 
        padding: 0 1rem;
    }

    .testimonial-item {
        background-color: #fff;
        border: 1px solid #dee2e6; 
        border-radius: 0.5rem; 
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
        position: relative;
        width: 100%;
        max-width: 550px; 
        padding: 2rem;
        text-align: left;
    }

    .testimonial-quote {
        /*text-align: center;*/
        position: relative;
        margin-bottom: 1.5rem;
    }

    .quote-icon {
        font-size: 2.5rem;
        position: absolute;
        top: -0.5rem;
        left: 0.5rem;
        color:rgb(151, 156, 160); 
        opacity: 0.2;
    }

    .testimonial-quote p {
        font-style: italic;
        color: #495057; 
        line-height: 1.6; 
        padding-left: 2rem; 
    }

    .testimonial-author {
        display: flex;
        text-align: center;
        gap: 1rem;
        padding-top: 1rem; 
    }

    .author-image {
        border-radius: 50%;
        border: 2px solid #e9ecef; 
        width: 70px;
        height: 70px;
        object-fit: cover;
    }

    .author-name {
        margin-bottom: 0.2rem;
        font-weight: bold;
        color: #343a40; 
    }

    .author-designation {
        font-style: italic;
        color: #6c757d; 
        font-size: 0.9rem;
    }

    .testimonial-item:hover {
        transform: translateY(-5px); 
        box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.15); 
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    /*course section */
    .course-section{
        padding: 5rem 0;
        background-image: radial-gradient(at bottom right,hsl(226, 84%, 31%, 0.3) 0%, #FFFFFF 70%);
        /*background-image: linear-gradient(45deg, #93a5cf 0%, #e4efe9 100%);*/
        color: #333;
        opacity: 0;
        animation: fadeIn 0.5s ease-in-out forwards;
    }


    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    .course-text-center{
        text-align: center;
    }

    .course-title{
        font-weight: bold;
        font-size: 2rem;
    }

    .course-description {
        color: #6c757d;
    }

    .course-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
    }

        
    .course-row {
        display: flex;
        flex-wrap: wrap;
       /* margin: -15px;*/
        margin: 0; 
        gap: 30px; 
    }

    .course-content {
        padding: 0;
        width: calc(33.33% - 30px); 
        box-sizing: border-box;
    }

        
    .course-card {
        background: white;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.3s;
    }

    .course-card:hover {
        transform: translateY(-5px);
    }

    .course-image-container {
        overflow: hidden;
    }

    .course-image {
        width: 100%;
        height: 170px !important;
        object-fit: cover;
        object-position: center;
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
        transition: transform 0.3s ease-in-out;
    }

    .course-card-body {
        padding: 15px;
    }

    .course-card-text {
        margin: 0;
    }
    .course-card:hover .course-image {
        transform: scale(1.05); 
    }

        
    .enroll-button {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1rem;
        transition: background-color 0.3s;
    }

    .enroll-button:hover {
        background-color: #0056b3;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }



    /*footer */
    .custom-footer {
        background: url('./assets/images/ban.jpg') center/cover no-repeat;*/
        color: #f8f9fa;
    }

    .footer-content {
       background: rgba(0, 0, 0, 0.75);
       /* background-color: #161C4F; */
        padding: 2rem 1rem;
    }

    .footer-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .footer-row {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
    }

    .footer-col-4 {
        flex: 1;
        min-width: 250px; 
        padding: 2rem;
    }


    .footer-col-4 h5 {
        color: #ffffff; 
        margin-bottom: 1rem;
        border-bottom: 0.3rem solid #34495e; 
        padding-bottom: 1rem;
    }

    .link-list {
        list-style-type: none;
        padding: 0;
    }

    .link-item {
        color:rgb(199, 205, 212);
        text-decoration: none;
        display: block; 
        padding: 0.3rem 0;
        transition: color 0.3s ease;
    }

    .link-item:hover {
        color: #ffffff;
    }

    .social-icons {
        display: flex;
        gap: 1rem;
        align-items: center;
    }

    .social-icon {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 2.5rem;
        height: 2.5rem;
        background-color: #34495e;
        border-radius: 50%;
        color: #ffffff;
        text-decoration: none;
        font-size: 1.5rem; 
        transition: background-color 0.3s ease, color 0.3s ease;
      
    }

    .social-icon:hover {
        background-color: #5a6268; 
        color: #f8f9fa;
    }

    .social-icon.facebook { background-color: #3b5998; }
    .social-icon.facebook:hover { background-color: #4c70ba; }
    .social-icon.instagram { background: linear-gradient(45deg, #405de6, #5851db, #833ab4, #c13584, #e1306c, #fd1d1d); }
    .social-icon.instagram:hover { opacity: 0.9; }
    .social-icon.twitter { background-color: #1da1f2; }
    .social-icon.twitter:hover { background-color: #33b1ff; }
    .social-icon.linkedin { background-color: #0077b5; }
    .social-icon.linkedin:hover { background-color: #0091d2; }
    .social-icon.youtube { background-color: #ff0000; }
    .social-icon.youtube:hover { background-color: #ff3333; }

    .footer-form-group {
        margin-bottom: 1.25rem;
    }

    .footer-form-input {
        width: 100%;
        padding: 0.75rem;
        border: 1px solid #495057; 
        border-radius: 0.3125rem;
        background-color:rgb(66, 75, 84); 
        color: #f8f9fa;
        box-sizing: border-box;
        border-radius: 5px;
    }

    .footer-form-input::placeholder {
        color:rgb(212, 220, 227); 
    }

    .submit-button {
        background-color: #007bff;
        color: white;
        padding: 0.75rem 1.25rem;
        border: none;
        border-radius: 0.3125rem;
        cursor: pointer;
        width: 100%;
        font-size: 1rem;
        transition: background-color 0.3s ease;
    }

    .submit-button:hover {
        background-color: #5a6268;
    }

    /* copy write */
    .footer-section {
        padding: 20px 0; 
        background-color: #161C4F; 
        color: #f8f9fa; 
        text-align: center; 
    }

    .footer-container {
        max-width: 1200px; 
        margin: 0 auto; 
        padding: 0 15px; 
    }

    .footer-link {
        color: #ffffff; 
        text-decoration: none; 
         transition: color 0.3s ease, text-decoration 0.3s ease;
    }

    .footer-link:hover {
        color: #0056b3; 
        text-decoration: underline; 
    }

    /*Login Section */
    .login-wrapper{
        background:  linear-gradient(0deg, hsl(0, 0%, 98%, 0.7) 4%, hsl(226, 84%, 31%, 0.5) 64%),url("./assets/images/banner.jpg");
        background-repeat: no-repeat; 
        background-size: cover; 
        font-family: sans-serif;
        /*background-image: linear-gradient(45deg, #93a5cf 0%, #e4efe9 100%);*/
        margin: 0;
        display: flex;
        justify-content: center; 
        align-items: center; 
        min-height: 100vh; 
        padding: 0 20px;
    }

    .login-section {
        width: 100%;
        padding: 20px;
    }

    .login-container {
        width: 100%;
        max-width: 400px;
        margin: 0 auto;
    }

    .login-card {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 30px;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out; 
    }

    .login-card:hover {
        transform: translateY(-5px); 
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); 
    }

    .login-card-body {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .login-icon-container {
        display: flex; 
        justify-content: center; 
        align-items: center;
        width: 100px;
        height: 100px;
        border-radius: 50%;
        border: 3px solid #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.57);
        margin-bottom: 25px;
        animation: pulse 2s infinite alternate; 
        
    }

    @keyframes pulse {
        0% {
            transform: scale(1);
            opacity: 0.8;
        }
        100% {
            transform: scale(1.1);
            opacity: 1;
        }
    }

    .login-icon {
        font-size: 56px;
        color: #007bff; 
    }

    .login-input-group {
        background-color: #f4f4f4;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        /*min-height: 100vh;*/
        position: relative;
        margin-bottom: 25px;
    }

    .login-input {
        width: 100%;
       /* width: calc(100% - 20px);*/
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 16px;
        outline: none;
        transition: border-color 0.3s ease-in-out;
    }

    .login-label {
        position: absolute;
        top: 10px;
        left: 10px;
        color: #999;
        font-size: 16px;
        pointer-events: none;
        transition: 0.3s ease all;
    }

    .login-input:focus {
        border-color: #007bff; 
    }

    .login-label {
        position: absolute;
        top: 12px; 
        left: 12px; 
        color: #999;
        font-size: 16px;
        pointer-events: none;
        transition: 0.3s ease all;
    }

    .login-input:focus + .login-label,
    .login-input:not(:placeholder-shown) + .login-label {
        top: -8px;
        left: 5px;
        font-size: 12px;
        color: #007bff; 
        background-color: #fff;
        padding: 0 5px;
        border-radius: 2px; 
    }

    .login-button-container {
        display: flex;
        justify-content: center;
    }

    .login-button {
        background-color: #007bff; 
        color: #fff;
        border: none;
        border-radius: 6px;
        padding: 12px 24px;
        font-size: 18px;
        cursor: pointer;
        transition: background-color 0.3s ease,
        transform 0.2s ease-in-out;
    }

    .login-button:hover {
        background-color: #0056b3; 
        transform: scale(1.05);
    }

    .login-button:active {
        transform: scale(0.95); 
    }

    
/* Responsive Design */
@media (max-width: 768px) {
    /* about*/
    .row {
        flex-direction: column;
    }

    .col-left, .col-right {
        width: 100%;
    }

    .section-title {
        font-size: 1.5rem;
    }


    /* teacher sections */
    .teachers-Content {
        width: 50%; 
    }


    /*achivment */
    .row {
        flex-direction: column; 
    }

    .col-left-achi {
        padding-right: 0;
        margin-bottom: 2rem;
    }

    .col-right-achi {
        flex-direction: column; 
        align-items: stretch; 
    }

    .col-item {
        flex: 1 1 100%; 
        width: 100%;
        padding: 0;
    }


    /* testimonial*/
    .testimonial-item {
        max-width: 100%; 
    }
    .testimonial-quote p {
        padding-left: 1.5rem; 
    }
    .quote-icon {
        font-size: 2rem;
        top: -0.2rem;
        left: 0.2rem;
    }

    /*course section */
    .course-content {
        /*width: 100%;  One card per row */
        width: calc(50% - 30px);
    }

    .course-title {
        font-size: 1.75rem;
    }

    .course-description {
        padding: 0 10px;
    }

    /*footer */
    footer.row {
        flex-direction: column;
    }

    footer.col-4 {
        width: 100%;
        margin-bottom: 1.875rem;
    }

    /* copy */
      .footer-section {
        padding: 15px 0; 
    }
    
    .footer-container {
        padding: 0 10px; 
    }
}

@media (min-width: 992px) {
    .teachers-Content {
      /*  width: 33.333%  ; */
      width: calc(30% - 30px);
    }


    .teachers-card {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
       /* overflow: hidden;*/
        position: relative; 
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
    }

    .teachers-card:hover {
        transform: translateY(-5px); 
    }

    .teachers-avatar {
        position: absolute;
        top: 10px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 1; 
        width: 100px;
        height: 100px;
    }

    .teachers-avatar-img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        border: 3px solid #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);
        /*display: block;  Prevent extra space below the image 
        margin: 0 auto;  Center the image within the avatar container (optional, but good practice) */
        object-fit: cover;
    }

    .teachers-card-body {
        padding: 2rem;
        /*margin-top: 110px; */
    }

    .teachers-card-title {
        margin: 0;
    }

    .rating {
        margin: 0.5rem 0;
    }

    .star {
        color: #ffcc00; 
        font-size: 1.2rem;
    }

    .teachers-card-text {
        margin: 0.5rem 0;
        color: #555;
        font-size: 0.9rem;
    }

    .teachers-social {
        margin-top: 1rem;
    }

    .social-link {
        display: inline-block;
        margin: 0 0.5rem;
        color: #777;
        font-size: 1rem;
        text-decoration: none;
        transition: color 0.3s ease-in-out;
    }

    .social-link:hover {
        color: #007bff; 
    }

}

@media (max-width: 480px) {
    .course-content {
        width: 100%; /* One card per row on small screens */
    }


    .teachers-Content {
        width: 100%; /* Full width for very small screens */
    }
}

@media (max-width: 600px) {
    .login-card {
        padding: 20px; /* Reduce padding on smaller screens */
    }

    .login-icon {
        font-size: 48px; /* Slightly smaller icon */
    }

    .login-button {
        width: 100%; /* Full width button */
    }
}

</style> 
</head>
<body>