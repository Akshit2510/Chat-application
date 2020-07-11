<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
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
                    <h2>Login</h2>
                    <p>Login to Chat</p>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter Email" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="pass" class="form-control" placeholder="Enter Password" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <button type="submit" name="sign_in" class="btn btn-primary btn-block btn-lg">Login</button>
                </div>
                <div class="text-center small"><a href="forgot_pass.php">Forgot Password?</a></div>
                <div class="text-center small" style="color:#674288;margin-top:10px;"><a href="signup.php">Don't have an account?</a></div>
                <?php include("signin_user.php"); ?>
            </form>
        </div>
    </body>
</html>