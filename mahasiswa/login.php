<?php

include_once 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Student Login Form | LMS </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
</head>

<br>

<div class="col-lg-12 text-center ">
    <h1 style="font-family:Lucida Console">Library Management System</h1>
</div>

<br>

<body class="login">


<div class="login_wrapper">

    <section class="login_content">
        <form name="form1" action="" method="post">
            <h1>User Login Form</h1>

            <div>
                <input type="text" name="username" class="form-control" placeholder="Username" required=""/>
            </div>
            <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required=""/>
            </div>
            <div>

                <input class="btn btn-default submit" type="submit" name="submit" value="Login">
                <a class="reset_pass" href="#">Lost your password?</a>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
                <p class="change_link">New to site?
                    <a href="registration.html"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br/>


            </div>
        </form>
    </section>


</div>


<?php

include_once 'connect.php';

if(isset($_POST['username']) && isset($_POST['password']))
{

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM mahasiswa WHERE username='$username' AND password='$password'";

    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    $user = $row['username'];
    $pass = $row['password'];
    $nim = $row['nim'];
    $nama = $row['nama'];

    if($username==$user && $password==$pass){

        session_start();
        $_SESSION['username'] = $user;
        $_SESSION['nama'] = $nama;
        $_SESSION['nim'] = $nim;

        ?>

        <script>window.location.href='dashboard.php'</script>
        <?php


    }
}

?>


</body>
</html>
