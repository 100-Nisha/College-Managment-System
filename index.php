<?php include('includes/config.php') ?>
<?php include('header.php') ?>

<!--Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark" style ="background-color: #161C4F;   box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
    <a class="navbar-brand" href="#">  
        <img src="./assets/images/logo1.png" alt="Logo Image" class="logo-img" style = "height:60px">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
      aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
            </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Courses</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Events</a>
            </li>
            <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Dropdown
                </a>
                <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>  -->
        </ul>

         <ul class="navbar-nav ml-auto nav-flex-icons">
        
            <li class="nav-item dropdown">
            <?php if (isset($_SESSION['login'])) { ?>
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user mr-2"></i>Account
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-default"
                    aria-labelledby="navbarDropdownMenuLink-333">
                    <a class="dropdown-item" href="/MCA_FinalProject/admin/dashboard.php">Dashboard</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>

                <?php } else { ?>
                <a href="login.php" class="nav-link"><i class="fa fa-user mr-2"></i>User login</a>
                <?php } ?>
            </li>
        </ul>
    </div>
</nav>
<!--/.Navbar -->

<!--header-->
<div class="py-5 shadow header_content" >
    <div class="container-fluid my-2">
        <div class="row">
            <div class="col-lg-6 my-auto" style="padding-left: 15px; paddrgb(5, 49, 94)t: 15px;">
                <h1 class="display-3 font-weight-bold" style="font-size: 3.5rem; line-height: 1.2; color:#fff;">Collage Management System</h1>
                <p class="py-lg-4" style="padding-top: 1rem; padding-bottom: 1rem; font-size: 1.25rem; line-height: 1.75;  color:#fff;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, at?Lorem ipsum dolor ame.
                    Similique quia rerum aspernatur nostrum, sed dolorem.</p>
                <a href="#" class="btn btn-lg btn-call" style="display: inline-block; font-weight: 400; color: #fff; text-align: center; vertical-align: middle; -webkit-user-select: none; -moz-user-select: none; -ms-user-select: none; user-select: none; background-color: #007bff; border: 1px solid #007bff; padding: 0.5rem 1rem; font-size: 1.25rem; line-height: 1.5; border-radius: 0.25rem; transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;">Call to Action</a>
            </div>

            <div class="col-lg-6">
                <div class="col-lg-8 mx-auto card shadow-lg" style=" margin-left: auto; margin-right: auto; box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important; border: 1px solid rgba(0, 0, 0, 0.125); border-radius: 0.25rem;">
                    <div class="card-body" style="padding: 1.3rem;">
                        <h3 style="margin-bottom: 1.5rem;">Inquiry Form</h3>
                            <form action="#" method="post">
                                <div class="md-form" style="margin-bottom: 1rem;">
                                    <input type="text" id="form1" class="form-control" style="display: block; width: 100%; height: calc(1.5em + 0.75rem + 2px); padding: 0.375rem 0.75rem; font-size: 1rem; font-weight: 400; line-height: 1.5; color: #495057; background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da; border-radius: 0.25rem; transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;">
                                    <label for="form1" style="position: absolute; top: 0.375rem; left: 0.75rem; color: #495057; font-size: 1rem; pointer-events: none; transition: all 0.2s ease-in-out;">Your Name</label>
                                </div>

                                <div class="md-form" style="margin-bottom: 1rem;">
                                    <input type="email" id="email" class="form-control" style="display: block; width: 100%; height: calc(1.5em + 0.75rem + 2px); padding: 0.375rem 0.75rem; font-size: 1rem; font-weight: 400; line-height: 1.5; color: #495057; background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da; border-radius: 0.25rem; transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;">
                                    <label for="form1" style="position: absolute; top: 0.375rem; left: 0.75rem; color: #495057; font-size: 1rem; pointer-events: none; transition: all 0.2s ease-in-out;">Your Email</label>
                                </div>

                                <div class="md-form" style="margin-bottom: 1rem;">
                                    <input type="text" id="mobile" class="form-control" style="display: block; width: 100%; height: calc(1.5em + 0.75rem + 2px); padding: 0.375rem 0.75rem; font-size: 1rem; font-weight: 400; line-height: 1.5; color: #495057; background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da; border-radius: 0.25rem; transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;">
                                    <label for="form1" style="position: absolute; top: 0.375rem; left: 0.75rem; color: #495057; font-size: 1rem; pointer-events: none; transition: all 0.2s ease-in-out;">Your Mobile</label>
                                </div>

                                <div class="md-form" style="margin-bottom: 1rem;">
                                    <textarea name="" id="mobile" class="form-control" style="display: block; width: 100%; height: calc(1.5em + 0.75rem + 2px); padding: 0.375rem 0.75rem; font-size: 1rem; font-weight: 400; line-height: 1.5; color: #495057; background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da; border-radius: 0.25rem; transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;"></textarea>
                                    <label for="message" style="position: absolute; top: 0.375rem; left: 0.75rem; color: #495057; font-size: 1rem; pointer-events: none; transition: all 0.2s ease-in-out;">Your Query</label>
                                </div>

                                <button class="btn btn-lg btn-block btn-call" style="display: block; width: 100%; font-weight: 400; color: #fff; text-align: center; vertical-align: middle; -webkit-user-select: none; -moz-user-select: none; -ms-user-select: none; user-select: none; background-color: #007bff; border: 1px solid #007bff; padding: 0.5rem 1rem; font-size: 1.25rem; line-height: 1.5; border-radius: 0.25rem; transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;">Submit Form</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

 <!-- About us -->
<section class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-left">
                <h2 class="section-title">About <br> College Management System</h2>
                <div class="text-content">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque quidem id ad dolores iusto nobis sunt, atque, eligendi nesciunt ipsa aliquam mollitia nemo magnam quae adipisci libero voluptatum omnis vel. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo dicta ipsum ea sint quisquam sit dignissimos numquam. Velit aliquid necessitatibus id adipisci officiis nobis voluptates maiores consectetur, sunt nisi? Commodi.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam quos ab, recusandae repellendus cum quasi totam saepe sit earum tenetur modi vitae explicabo, neque, consequatur aut ipsam dolore magni laudantium?</p>
                </div>
                <a href="about-us.php" class="btn btn-secondary-btn">Know More</a>
            </div>
            <div class="col-right" style="background-image: url(./assets/images/about.jpg); "></div>
        </div>
    </div>
</section>

<!--Teacher Sectiion-->
<section class="teachers-section">
        <div class="teachers-text">
            <h2 class="teachers-heading">Our Teachers</h2>
            <p class="teachers-para">Meet our dedicated and experienced instructors who are passionate about guiding you on your learning journey.</p>
        </div>

        <div class="teachers-container">
            <div class="teachers-row">
                <?php for ($i = 0; $i < 6; $i++){ ?>
                <div class="teachers-Content">
                    <div class="teachers-card">
                        <div class="teachers-avatar">
                            <img src="./assets/images/image.png" alt="Teacher's Name" class="teachers-avatar-img ">
                        </div>
                        <div class="teachers-card-body">
                            <h5 class="teachers-card-title">Teacher's Name</h5>
                            <p class="rating">
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                            </p>
                            <p class="teachers-card-text">
                                <b>Courses: </b> 5 <br>
                                <b>Ratings: </b> 4.8 (120 Reviews)
                            </p>

                            <div class="teachers-social">
                                <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
         </div>
</section>

<!-- Acheivements -->
<section class="achievements-section">
    <div class="container">
        <div class="row">
            <div class="col-left-achi">
                <h2>Achievements</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, commodi laboriosam. Ullam aliquam dicta officiis accusamus.</p>
                <img src="./assets/images/achi.jpg" alt="Still Life" class="responsive-image">
            </div>
            <div class="col-right-achi">
                <div class="row">
                    <div class="col-item ">
                        <div class="card-container">
                            <div class="card-body-containt">
                                <span><i class=" fas fa-graduation-cap"></i></span>
                                <h2 class="count">334</h2>
                                <hr class="divider">
                                <h4>Graduates</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-item">
                        <div class="card-container">
                            <div class="card-body-containt">
                                <span><i class="fas fa-graduation-cap"></i></span>
                                <h2 class="count">334</h2>
                                <hr class="divider">
                                <h4>Graduates</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-item">
                        <div class="card-container">
                            <div class="card-body-containt">
                                <span><i class=" fas fa-graduation-cap"></i></span>
                                <h2 class="count">334</h2>
                                <hr class="divider">
                                <h4>Graduates</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-item">
                        <div class="card-container">
                            <div class="card-body-containt">
                                <span><i class=" fas fa-graduation-cap"></i></span>
                                <h2 class="count">334</h2>
                                <hr class="divider">
                                <h4>Graduates</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- course-->
<section class = "course-section" >
    <div class= "course-text-center">
        <h2 class = "course-title">Our Class</h2>
        <p class = "course-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, autem?</p>
    </div>

    <div class = "course-container">
        <div class = "course-row">

        <?php /*for($i = 0; $i < 6; $i++) {*/
        $query = mysqli_query($db_conn,"SELECT * FROM courses ORDER BY id DESC LIMIT 0, 8");
        while($course = mysqli_fetch_object($query))
        {
        ?>  
        <div class = "course-content">
            <div class = "course-card">
                <div class="course-image-container">
                    <img src="./dist/uploads/<?php echo $course->image?>" alt="" class= "img-fluid rounded-top course-image">
                </div> 
            <div class = "course-card-body">
                <b><?php echo $course->name?></b>
                <p class = "course-card-text">
                    <b>Duration: </b> <?php echo $course->duration?> <br>
                    <!-- <b>Price:</b> 4000/- Rs -->
                </p>
            </div>
            <button class = "enroll-button">Enroll Now</button>
        </div>
        </div>
        <?php } ?>
    </div>
</section>

<!-- Testimonials -->
<section class="testimonial-section">
        <div class="testimonial-header">
            <h2 class="testimonial-title">What People Say</h2>
            <p class="testimonial-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus perspiciatis obcaecati facilis nulla</p>
        </div>
        <div class="testimonial-container">
            <div class="testimonial-item">
                <div class="testimonial-quote">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus corporis quasi dolorum officia illum, cumque quo accusamus expedita dignissimos eligendi libero eum perferendis quos, aliquid assumenda! Cumque a quis molestias.</p>
                    <i class="fas fa-quote-left quote-icon">“</i>
                </div>
                <div class="testimonial-author">
                    <img src="./assets/images/ter1.png" alt="Author" class="author-image">
                    <h6 class="author-name">Name Of Candidate</h6>
                    <p class="author-designation"><i>Designation</i></p>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-quote">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus corporis quasi dolorum officia illum, cumque quo accusamus expedita dignissimos eligendi libero eum perferendis quos, aliquid assumenda! Cumque a quis molestias.</p>
                    <i class="fas fa-quote-left quote-icon">“</i>
                </div>
                <div class="testimonial-author">
                    <img src="./assets/images/ter1.png" alt="Author" class="author-image">
                    <h6 class="author-name">Name Of Candidate</h6>
                    <p class="author-designation"><i>Designation</i></p>
                </div>
            </div>
        </div>
</section>

<!-- footer -->
<footer class="custom-footer">
    <div class="footer-content">
        <div class="footer-container">
            <div class="footer-row">
                <div class="footer-col-4">
                    <h5>Useful Links</h5>
                    <ul class="link-list">
                        <li><a href="#" class="link-item">Home</a></li>
                        <li><a href="#" class="link-item">About Us</a></li>
                        <li><a href="#" class="link-item">Courses</a></li>
                        <li><a href="#" class="link-item">Terms & Conditions</a></li>
                        <li><a href="#" class="link-item">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h5>Social Presence</h5>
                    <div class="social-icons">
                        <a href="#" class="social-icon"><i class='bx bxl-facebook'></i></a>
                        <a href="#" class="social-icon instagram"><i class='bx bxl-instagram'></i></a>
                        <a href="#" class="social-icon twitter"><i class='bx bxl-twitter'></i></a>
                        <a href="#" class="social-icon linkedin"><i class='bx bxl-linkedin'></i></a>
                        <a href="#" class="social-icon youtube"><i class='bx bxl-youtube'></i></a>
                    </div>
                </div>
                <div class="footer-col-4">
                    <h5>Subscribe Now</h5>
                    <form action="">
                        <div class="footer-form-group">
                            <input type="email" id="email-s" class="footer-form-input" placeholder="Your Email">
                        </div>
                        <button class="submit-button">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- copy write-->
<section class="footer-section">
    <div class="foot-container">
        Copyright 2025 All Rights Reserved. <a href="#" class="footer-link">College Management System</a>
    </div>
</section>

<?php include('footer.php') ?>