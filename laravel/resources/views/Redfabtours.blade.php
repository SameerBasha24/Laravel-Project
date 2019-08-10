<!DOCTYPE html>
<html>
  <head>
        <title>Redfab Tours</title>
        <meta charset="utf-8" />
        <meta http-equiv="Content-type" content="text/html" charset="utf-8" />
        <meta name="view-port" content="width=device-width, initial-scale=1.0" />

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
        <style>
            .black-box{
                background-color: rgb(0,0,0,0.9);
                color: white;
                /*border-color: red;
                border-style: solid;*/
                height: 400px;
            }
            a{
                color: white;
            }
            .white-box{
                background-color: rgb(0,0,0,0.9);
                color: white;
                /*border-color: red;
                border-style: solid;*/
                height: 400px;
            }
            .box{
                /*border-color: red;
                border-style: solid; */
                
                margin-top: 20px;
                margin-bottom: 20px;
            }
            .header{
                background-image: url("../../../img/titl2.jpg");
                margin: 0;
                height: 300px;
                background-repeat: no-repeat;
                background-size: 100% 300px;
            }
            
            .navmargin{
               max-width: 100%;
                border-radius: 0;
                opacity: 0.75;
            }
            #searchbar{
                margin-top: 150px;
               
            }
            .img{
                margin: 0;
                padding: 0;
                width: 100%;
                height: 200px;
            }
           
            .butn{

                width: 100%;
                border-radius: 5px;
            }
            .glyph{
                color: white;
            }
            .bodys{
                width: 100%;
            }
            .text{
                text-align: center;
                color: blue;
                font-size: 25px;
                font-style: bold;
            }
        </style>
    </head>
    <body >
        <div class="bodys">
            
                <nav class="navbar navbar-dark bg-dark navbar-expand-md  navbar-fixed-top navmargin">
                    <a href="#" class="navbar-brand">RedFab Tours & Travels</a>
                    <button class="navbar-toggler ml-auto" type="button" data-target="#nc" data-toggle="collapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="navbar-collapse collapse" id="nc">
                        
                        <ul class="nav navbar-nav navbar-right">
                            <li class="navbar-item "><button class="btn btn-link btn-lg" data-toggle="modal" data-target="#register"><span class="glyphicon glyphicon-user glyph"></span> Register</button></li>
                            @if (session('status'))
                             <li class="navbar-item "><button class="btn btn-link btn-lg" data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in glyph"></span>{{ session('status')}}
                            </button>></li>
                            @else
                                <li class="navbar-item "><button class="btn btn-link btn-lg" data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in glyph"></span>Login
                            </button>></li>
                            @endif
                            
                            
                        </ul>

                    </div>


                </nav>
                <div id="register" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        
                        <div class="modal-content">
                            <div class="modal-header">

                                <span style="position: relative;left: 50px;font-size: 20px;"><b>Register</b></span>
                                <button class="btn btn-default " data-dismiss="modal" style="position:relative;left:120px;right: 0;">x</button>
                            </div>

                            <div class="modal-body">

                                <form action="/laravel/registers" method="POST">
                                    <div class="form-group">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <label for="email">Email</label>
                                        <input type="email" id="email" name="email" class="form-control">
                                        <label for="username">Username</label>
                                        <input type="text" id="username" name="Username" class="form-control">
                                        <label for="pass">Password</label>
                                        <input type="password" id="pass" name="password" class="form-control"><br/>
                                        <input type="submit" >
                                    </div>

                                </form>
                            </div>
                                

                        </div>
                    </div>

                </div>
                <div id="login" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        
                        <div class="modal-content">
                            <div class="modal-header">

                                <span style="position: relative;left: 50px;font-size: 20px;"><b>Login</b></span>
                                <button class="btn btn-default " data-dismiss="modal" style="position:relative;left:120px;right: 0;">x</button>
                            </div>

                            <div class="modal-body">

                                <form action="/laravel/logins" method="POST">
                                    <div class="form-group">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <label for="email">Email</label>
                                        <input type="email" id="email" name="email" class="form-control">
                                        <label for="pass">Password</label>
                                        <input type="password" id="pass" name="password" class="form-control"><br/>
                                        <input type="submit" >
                                    </div>

                                </form>
                            </div>
                                

                        </div>
                    </div>

                </div>

            
            <div class="header container-fluid">
                
            </div>
            <div class="container-fluid text-center ">
                <div class="row black-box">

                    <?php
                    // echo ;
                        $user=$users;
                        for($x=0; $x<=3; $x++) {
                           //  # code...

                            $key=$user[$x];
                           echo' <div class="col-md-3 box">
                            
                                     <h2>'.$key->name.'</h2>
                                     <a href="detail/'.$key->Id.'"><img src="data:image/png;base64,'.chunk_split(base64_encode($key->img)).'" class="img"><p>Discover '.$key->name.'</p></a>
                                     
                                     <button type="button" class="btn btn-primary butn" data-toggle="modal" data-target="#notfi">Get Notifications</button>
                                
                                 
                            </div>';
                            // echo '<h2>'.$key->name.'</h2>';
                        }
                        
                    ?>
                </div>
                <div class="row black-box">

                    <?php
                    // echo ;
                        for($x=4; $x<=7; $x++) {
                           //  # code...
                            $key=$user[$x];
                           echo' <div class="col-md-3 box">
                            
                                     <h2>'.$key->name.'</h2>
                                     <a href="detail/'.$key->Id.'"><img src="data:image/png;base64,'.chunk_split(base64_encode($key->img)).'" class="img"><p>Discover '.$key->name.'</p></a>
                                     
                                     <button type="button" class="btn btn-primary butn" data-toggle="modal" data-target="#notfi">Get Notifications</button>
                                
                                 
                            </div>';
                            // echo '<h2>'.$key->name.'</h2>';
                        }
                        
                    ?>
                </div>
                    
            </div>
            
            <div id="notfi" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        
                        <div class="modal-content">
                           

                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-4" style="border-right: solid black;">
                                        <p class="text">Submit the details to get updates about exciting tour packages.</p>
                                    </div>
                                    <div class="col-md-8">
                                        <button class="btn btn-default " data-dismiss="modal" style="position:relative;left:240px;right: 0;">x</button>
                                        <form action="/laravel/notificaton" method="POST">
                                            <div class="form-group">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <label for="email">Email</label>
                                                <input type="email" id="email" class="form-control">
                                                <label for="fname">Fullname</label>
                                                <input type="text" id="fname" name="fname" class="form-control">
                                                <label for="phn">Contact Number</label> 
                                                <input type="number" id="phn" name="phn" class="form-control"><br/>
                                                <label for="date">Departure Date</label>
                                                <input type="date" id="date" name="date" class="form-control">
                                                <label for="city">Departure City</label>
                                                <input type="text" id="city" name="city" class="form-control">
                                                <input type="submit" data-dismiss="modal" value="I'm Intrested" >
                                            </div>

                                        </form>
                                    </div>

                                </div>
                                <!-- <form action="\logins">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" id="email" class="form-control">
                                        <label for="pass">Password</label>
                                        <input type="password" id="pass" class="form-control"><br/>
                                        <input type="submit" >
                                    </div>

                                </form> -->
                            </div>
                                

                        </div>
                    </div>

                </div>




        </div>
       
    </body>
</html>
