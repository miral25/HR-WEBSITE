<!DOCTYPE html>
<html lang="en">

<head>
    <title>HR Website || Applications</title>
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
            position: fixed; /* Fixed Sidebar (stay in place on scroll) */
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

        #table{
            margin-top: 7%; 
            margin-left:17%;            
            width: 81%;
            font-size:120%;
            border:solid thin #2C3E50; ;    
            position:fixed;        
        }        

        #table td{
            text-align:center;
            vertical-align: middle;
            padding-left:1%;
        }
        #table th{
            text-align:center;
            vertical-align: middle;
            padding-left:1%;
        }
    </style>
</head>

<body>
    <?php
    include "dbConnection.php"; // Using database connection file here

    session_start(); 
    $username = isset($_SESSION['username']) ? $_SESSION['username'] : header('Location: adminLogin.php');  
    ?>

    <!--navbar start-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="border-radius:0; position:fixed; width: 100%;">
        <a class="nav-link" href="adminPanel.php" >ADMINISTRATOR : <?php echo $username; ?></a> 
        <a class="nav-link" href="adminLogout.php" id="logout">LOGOUT &nbsp;<i class="icon-signout"></i></a>   
    </nav>  
    <!--navbar end--> 

    <!-- Side navigation start-->
    <div class="sidenav">
        <a href="adminPanel.php">DASHBOARD</a>
        <a href="applications.php">APPLICATIONS</a>
    </div>
    <!-- Side navigation end-->

    <?php
        include "dbConnection.php"; // Using database connection file here 
                
        $result = mysqli_query($con, "SELECT * FROM form ") or die('Error');
        echo '  <table class="table table-hover" id="table">
                    <thead>
                        <tr>
                            <th scope="row">ID</th>
                            <th scope="row">First Name</th>
                            <th scope="row">Last Name</th>
                            <th scope="row">Date of Birth</th>
                            <th scope="row">Phone</th>
                            <th scope="row">Email</th>
                            <th scope="row">Degree</th>
                            <th scope="row">Experience</th>
                            <th scope="row">Position</th>
                            <th scope="row">Why should we hire?</th>			
                        </tr>
                    </thead> ';                

                    while($row = mysqli_fetch_array($result))
                    {                  
                        echo "<tr>"; 
                            echo "<td>" . $row['id'] . "</td>";                   
                            echo "<td>" . $row['first_name'] . "</td>";                  
                            echo "<td>" . $row['last_name'] . "</td>";                  
                            echo "<td>" . $row['dob'] . "</td>";                  
                            echo "<td>" . $row['phone'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";  
                            echo "<td>" . $row['degree'] . "</td>";  
                            echo "<td>" . $row['experience'] . "</td>";  
                            echo "<td>" . $row['position'] . "</td>";
                            echo "<td><a title='Click to read' style='color:black;' href='whyHire.php?id=". $row['id']."'><b class='glyphicon glyphicon-folder-open' aria-hidden='true'></b></a></td>";              
                        echo "</tr>";                  
                    }

        echo '  </table>';
    ?>


</body>
</html>