<!DOCTYPE html>
<html>
    <head>
        <title>Pacakge Details</title>

        <meta charset="utf-8" />
        <meta http-equiv="Content-type" content="text/html" charset="utf-8" />
        <meta name="view-port" content="width=device-width, initial-scale=1.0" />

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 


        <style>
            .glyph{
                color: white;
            }
            .navmargin{
               max-width: 100%;
                border-radius: 0;
                opacity: 0.75;
            }
            .box{
                margin-top: 65px;
            }
            .img{
                width: 100%;
                height: 400px;
            }
            
        </style>
    </head>
    <body>
        <div>
            <nav class="navbar navbar-dark bg-dark navbar-expand-md  navbar-fixed-top navmargin">
                        <a href="#" class="navbar-brand">RedFab Tours & Travels</a>
                        <button class="navbar-toggler ml-auto" type="button" data-target="#nc" data-toggle="collapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        


            </nav>
        </div>
        <div class="container-fluid">
            <div class="row box">
                <div class="col-md-6">
                    <?php

                    echo '<img src="data:image/png;base64,'.chunk_split(base64_encode($det->img)).'" class="img" >'
                    ?>
                    <h2>{{$det->name}}</h2>
                    <p>Rs.{{$det->price}} per person</p>
                    <p>The tour will be of {{$det->days}} days</p>
                    <h3>About</h3>
                    <p>{{$det->about}}</p>
                </div>
                <div class="col-md-6">
                    <form action="/laravel/booking" method="POST">
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
                            <input type="submit" value="I'm Intrested" >
                        </div>

                    </form>
                </div>
            </div>
        </div>
     
    </body>
</html>

