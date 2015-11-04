<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>TelaBelang</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <nav class="navbar navbar-default" style="background-color:#194581">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php" style="color:red">TelaBelang</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!-- <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>-->
      
      <ul class="nav navbar-nav navbar-right">
        <li><a style="color:red"href="#">Daftar</a></li>
        <li><a style="color:red"href="#">Login </a></li>
        
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<! --  -->


  <div class="col-md-2" >
  </div>
 <div class="col-md-8" >
<H1 style="text-align:center;"><?php echo $_GET['tempat']; ?></H1><br><br>
 
<div class="col-md-9">
  <input type="text" class="form-control" placeholder="Search">
          
</div>
<div class="col-md-3">
  <button type="submit" class="btn btn-default">Cari</button>
</div><br><br><br>

    <div class="col-md-3" >
      <a href="jualan.php?tempat=<?php  echo $_GET['tempat'];?>&&item=mobil" >
        <img src="gambar/mobil.PNG">
        
      </a>  
    </div>
    <div class="col-md-3" >
    <a href="jualan.php?tempat=<?php  echo $_GET['tempat'];?>&&item=motor" >
        <img src="gambar/motor.PNG">
        
      </a>
    </div>
    <div class="col-md-3" >
    <a href="jualan.php?tempat=<?php  echo $_GET['tempat'];?>&&item=properti" >
        <img src="gambar/properti.PNG">
        
      </a>
  
    </div>
    <div class="col-md-3" >
    <a href="jualan.php?tempat=<?php  echo $_GET['tempat'];?>&&item=fashion" >
        <img src="gambar/fashion.PNG">
        
      </a>
  
    </div><br><br><br><br><br>
    <div class="col-md-3" >
    <a href="jualan.php?tempat=<?php  echo $_GET['tempat'];?>&&item=gadget" >
        <img src="gambar/gadget.PNG">
         
      </a>
  
    </div>
    <div class="col-md-3" >
    <a href="jualan.php?tempat=<?php  echo $_GET['tempat'];?>&&item=hobi" >
        <img src="gambar/hobi.PNG">
       
      </a>
  
    </div>
    <div class="col-md-3" >
    <a href="jualan.php?tempat=<?php  echo $_GET['tempat'];?>&&item=rumah tangga" >
        <img src="gambar/rumah tangga.PNG">
       
      </a>
  
    </div>
    <div class="col-md-3" >
    <a href="jualan.php?tempat=<?php  echo $_GET['tempat'];?>&&item=bayi" >
        <img src="gambar/bayi.PNG">
       
      </a>
  
    </div><br><br><br><br><br>
    <div class="col-md-3" >
    <a href="" >
        <img src="gambar/industri.PNG">
       
      </a>
  
    </div>
    <div class="col-md-3" >
    <a href="" >
        <img src="gambar/lowongan.PNG">
       
      </a>
    </div>
    </div>
 
 <div class="col-md-2" >
 </div>


</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>