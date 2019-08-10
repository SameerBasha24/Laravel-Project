<!DOCTYPE html>
<html>
<head>

  <title></title>
  
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="purrfect match.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

 <style type="text/css">
   .navbar{
    background-color: rgb(14,83,134);
    color: white;
   }
   .white_text{
    color: white;

   }
  .searchbox{
    margin: 60px 40% 0 40%;
  }
  body{
   font-family:Sans-serif;
   background-image: url("../../../img/bg.jpg");
    background-repeat: no-repeat;
    background-size: cover;
  }
  .box{
    border-style: solid;
    border-color: black;
   
  }
  .pacakages ul{
    float: left;
  }
  .packages li{
    float: left;
    list-style: none;
  }
 </style>

</head>
<body >

<div class="container-fluid">
<nav class="navbar navbar-inverse  navbar-fixed-top"  role="navigation" >
                               
                 <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
             
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                   <!--  <li class="active"><a   href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li> -->
                    <li><a href="aboutus.html" class="white_text">
                        <!-- <span class="glyphicon " aria-hidden="true"></span> -->RedFab Tours & Travels</a></li>
                    <!-- <li class="dropdown">
                        <a href="index.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 
                      <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Menu <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="contactus.html#">Main Courses</a></li>
                            <li><a href="contactus.html#">Bootstrap</a></li>
                            <li><a href="contactus.html#">Asp</a></li>
                            <li><a href="contactus.html#">SQl</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">PHP</li>
                            <li><a href="contactus.html#">MySQl</a></li>
                           
                        </ul>
                    </li> -->
                    
                    
                    
    
                </ul>
               <ul class="nav navbar-nav navbar-right">
                <li><a href="#">My Bookings</a></li>
                   <li><a data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span> login</a></li>
                </ul>
                                              
       
            </div>
        </div>
   </nav>
    
    <div id="loginModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"> &times;</button>
                <h4>Login</h4>
            </div>
            <div class="modal-body">
                   <form class="form-inline">
                   <div class="form-group">
                       <label class="sr-only" for="email">Email</label><input type="text" class="form-control input-sm" placeholder="Email" id="email" name="email"><br/>
                       </div>
                        <div class="form-group">  
                          
                           <label class="sr-only" for="password">Password</label>
                                     <input type="password" class="form-control input-sm" placeholder="Password" id="password" name="password"></div>
                       <div class="checkbox">
                       <label>
                       <input type="checkbox"> Remember me
                       </label>
                         </div>
                    
                      
                        
                       <button type="submit" class="btn btn-info btn-xs">Sign in</button>
                       <button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Cancel</button> 
                    
                   
                     
               
                    </form>
            </div>

        </div>
        </div>
    </div>

<div class="searchbox">
<span class="glyphicon glyphicon-map-marker"><input type="text" name="search" placeholder="Enter destination"></span>
  
  <button type="button">Search</button>
  

</div>
<h1>TOUR PACKAGES</h1>
<div class="row">
  
      <div class="box col-md-3 col-sm-3 well">
        <h2>Bhutan</h2>
        <span class="image-thumbnail"><img src="..\..\..\img\phone.jpg"></span>
        <p>Rs.18,000 per person</p>
      </div>
      <div class="box col-md-3 col-sm-3 well">
        <h2>Bhutan</h2>
        <p>Rs.18,000 per person</p>
      </div>
      <div class="box col-md-3 col-sm-3 well">
        <h2>Bhutan</h2>
        <p>Rs.18,000 per person</p>
      </div>
      <div class="box col-md-3 col-sm-3 well">
        <h2>Bhutan</h2>
        <p>Rs.18,000 per person</p>
      </div>
    
  
</div>
</div>
</body>
</html>
