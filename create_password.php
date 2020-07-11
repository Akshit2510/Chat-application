<!DOCTYPE html>
<html>
    <head>
        <title>Create Password</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Roboto:|Courgette|Pacifico:400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/signin.css">
    </head>
    <body>
        <div class="signin-form">
            <form action="" method="post">
                <div class="form-header">
                    <h2>Create New Password</h2>
                    <p>MyChat</p>
                </div>
                <div class="form-group">
                    <label>Enter Password</label>
                    <input type="password" name="pass1" class="form-control" placeholder="Enter Password" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" name="pass2" class="form-control" placeholder="Confirm Password" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <button type="submit" name="change" class="btn btn-primary btn-block btn-lg">Update</button>
                </div>
            </form>
        </div>
        <?php
            session_start();
            include("include/connection.php");
            if(isset($_POST['change']))
            {
                $user = $_SESSION['user_email'];
                $pass1 = $_POST['pass1'];
                $pass2 = $_POST['pass2'];
                if($pass1 != $pass2)
                {
                    echo "
                        <div class='alert alert-danger'>
                            <strong>Your new password didn't match with confirm password.</strong>
                        </div>
                    ";
                }
                if($pass1 < 8 || $pass2 < 8)
                {
                    echo "
                        <div class='alert alert-danger'>
                            <strong>Password should be more than 8 characters.</strong>
                        </div>
                    ";
                }
                if($pass1==$pass2)
                {
                    $update_pass = mysqli_query($con,"update users set user_pass='$pass1' where user_email='$user'");
                    session_destroy();
                    echo "<script>alert('Password changed now you can login.')</script>";
                    echo "<script>window.open('signin.php','_self')</script>";
                }
            }
        ?>
    </body>
</html>