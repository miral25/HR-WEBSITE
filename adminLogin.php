<!DOCTYPE html>
<html lang="en">

<head>
    <title>HR Website || Admin Login</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css" />
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/flatly/bootstrap.min.css" rel="stylesheet" />    

    <style>
        body {
        font-family:;       
        }   
        #container_center_div{
            margin:10% 35% ;
            border:solid thin #2C3E50;         
        }
        #container {
            padding-left:55px;
        }
        h4{
            border-bottom:solid thin #2C3E50;
            padding:3%;
        }
        form{
            padding:3%;             
        }
        #btn {
            width:100%;  
            margin-top:5%;                
        }
    </style>

</head>

<body>
    <?php
    include "dbConnection.php"; // Using database connection file here

        if(isset($_POST['submit']))
        {	
            session_start();

            $_SESSION['username'] = htmlentities($_POST['username']);
            $_SESSION['password'] = htmlentities($_POST['password']);

            $username = stripcslashes($_SESSION['username']);  
            $password = stripcslashes($_SESSION['password']);  
            $username = mysqli_real_escape_string($con, $_SESSION['username']);  
            $password = mysqli_real_escape_string($con, $_SESSION['password']);  

            $result = mysqli_query($con,"SELECT * FROM admin WHERE user_name = '$username' and password = '$password'") or die('Error'); 
            $count = mysqli_num_rows($result);

            if($count == 1){  
                header('Location: adminPanel.php');  
            }  
            else{  
                echo'<script type="text/javascript">                    
                            alert("Wrong Username or Password!");                 
                    </script>';
            }
            
        }
    ?>

    <div id="container_center_div">        
        <h4>Please Sign In</h4>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div id="mx-auto">
                <div class="form-group col-md-12">
                    <label  class="col-form-label">Username</label>                
                    <input type="text" class="form-control" placeholder="Username" name="username" required="required">               
                </div>
                <div class="form-group col-md-12">
                    <label for="inputPassword3" class="col-form-label">Password</label>               
                    <input type="password" class="form-control" placeholder="Password" name="password" required="required">            
                </div>
                <div class="form-group col-md-12">                
                    <button type="submit" name="submit" value="submit" class="btn btn-success" id="btn">Sign in</button>                
                </div>
            </div>
        </form>            
    </div>

</body>

</html>

