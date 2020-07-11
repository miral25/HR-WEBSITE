<!DOCTYPE html>
<html lang="en">

<head>
    <title>HR Website || WhyHire</title>
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
            border-width:thin;     
            border-color:white
        }

        .sidenav a {
            padding: 10%;
            text-decoration: none;
            font-size: 130%;
            color: white;
            display: block;
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

    if (@$_GET['id']) {
		$id = @$_GET['id'];
		$result = mysqli_query($con, "SELECT * FROM form WHERE id='$id' ") or die('Error');
		while ($row = mysqli_fetch_array($result)) {
			$whyHire = $row['whyHire'];
            $first_name = $row['first_name'];
            $last_name = $row['last_name'];
				
			echo '<div class="card border-primary mb-3" style="width: 80%; height:625px; margin-top:7% ;margin-left:17.5%; position:fixed;">
            <div class="card-header" style="text-align:center; font-size:20px;"><b>Why Should We Hire You?</b></div> ';
            

			echo '<div class="card-body" style="margin:2%;margin-right:2%;">
			<h4 class="card-title" >Applicant ID:&ensp;' . $id . '<br><br>Name of Applicant:&ensp;' . $first_name .' '.$last_name . '</h4> 
				
			<br><p class="card-text" style="text-align:justify; font-size:18px;">' . $whyHire. '</p></div></div>' ;
			}
		} ?>

</body>
</html>