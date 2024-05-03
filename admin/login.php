<?php 
session_start();
include "../assets/php/db_conn.php";

//$username = $_SESSION["username"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoCircle login</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../assets/css/login.css">

</head>
<body>

    <section>         
        <div class="container">
              <div class="login-card">
                
                  <h4>Login</h4>
                  <h6>Welcome back! Log in to your account.</h6>
                  <form class = "login-form" action="../assets/php/login_process.php" method="POST">
                    <div class="form-group">
                      <label>username or email address</label>
                      <div class="input-group"><span class="input-group-text"><i class='bx bxs-envelope'></i></span>
                        <input class="form-control" type="username" name="username" required="" placeholder="username">
                      </div>
                    </div>
                    <div class="form-group">
                      <label>password</label>
                      <div class="input-group"><span class="input-group-text"><i class='bx bxs-lock-alt' ></i></span>
                        <input class="form-control" type="password" name="password" required="" placeholder="*********">
                        <div class="show-hide"><span class="show">                         </span></div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="checkbox">
                        <input id="checkbox1" type="checkbox">
                        <label for="checkbox1">Remember password</label>
  
                        <div class="forgot-pass">
                          <a class="link" href="forget-password.html">Forgot password?</a>
                        </div>
                      </div>
                      
                    </div>
                    <div class="form-group">
                      <button class="btn btn-primary btn-block" type="submit">Sign in</button>
                    
                      <div class="register-link">
                        <p>Don't have account?<a class="ms-2" href="./registration-page.html">Create Account</a></p>
                      </div>
                    </div>
                  </form>
                  
              
            </div>
          </div>
        </div>
      </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>