<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Roboto:|Courgette|Pacifico:400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/signup.css">
    </head>
    <body>
        <div class="signup-form">
            <form action="" method="post">
                <div class="form-header">
                    <h2>Register</h2>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="user_name" class="form-control" placeholder="Enter Username" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="user_email" class="form-control" placeholder="Enter Email" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="user_pass" class="form-control" placeholder="Enter Password" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label>Country</label>
                    <select class="form-control" name="user_country" required>
                        <option disabled="">--Select Country--</option>
                        <option>India</option>
                        <option>America</option>
                        <option>Canada</option>
                        <option>Russia</option>
                        <option>Bangladesh</option>
                        <option>London</option>
                        <option>New Zealand</option>
                        <option>Dubai</option>    
                    </select>
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <select class="form-control" name="user_gender" required>
                        <option disabled="">--Select Gender--</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Others</option>    
                    </select>
                </div>
                <div class="form-group">
                    <label class="checkbox-inline"><input type="checkbox" required>I accept the<a href="#"> terms of use </a>&amp;<a href="#"> Privacy Policy</a></label>
                </div>
                <div class="form-group">
                    <button type="submit" name="sign_up" class="btn btn-primary btn-block btn-lg">Register</button>
                </div>
                <?php include("signup_user.php"); ?>
                <div class="text-center small" style="color:#674288;margin-top:10px"><a href="signin.php">Already have an account?</a></div>
            </form>
        </div>
    </body>
</html>