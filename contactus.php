<!DOCTYPE html>
<html lang="en">

<head>
    <title>HR Website || Contact Us</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css" />    
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/flatly/bootstrap.min.css" rel="stylesheet" /> 

    <style>
        body {
            font-family: ;
        }

        .address{
            position: absolute;
            margin-left: 7%;
            margin-top: 2%;
            z-index: 1;
        }

        .address_img {
            position: absolute;
            width: 45px;
            height: 45px;
            margin-left: 3%;
            margin-top: 2.2%;
            z-index: 1;
        }

        .maps {
            position: absolute;
            width: 500px;
            height: 500;
            border: 0;
            margin-left: 60%;
            margin-top: 2%;
            z-index: 2;
        }
    </style>

</head>
   
<body>
    <!--navbar start-->
        <?php require 'inc/navbar.php'; ?>  
    <!--navbar end-->

    <div>
        <div class="address">
            <h2>ADDRESS INFORMATION</h2>
            <p style="font-size:20px;">
            Veer Savarkar Udyan<br> Gautam Nagar, Borivali,<br> Mumbai, Maharashtra 400092
            </p>
        </div>
        <img src="img/location.png" class="address_img">

        <div>        
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.268870942285!2d72.847922414797!3d19.227110452201824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b129ecd021c3%3A0x606afa4bea9fbc67!2sVeer%20Savarkar%20Udyan!5e0!3m2!1sen!2sin!4v1594496446180!5m2!1sen!2sin" 
                width="300" height="450" frameborder="0" allowfullscreen="" class="maps"></iframe>
            <h3 style="padding-top:33.5%; margin-left:72% ;padding-bottom:2.6%"><b>HR_Website.in</b></h3>
        </div>
    </div>

    <br><br><br>
    <!--footer start-->
        <?php require 'inc/footer.php'; ?>  
    <!--footer end--> 
</body>

</html>


