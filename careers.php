<!DOCTYPE html>
<html lang="en">

<head>
    <title>HR Website || Careers</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css" />
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/flatly/bootstrap.min.css" rel="stylesheet" />      
    
</head>

<style>
  #h1_{
    text-align: center;
  }

  #img5{
    margin-top:0.55%;
    width:100%;
    max-height: 400px;
    opacity:0.9;
  }

  .center-left{
    position: absolute;
    top: 30%;
    left: 20%;
    transform: translate(-50%, -50%);    
    font-weight:bold;
    color:white;
  }

  .column {
  float: left;
  width: 50%;
  }

  .row:after {
  content: "";
  display: table;
  clear: both;
  }

  .col1{
    margin-left:15%;
  }

  #searchForm{
    margin-left: 10%;
    margin-right: 10%;
  }
</style>

<body>
  <!--navbar start-->
    <?php require 'inc/navbar.php'; ?>  
  <!--navbar end-->

  <div>
    <img src="img/5.jpg" id="img5">
    <div class="center-left">
      <h1><b style="font-size:110px;">HR JOBS</b></h1>
      <hr style="height: 4px; background:white">
      <h2><b>BETTER OPPORTUNTIES<br>BETTER JOBS</b></h2>
    </div>
  </div>

  <div id="h1_">
  <br><br><h1><b>SEARCH HR JOBS<b></h1>
  </div>
  <br><br>
  <form id="searchForm">
    <div class="row">
      <div class="col">
        <input type="text" class="form-control" placeholder="Job Title">
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Location">
      </div>
      <div class="col">
        <button type="button" class="btn btn-primary form-control">Search Jobs</button>
      </div>
    </div>
  </form>

  <div id="h1_">
  <br><br><hr><br><h1><b>FEATURED HR JOBS<b></h1>
  </div>

  <br><br>
  <div id="jobs">
    <div class="row">
      <div class="column">
        <div class="col1">
        <h3>Employee Relations Specialist</h3>
        <h4>Loma Linda University</h4>
        <h5>San Bernardino, CA</h5>
        <br>
        <h3>Sr. Director, Total Rewards</h3>
        <h4>Ravalli County</h4>
        <h5>Hamilton, MT</h5>
        <br>
        <h3>Human Resources Director</h3>
        <h4>Cedars-Sinai</h4>
        <h5>Los Angeles, CA</h5>
        <br>
        <h3>Director of Human Resources</h3>
        <h4>ProCare LTC Pharmacy</h4>
        <h5>Farmingdale, New York, United States</h5>
        <br>
        </div>
      </div>

      <div class="column">
        <div class="col1">
          <h3>Senior Human Resources Generalist</h3>
          <h4>Matrix Medical Network</h4>
          <h5>Scottsdale, AZ</h5>
          <br>
          <h3>HR Manager, Nursing LOB</h3>
          <h4>Financial Resources Federal Credit Union</h4>
          <h5>Bridgewater, NJ</h5>
          <br>
          <h3>Associate VP HR</h3>
          <h4>ICL</h4>
          <h5>New York, NY</h5>
          <br>
          <h3>HR Insurance Benefits Sr. Specialist</h3>
          <h4>Inter-American Development Bank</h4>
          <h5>Washington, Dist. Columbia, United States</h5>
          <br>
        </div>
      </div>
    </div>
  </div>
  <br><br>
  <!--footer start-->
    <?php require 'inc/footer.php'; ?>  
  <!--footer end--> 

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>
 