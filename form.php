<!DOCTYPE html>
<html lang="en">

<head>
    <title>HR Website || Application Form</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css" />
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/flatly/bootstrap.min.css" rel="stylesheet" />
    

    <style>
        body {
        font-family:;
        }
    </style>

</head>

<body>
    
<?php
include "dbConnection.php"; // Using database connection file here

if(isset($_POST['submit']))
{		
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone_number'];
    $email = $_POST['email'];
    $degree = $_POST['degree'];
    $experience = $_POST['experience'];
    $position = $_POST['position'];
    $whyHire = $_POST['whyHire'];
    
    $insert = mysqli_query($con,"INSERT INTO form(first_name, last_name, dob, phone, email, degree, experience, position, whyHire)  VALUES ('$first_name','$last_name','$dob','$phone','$email','$degree','$experience','$position','$whyHire')") or die ("Error");

    if($insert)
    {              
        echo    '<script type="text/javascript">                    
                        alert("Application Suubmitted Sucessfully!");                    
                </script>';
        header('Location: index.php');
    }
    else{
        echo 'Not Submitted';
    }
}

mysqli_close($con); // Close connection
?>

    <!--navbar start-->
        <?php require 'inc/navbar.php'; ?> 
    <!--navbar end--> 

    <h1 style="text-align:center ;color: #2C3E50;">Application Form</h1>
    <hr>

    <!--FORM start-->    
    <form method="POST" id="myform">
        <fieldset>
            <div class="container center_div">

                <h2 style="text-align:left ;color:#2C3E50; margin-top:0%;  margin-bottom:2% ">Personal Information</h2>
                <hr>
                <!--First Name-->    
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">First Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="first_name" required="required">
                        <small class="form-text text-muted">First Name</small>
                    </div>
                </div>
                <!--Last Name--> 
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Last Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="last_name" required="required">
                        <small class="form-text text-muted">Last Name</small>
                    </div>
                </div>
                <!--Date of Birth--> 
                <div class="form-group row ">
                    <label class="col-sm-2 col-form-label">Date of Birth</label>
                    <div class="col-sm-10">                
                        <input type="date" class="form-control" name="dob" required="required">  
                        <small class="form-text text-muted">DOB</small>                     
                    </div>
                </div>
                <!--Phone Number--> 
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Phone Number</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="phone_number" required="required">
                        <small class="form-text text-muted">Phone Number</small>
                    </div>
                </div>
                <!--Email--> 
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="email" required="required">
                        <small class="form-text text-muted">email@example.com</small>
                    </div>
                </div>          
                <!--Academic Degree-->
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Academic Degree</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="degree" required="required"> 
                            <option selected=""></option>
                            <option value="High school">H.S.C.</option>
                            <option value="Diploma">Diploma</option>
                            <option value="Bachelor">Bachelor</option>
                            <option value="Masters">Masters</option>
                            <option value="PHD">PH.D</option>
                        </select>
                        <small class="form-text text-muted">Current Degree</small>                                        
                    </div>
                </div>          
                <!--Years of Experience-->
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Years of Experience</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="experience" required="required">
                            <option selected=""></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>                            
                        </select>
                        <small class="form-text text-muted">Experience</small>                                        
                    </div>
                </div>          
                <!--Job Position--> 
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Job Position</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="position" required="required">
                            <option selected=""></option>
                            <option value="Job 1"> Job 1 </option>
                            <option value="Job 2"> Job 2 </option>
                            <option value="Job 3"> Job 3 </option>
                            <option value="Job 4"> Job 4 </option>
                            <option value="Job 5"> Job 5 </option>
                            <option value="Job 6"> Job 6 </option>
                        </select>
                        <small class="form-text text-muted">Job</small>
                    </div>
                </div>
                <!--Why should we hire you?--> 
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Why should we hire you?</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="whyHire" required="required" rows="5" cols="100"></textarea>
                        <small class="form-text text-muted">Write in short</small>
                    </div>
                </div>  
                <!--Submit--> 
                <hr>
                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit Application</button>
            </div>
        </fieldset>
    </form>
    <br><br>
    <!--FORM end-->
    
    <!--footer start-->
        <?php require 'inc/footer.php'; ?>  
    <!--footer end--> 
</body>

</html>