<?php
include_once 'classes/db1.php';?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <title></title>
        <style>
            .bgImage {
                background-image: url(images/Cover-image-5-scaled.webp);
                background-size: cover;
                background-position: center center;
                height: 650px;
                margin-bottom: 25px;
            }
            span.error{
                color: red;
            }            
        </style>  
        <header class="bgImage" > 
    <nav class="navbar" >
        <div class="container">
        <div class="navbar-header"><!--website name/title-->
               
                <a class = "navbar-brand"></a>
        </div>
        </div><!--container div-->
    </nav>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
            </head>
    <body>
        <!--header content. file found in utils folder-->
        <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class ="col-md-6 col-md-offset-3">
                  
                    <form method="POST"><!--form-->
                      
                            <!--username field-->
                            <label>UserName:</label><br>
        <input type="text" name="name" class="form-control" required><br>
                            
                   
        <label>Password</label><br>
        <input type="password" name="password" class="form-control" required><br>
                        <button type = "submit" name="update" class = "btn btn-default">Login</button>
                    </form>
                </div><!--col md 6 div-->
            </div><!--container div-->
        </div><!--content div-->
    </body>
</html>
<?php
if (isset($_POST["update"]))
{
$myusername=$_POST['name'];
$mypassword=$_POST['password'];

if($mypassword=='admin' && $myusername=='admin')
{
    echo "<script>
    alert('Login Successfull');
    window.location.href='adminPage.php';
    </script>";
}
else
{
    echo "<script>
    alert('Invalid credentials');
    window.location.href='login_form.php';
    </script>";
}
}
?> 