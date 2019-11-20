<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Socio</title>
    <link rel="icon" href="logo.PNG">
    <meta name="theme-color" content="#3f51b5">
    <link rel="stylesheet" href="css/signin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <div class="signin-form">
        <form action="" method="post">
            <div class="form-header">
            <h2>Sign Up</h2>
            <p>The Coding Company</p>
            </div>
            <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="uname" class="form-control" placeholder="Example:Pavan"  required="">
            </div>
            <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="pwd" class="form-control" placeholder="passsword" autocomplete="off" required="">
            </div>
            <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="email" class="form-control" placeholder="Some@gmail.com" autocomplete="off" required="">
            </div>
    <div class="form-group">
   <label for="" class="checkbox-inline"><input type="checkbox" required="">I Accepted the <a href="#">Terms of User</a>&amp; <a href="#">Privacy Policy</a></label>
    </div>    
    
        <div class="form-group">
        
        <button type="submit" class="btn btn-primary btn-block btn-lg" name="SignUp">Sign Up</button>
        </div>
        <?php include("signup_user.php"); ?>
        </form>
        <div class="text-center small" style="color:#674288;">Already Have an Account <a href="signin.php">signin</a>
 </div>
    </div>
</body>
</html>