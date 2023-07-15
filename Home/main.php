<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Project Support System</title>
        <link rel="stylesheet" href="css/style.css">
          
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    </head>
    <body>
      

        <div class="wrapper">
            <div class="navbar">
                <div class="icon">
                    <h2 class="logo">ProSyst</h2>
                </div>

                <div class="menu">
                    <ul>
                        <li><a href="#">HOME</a></li>
                        <li><a href="Blog/blog-layout.html" target="_blank">BLOG</a></li>
                        <li><a href="#">SERVICE</a></li>
                        <li><a href="About/index.html" target="_blank">ABOUT</a></li>
                        <li><a href="Contact/index.html">CONTACT</a></li>
                    </ul>
                </div>

                <div class="search">
                    <input class="srch" type="search" name="Search" placeholder="Type To text">
                    <a href="#"> <button class="btn">Search</button></a>
                </div>

            </div> 
            <div class="content">
                <h1>Building a Brighter <br><span>Academic Future</span> <br>Together<br> </h1>
                <p class="par">Providing a centralized platform for students to collaborate with experts and 
                    access the resources<br>for your need to complete projects, assignments, and research. 
                    <br>So grab your service right now!</p>

                <button class="cn"><a href="Service/index.html">Order Now</a></button>

                <div class="form">
                    <h2>ProSyst</h2>
                    <form method="post" action="main.php">
                        <?php include('errors.php'); ?>
                    <input type="text" name="username" placeholder="Enter User Name">
                    <input type="password" name="password" placeholder="Enter Password Here">
                    <button class="btnn" name="login_user"><a href="#">Login</a></button>

                    <p class="link">Don't have an account<br>
                        <a href="register.php">Sign up </a> here</p>
                    <p class="liw">Log in with</p>
                    </form>

                    <div class="icons">
                        <a href="https://www.facebook.com"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="https://www.instagram.com"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="https://www.twitter.com"><ion-icon name="logo-twitter"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
                    </div>

                </div>
            </div>
             
        </div>
        
 
        <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
         
    </body>
</html>