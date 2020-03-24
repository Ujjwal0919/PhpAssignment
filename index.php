<!DOCTYPE html>
<html lang="en">
 <?php
    $passerror=$nameErr=$emailErr="";
 if ($_SERVER["REQUEST_METHOD"] == "POST"){
     $pwd = $_POST["pass"];
     $rpwd = $_POST["re_pass"];
     if($pwd != $rpwd)
     {
         $passerror="Both fileds must have same value";
     }
     $name = $_POST["name"];
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
     $nameErr = "Only letters and white space allowed";
    }
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
    }
 }
 ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
     <!-- JS -->
     <script src="vendor/jquery/jquery.min.js"></script>
     <script src="js/main.js"></script>
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form id="signup-form" action="" name="register" onsubmit="return validate()" class="register-form"  method="POST">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" required >
                            </div>
                            <p class="error">
                             <?php echo $nameErr; ?>
                            </p>
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="username" placeholder="Username" required >
                            </div>
                            <div class="form-group">
                                <label for="address"><i class="zmdi zmdi-home material-icons-name"></i></label>
                                <input type="text" name="address" id="address" placeholder="Address" required >
                            </div>
                            <div class="form-group">
                                <label for="mobile"><i class="zmdi zmdi-phone material-icons-name"></i></label>
                                <input type="number" name="mobile" id="mobile" placeholder="Mobile Number" required >

                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" required >
                            </div>
                            <p class="error">
                             <?php echo $nameErr; ?>
                            </p>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" required >
                                
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" required >
                            </div>
                            <div class="error">
                             <?php echo $passerror; ?>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="Signin.html" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
</html>

