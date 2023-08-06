<!DOCTYPE html>
<html lang="en">
<head>
  <title>Vehicle Validation System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include('C:\xampp\htdocs\project\global\header.php') ?>
  <style>

head, body, html {
  height: 100vh;
}

 
body {
  /* The image used */
  background-image: url('pics/ITS.jpg');
/*    
  -webkit-filter: grayscale(90%); 
  filter: grayscale(900%); */


 
  /* Full height */
  height: 100vh;

  
}
/* Position text in the middle of the page/image */
.bg-text {
  
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
position: absolute;
   top: 15%;
  left: 10%;
  transform: translate(-10%, -10%);/* */
 
  width: 100%;
  text-align: center;
}
 
.heading {
  font-size: 25px;
  margin-right: 25px;
  color:black;
}

 
.side {
  float: left;
  width: 15%;
  margin-top:10px;
}

.middle {
  margin-top:10px;
  float: left;
  width: 70%;
}

/* Place text to the right */
.right {
  text-align: right;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The bar container */
.bar-container {
  width: 100%;
  background-color:white;
  text-align: center;
  color: black;
}

/* Individual bars */
.bar-5 {width: 60%; height: 18px; background-color: #04AA6D;}
.bar-4 {width: 67%; height: 18px; background-color: #2196F3;}
.bar-3 {width: 10%; height: 18px; background-color: #00bcd4;}
.bar-2 {width: 4%; height: 18px; background-color: #ff9800;}
.bar-1 {width: 15%; height: 18px; background-color: #f44336;}

/* Responsive layout - make the columns stack on top of each other instead of next to each other */
@media (max-width: 400px) {
  .side, .middle {
    width: 50%;
  }
  .right {
    display: none;
  }
}
    </style>
</head>
<body>
<div class="bg-image"></div>
<!-- <div class="bg-text"> -->
 
   
<?php include('C:\xampp\htdocs\project\global\nav.php') ?>
  
<div class="jumbotron text-center">
  <h1>VEHICLE VALIDATION SYSTEM</h1>
  <p><Main>Make your city easier</Main></p> 
</div>
  <div class="all">
  <div class="alignment"></div>
    <div class="box">
      <h3>Validate Vehicle</h3>
      <p>Increasing complexity of embedded systems in automotive industry calls for more efficient testing and verification processes. This paper presents a visualization application for distributed real-time vehicle validation. Real-time data from vehicles are transmitted via wireless network from the test track to a simulation framework. The processed data from the simulation are distributed to multiple web based visualization clients. The Java based client presents data in a rich 3D environment thus enabling non-expert to understand behaviors of complex vehicle systems. The application will contribute to enhanced validation data presentation and the ability to collaborate in a distributed real-time virtual environment. </p>
    </p>
    </div>
    <div class="box">
      <h3>Abstract</h3>
      <p>In order to achieve robust and reliable vehicle control system designs, it is important to follow strict testing methods. Most engineers are familiar with test requirements for individual components and devices used in a vehicle control system.</p>
      
    </div>
    <div class="box box1">
      <h3>demerits of unlicensed vehicle</h3> 
        <p>“We know there are people who would currently rather risk the fine than pay their licensing fees,” Mr Joyce said.

        “That’s unfair to other law-abiding motorists. Demerit points can act as a stronger deterrent than fines as repeat offenders will face the loss of their drivers licence.”
        
        Other steps taken include allowing the NZ Transport Agency to require people to surrender licence plates when putting their licensing on hold or to decline an application to put licensing on hold when a person has abused this right in the past.

      <br><br><button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">more</button>
      <div id="demo" class="collapse"> “There is a segment of drivers and motorcyclists who put their vehicle license on hold while continuing to drive their vehicle as a way of avoiding payment. These measures combined with the added threat of demerit points, send a strong message that the government will not tolerate this,” Mr Joyce said.
        
        “The largest segment of the license fee is an ACC levy that covers the cost of road injuries. These people are on the road and face the same risks as the rest of us.
        
        “In fact, many unlicensed vehicles are driven by high-risk drivers. It’s simply not acceptable for them not to pay their fair share as law-abiding New Zealanders do.”</p>
    </div>
</div>


    
    
      
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img class="pic" style="height:600px" src="pics/vvs.png" alt="vvs" >
    </div>

    <div class="item">
      <img class="pic" style="height:600px" src="pics/graph.png" alt="graph" >
    </div>
    <div class="item">
        <img class="pic" style="height:600px" src="pics/fine.jpg" alt="2021 fine" >
      </div>
  
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
  
<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5"></div>
    </div>
  </div>
  <div class="side right">
    <div>150</div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4"></div>
    </div>
  </div>
  <div class="side right">
    <div>163</div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3"></div>
    </div>
  </div>
  <div class="side right">
    <div>15</div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2"></div>
    </div>
  </div>
  <div class="side right">
    <div>6</div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1"></div>
    </div>
  </div>
  <div class="side right">
    <div>20</div>
  </div>
</div>

<?php include('C:\xampp\htdocs\project\global\footer.php') ?>

</body>
</html>
