<!DOCTYPE html>
<html lang="en-us" dir="ltr">
    <head>
        <meta http-equiv="Content-Type" content="text/html, charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Student | Communication</title>    
        
        <meta name="description" content="admas university e-learning managment system mekanisa campuse prepared for computer science department, this often involves both out of class and in classroom educational experiences via technology.">
        <meta name="type" content="website">
        <meta name="keywords" content="admas, admas university, admas university mekanisa, e-learning managment system, au e-learning managment, au e-learning managment system,">
        <meta name="author" content="Firomsa Umer ali, Blue Diamond developer Group,">

		<link rel="shortcut icon" type="image/x-icon" href="../images/Logo-Icons.png"/>
        <link rel="stylesheet" type="text/css" href="../icon/svg-with-js/css/fa-svg-with-js.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
  </head>
  <body>

    <!-- === Header === -->
    <header id="top-header" class="bg-success">
        <div class="top-tol">
            <ul>
                <div id="logo">
                    <a><img src="../images/Logoo.png" alt="admas university e-learning managment system logo" title="AU e-learning management"></a>
                    <!-- <label id="l1">e-learning</label> -->
                </div>

                <div class="dropdown myac">
                    <a id="a1" class="btn btn-outline-info dropdown-toggle" href="#" role="button" id="dpMLink" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user-circle"></i>&nbsp;<label>profile</label></a>

                    <ul class="dropdown-menu" aria-labelledby="dpMLink">
                        <li class="dropdown-item"><a href="update_profile.php"><i class="fas fa-user-cog"></i> Update Profile</a></li>
                        <li class="dropdown-item"><a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                </div>

            </ul>
        </div>
    </header>  

    <!-- === Header Navigation === -->
    <nav class="navbar navbar-expand-md bg-dark navbar-dark" style="margin-bottom: 0px;">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a href="../index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="../reference.php" class="nav-link">References</a></li>
                    <li class="nav-item"><a href="../contact.php" class="nav-link">Contact</a></li>
                    <li class="nav-item"><a href="../about.php" class="nav-link">About Us</a></li>
                </ul>
            </div>
        </div>
    </nav>      
		
	<div class="wrapper d-flex align-items-stretch">
		
        <nav id="sidebar">
                <div class="p-4 pt-5">
                <div class="row">
                    <div class="col">
                        <a href="update_profile.php" class="img logo rounded-circle mb-5" style="background-image: url(../images/avatar.jpg);"><br><br><br><br><br>   
                            <center><style type="text/css">
                                .stud_name {
                                    color: #444;
                                    line-height: 2.0em;
                                    margin: 15x 0px 10px 0px;
                                }
                            </style><h5 class="stud_name">Student Name</h5></center>
                        </a>
                    </div>
                </div><br><br>
                    <ul class="list-unstyled components mb-5">
                       <li><a href="#"><i class="fas fa-street-view"></i> View Result</a></li>
                       <li><a href="#"><i class="fas fa-eye"></i> View Total Courses</a></li>
                       <li><a href="#"><i class="fas fa-file-signature "></i> Take Exam</a></li>
                       <li><a href="#"><i class="fas fa-file-export"></i> Submit Assignment</a></li>
                       <li><a href="#"><i class="fas fa-shopping-basket"></i> Available Materials</a></li>
                        <li><a href="s_code_editor.php"><i class="fas fa-code"></i> code editor</a></li>
                       <li><a href="#" class="text-warning"><i class="fas fa-comments"></i> Communication</a></li>
                    </ul>

                    <div class="footer">
                        Admas University &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Designed By Blue Diamond Squad 
                   </div>

               </div>
           </nav>

            <!-- Page Content  -->
            <div id="content" class="p-4 p-md-5">

                <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
                    <div class="container">
                        
                        <button type="button" id="sidebarCollapse" class="btn btn-primary">
                            <i class="fas fa-bars"></i>
                            <span class="sr-only">Toggle Menu</span>
                        </button>

                        <div class="container">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-md-6 text-center">
                                    <div class="card bg-light col-md mt-1" style="border-style: none;">
                                        <div class="card-body">
                                            <h4 class="card-title"><i class="fas fa-comments"></i> <strong>Communication</strong></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </nav> 

            <section class="p-5">
                <div class="container">
                    <div class="row g-4 mx-0">

                        <a href="#" class="col-md-4" style="text-decoration: none;">
                            <div class="card bg-primary text-white shadow border">
                                <div class="card-body">
                                    <h5 class="text-center"><i class="fas fa-angle-double-right "></i> Send Messege</h5>
                                    <hr>
                                </div>
                            </div>
                        </a>

                        <a href="sc_sent_message.php" class="col-md-4" style="text-decoration: none;">
                            <div class="card bg-secondary text-white">
                            <div class="card-body">
                                <h5 class="text-center"><i class="fas fa-inbox"></i> Sent Messege</h5>       
                            </div>
                            </div>
                        </a>

                        <a href="sc_inbox.php" class="col-md-4" style="text-decoration: none;">
                            <div class="card bg-secondary text-white">
                            <div class="card-body">
                                <h5 class="text-center"><i class="fas fa-envelope-open"></i> Inbox</h5>                
                            </div>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
            <hr>   

        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form class="was-validated border p-4 mb-4 bg-light border shadow the_logo_form" action="index.php" method="post" name="form" onsubmit="return validated()">

                    <div class="mt-3 mb-3">
                        <style type="text/css">
                            select {
                                padding: 4px 10px;
                                border: none;
                                border-bottom: 1px solid silver;
                                outline: none;
                            }
                            select:focus {
                                background: lightblue;
                            }
                            select:hover {
                                border-color: red;
                            }
                        </style>
                        <label for="suser"><i class="fas fa-user"></i>&nbsp; Send To: </label>
                        <select name="suser" id="suser">
                            <option value=""> Select User</option>
                            <option value="student">Student</option>
                            <option value="teacher">Teacher</option>
                        </select>
                    </div>

                    <div class="mt-3 mb-3">
                        <label for="mail" class="form-lable"><i class="fas fa-envelope"></i> User Email</label>
                        <input type="email" class="form-control" name="email" id="mail" placeholder="Enter Your Email" required="required">
                            <div class="valid-feedback">good</div>
                            <div class="invalid-feedback">fill-out</div>   
                            <div id="email_error">email should be eight or greater than</div> 
                    </div>

                     <div class="mb-3">
                        <label for="sub" class="form-label"><i class="fas fa-file"></i> Subject</label>
                        <input type="text" class="form-control" name="subject" id="sub" placeholder="Enter the subject" required="required">
                            <div class="valid-feedback">good</div>
                            <div class="invalid-feedback">fill-out</div>    
                            <div id="sub_error">"4 or than word" about what u gonna give a comment.</div> 
                    </div>

                    <div class="mb-3">
                        <label for="messege"><i class="fas fa-comment-dots"></i> Messege</label>
                        <textarea class="form-control" rows="6" maxlength="400" name="text" id="messege" placeholder="Enter Your Messeage Here..." required="required"></textarea>
                            <div class="valid-feedback">good</div>
                            <div class="invalid-feedback">fill-out</div>   
                            <div id="comt_error">atleast try to write more 10 words!</div>    
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <button type="submit" class="btn-lg btn-success mb-3">Send Messeage</button>
                        </div> 

                        <div class="col-md-6 col-sm-12">
                            <button type="reset" class="btn-lg btn-danger">Reset</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
        <hr>
    </div>   
    </div>

    <script src="../icon/svg-with-js/js/fontawesome-all.js"></script>       
    <script src="../js/bootstrap.bundle.min.js"></script> 
    <script src="../js/jquery.min.js"></script>

    <script src="../js/app/main.js"></script>
  </body>
</html>