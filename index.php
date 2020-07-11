<!DOCTYPE html>
<html lang="en">

<head>
    <title>HR Website || Index</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css" />
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/flatly/bootstrap.min.css" rel="stylesheet" />      
    
</head>

<style>
  #central {
    max-height: 680px;
    max-width:1800px;
    border-top:solid 10px white; 
    border-bottom:solid 10px white;    
  }

  #img4{
    margin-top:5%;
    width:100%;
    margin-left:1%;
  }

</style>

<body>
  <!--navbar start-->
    <?php require 'inc/navbar.php'; ?>  
  <!--navbar end-->

  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/1.jpg" class="d-block w-100" alt="..." id="central">
      </div>
      <div class="carousel-item">
        <img src="img/2.jpg" class="d-block w-100" alt="..." id="central">
      </div>
      <div class="carousel-item">
        <img src="img/3.jpg" class="d-block w-100" alt="..."id="central"> 
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div>
    <img src="img/4.png" id="img4">
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
 