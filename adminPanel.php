<!DOCTYPE html>
<html lang="en">

<head>
    <title>HR Website || Admin Panel</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/flatly/bootstrap.min.css" rel="stylesheet" />
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

    <style>
        body {
            font-family:;            
        }

        a{
            color:white;           
        }
        
        a:hover{
            opacity:0.7;  
            color:white;                          
        }

        #logout{
            margin-left:70%;
            border:solid thin;
            border-radius: 5px;                    
        }

        .sidenav {
            height: 100%;
            width: 15%; 
            position: fixed; 
            top: 9.6%;    
            background-color: #2C3E50;      
            padding-left: 1%;
            padding-right: 1%;
            border-top:solid;
            border-width: thin;     
            border-color:white
        }

        .sidenav a {
            padding: 10%;
            text-decoration: none;
            font-size: 130%;
            color: white;
            display: block;
        }

        #numList{
            width:100%;
            margin-left:20%;             
        }

        #dash_hover:hover{            
            background-color: #2C3E50;  
            opacity:1;
        }

        .fix_position{
            position:fixed;
            margin-top:6%;
            margin-left:20%;
        }
    </style>
</head>

<body>

    <?php
    include "dbConnection.php"; // Using database connection file here

    $query = "SELECT * FROM form"; 
    $result = mysqli_query($con, $query);     
    $numApplicants = mysqli_num_rows($result); 

    session_start();
    $username = isset($_SESSION['username']) ? $_SESSION['username'] : header('Location: adminLogin.php');      
    ?>

    <!--navbar start-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="border-radius:0; position:fixed; width: 100%;">
        <a class="nav-link" href="adminPanel.php" >ADMINISTRATOR : <?php echo $username; ?></a> 
        <a class="nav-link" href="adminLogout.php" id="logout">LOGOUT &nbsp;<i class="icon-signout"></i></a>   
    </nav>      
    <!--navbar end--> 

    <!-- Side navigation -->
    <div class="sidenav">
        <a href="adminPanel.php">DASHBOARD</a>
        <a href="applications.php">APPLICATIONS </a>
    </div>
     <!-- Side navigation end-->
    
    <div class="fix_position">
        <h1 style="margin-left:20%; color: #2C3E50;">DASHBOARD</h1>
        <hr style="width:1000%; border-width:2px">

        <div class="list-group" id="numList">
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active" id="dash_hover">
                <div >
                    <i class='glyphicon glyphicon-list-alt' aria-hidden='true' style="font-size:600%;">&nbsp;<b><?php echo $numApplicants; ?></b></i>        
                    <h4 style="text-align:right;">Number of<br>Applicants</h4>   
                </div>  
            </a>

            <a href="applications.php" class="list-group-item list-group-item-action flex-column align-items-start">
                <div >
                    <h5 style="text-align:center;">View Applications</h5>
                </div>            
            </a>        
        </div>
    </div>    
</body>
</html>