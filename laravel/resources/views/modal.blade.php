<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8" />
	<meta http-equiv="Content-type" content="text/html" charset="utf-8" />
	<meta name="view-port" content="width=device-width" />
	<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"
  	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  	crossorigin="anonymous"></script>
	<title>modal box</title>

	<style type="text/css">
		.modal{
			display: none;
		}
		#btn{
			background-color: rgb(255,121,107,0.78);
			width: 200px;
			height: 60px;
			border-radius: 10%;
			color: white;

		}
		.modal{
			margin: 100px;
			width: 400px;
			height: 600px;
		}
	</style>
</head>
<body>
	
	
	<button id="btn">Customize & Get Quotes</button>
	
	<div id="mymodal" class="modal">
		<div class="modal-content">
			<form action="/modes" method="POST">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<label for="email">Email</label>
				<input name="email" type="email" id="email" /><br/>
				<label for="fullname">Full Name</label>
				<input name="fullname"  id="fullname" />
				<label for="phn">Contact Number</label>
				<input name="phn" type="Number" id="phn" />
				<input type="submit">
			</form>
			
				<span class="close">x</span>
		</div>
	</div>


<script >
	$("#btn").click(function(){
		$("#mymodal").css("display","block");
	})
	
</script>
</body>
</html>