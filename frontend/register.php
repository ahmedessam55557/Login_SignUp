<?php

session_start();

$msg = NULL;
$errors = [];
$old = [];

if (isset($_SESSION['errors'])) {
    $errors = $_SESSION['errors'];
    unset($_SESSION['errors']);
}

if (isset($_SESSION['old'])) {
    $old = $_SESSION['old'];
    unset($_SESSION['old']);
}

if (isset($_SESSION['message'])) {
    $msg = $_SESSION['message'];
    unset($_SESSION['message']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="images/img-01.png" alt="IMG">
                </div>

                <form class="login100-form validate-form" action="../backend/register.php" method='POST'>
                    <span class="login100-form-title">
                        Member Register <br>
                        <?php echo $msg; ?>
                    </span>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="fname" placeholder="First Name" value="<?php if (array_key_exists('fname', $old)) {
                                                                                                                echo $old['fname'];
                                                                                                            } ?>">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <p>
                        <?php
                        if (array_key_exists('fname', $errors)) {
                            echo $errors['fname'];
                        }
                        ?>

                    </p><br>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="lname" placeholder="Last Name" value="<?php if (array_key_exists('lname', $old)) {
                                                                                                            echo $old['lname'];
                                                                                                        } ?>">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <p>
                        <?php
                        if (array_key_exists('lname', $errors)) {
                            echo $errors['lname'];
                        }
                        ?>
                    </p><br>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="email" placeholder="Email" value="<?php if (array_key_exists('email', $old)) {
                                                                                                        echo $old['email'];
                                                                                                    } ?>">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <p>
                        <?php
                        if (array_key_exists('email', $errors)) {
                            echo $errors['email'];
                        }
                        ?>
                    </p><br>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <p>
                        <?php
                        if (array_key_exists('password', $errors)) {
                            echo $errors['password'];
                        }
                        ?>
                    </p><br>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="password" name="cpassword" placeholder="Confirm Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <p>
                        <?php
                        if (array_key_exists('message', $errors)) {
                            echo $errors['message'];
                        }

                        echo $msg;
                        ?>
                    </p>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" name="register_btn">
                            Sign Up
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>