<!DOCTYPE html>
<html lang="en-us" dir="ltr">
    <head>
        <meta http-equiv="Content-Type" content="text/html, charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AU e-learning - Student Signin</title>    
        
        <meta name="description" content="admas university e-learning managment system mekanisa campuse prepared for computer science department, this often involves both out of class and in classroom educational experiences via technology.">
        <meta name="type" content="website">
        <meta name="keywords" content="admas, admas university, admas university mekanisa, e-learning managment system, au e-learning managment, au e-learning managment system,">
        <meta name="author" content="Firomsa Umer ali, Blue Diamond developer Group,">
        
        <link rel="shortcut icon" type="image/x-icon" href="images/Logo-Icons.png"/>
        <!--<link href="https://alx-apply.hbtn.io/level2/school.css" rel="stylesheet">-->
        <link  href="icon/svg-with-js/css/fa-svg-with-js.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="css/forms.css" rel="stylesheet">
    </head>
    
<body>

    <header id="top-header" class="bg-success">
        <div class="top-tol">
            <ul>

            <div id="logo">
                <a><img src="images/Logoo.png"></a>
                <!-- <label id="l1">e-learning</label> -->
            </div>

                <div class="dropdown myac">
                    <a id="a1" class="btn btn-outline-info dropdown-toggle" href="#" role="button" id="dpMLink" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-users"></i>&nbsp;<label>Accounts</label></a>

                    <ul class="dropdown-menu" aria-labelledby="dpMLink">
                        <li class="dropdown-item"><a id="active_page" href="#"><i class="fas fa-user-graduate"></i> Students</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li class="dropdown-item"><a href="t_signin.php"><i class="fas fa-chalkboard-teacher"></i> Teachers</a></li>
                    </ul>
                </div>

            </ul>
        </div>
    </header>

    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="reference.php" class="nav-link">References</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                <li class="nav-item"><a href="about.php" class="nav-link">About Us</a></li>
              </ul>
            </div>
        </div>
    </nav>

    <section class="mt-4 mb-2">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-6 p-2 bg-light border text-center">
                    <h1 class="text-secondary"><strong>Student Login</strong></h1>
                </div>
             </div>
        </div>
    </section>

    <div class="container">
    <hr>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form class="was-validated border p-4 mb-4 bg-light border shadow the_logo_form" action="home.html" method="post" name="form" onsubmit="return validated()">

                    <div class="mt-3 mb-3">
                        <label for="mail" class="form-lable"><i class="fas fa-envelope"></i> Email</label>
                        <input type="email" class="form-control" name="email" id="mail" placeholder="Enter Your Email" required="required">
                            <div class="valid-feedback">good</div>
                            <div class="invalid-feedback">fill-out</div>   
                            <div id="email_error">email should be eight or greater than</div> 
                    </div>

                    <div class="mb-3">
                        <label for="pswd" class="form-label"><i class="fas fa-lock"></i> Password</label>
                        <input type="password" class="form-control" name="password" id="pswd" placeholder="Enter Your Password" required="required">
                            <div class="valid-feedback">good</div>
                            <div class="invalid-feedback">fill-out</div>    
                            <div id="pass_error">Password must be six or greater than</div>
                    </div>

                    <div class="form-check mb-3">
                        <label for="checkbox" class="form-check-label">Remember Me</label>
                        <input type="checkbox" id="checkbox" name="remember" class="form-check-input">
                    </div>

                    <button type="submit" class="btn-lg btn-success mb-3 col-sm-12">Login</button>

                    <div class="row">
                        <div class="col-md">
                            <p class="mt-3 text-center text-secondary"><strong>Forget Password ?<a href="s_sys_gen_pass.html">&nbsp;Click Here</a></strong></p> 
                        </div>
                    </div>

                </form>

            </div>
        </div>
        <hr>

    </div>
     
    <script src="icon/svg-with-js/js/fontawesome-all.js"></script>       
    <script src="js/bootstrap.bundle.min.js"></script>   
    <script src="js/main.js"></script>
</body>    
</html
