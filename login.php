<?php include('header.php') ?>

<div class = "login-wrapper">
    <section class="login-section">
        <div class="login-container">
            <div class="login-card">
                <div class="login-card-body">
                    <div class="login-icon-container ">
                        <i class="fa fa-user login-icon"></i>
                    </div>
                    <form action="actions/login.php" method="POST">
                        <div class="login-input-group">
                        <input type="text" id="email" name="email" class="login-input" placeholder=" ">
                        <label for="email" class= "login-label">Your Email</label>
                        </div>
                        <div class="login-input-group">
                        <input type="password" id="password" name="password" class="login-input" placeholder=" ">
                        <label for="password" class= "login-label">Your Password</label>
                        </div>
                        <div class="login-button-container">
                        <button class="login-button" name="login">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include('footer.php') ?>