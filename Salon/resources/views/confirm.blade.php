<!DOCTYPE html>
<html>
<head>
	<title>confirm</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<style type="text/css">
		#d{
			display: none;
		}
	</style>
	<script type="text/javascript">
function d() {
  var x = document.getElementById("d");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
	</script>
</head>
<body>
<div class="container">
	<center><div class="col-lg-10 bg-dark">

<p class="text-white" style="font-family: andrade_probold;">{{ $product->name }}</p>
<p class="text-white" style="font-family: andrade_probold;">{{ $product->email }}</p>
<p class="text-white" style="font-family: andrade_probold;">{{ $product->gender }}</p>
<p class="text-white" style="font-family: andrade_probold;">{{ $product->mobile }}</p>
<p class="text-white" style="font-family: andrade_probold;">{{ $product->type }}</p>
<p class="text-white" style="font-family: andrade_probold;">{{ $product->course }}</p>

	</div></center>


</div>

    <div class="container">
  <div class=" col-lg-1 col-4 m-auto">
  <center> <button onclick="d()" class="btn  btn-outline-danger ">Click Here</button>

</div>
</div>
<br>
<div class="col-lg-5 col-md-5 col-sm-5 col-12 m-auto " id="d" style="background-color: black; opacity: 0.7;">
 			<p class="text-white" style="font-family: andrade_probold;">Your Booking is confirmed so you have to visit the our salon. We will call you within 24 hours  for the confirmation of appointment. Please Keep your phone should be on active mode.Thank You .</p>
 			<p class="text-white font-weight-bold">For futher information and queries Contact us</p>
		<p class="text-white font-weight-bold">KLAUS ,Gurgaon</p>
		<p class="text-white font-weight-bold">Mon-fri, Open:9:00a.m , Close:9:00p.m</p>
		<pre class="text-white font-weight-bold">Adjacent to DLF Qutab Enclave,
Phase-1, Gurgaon -122002| Map
Email:contact@patnitopinn.com
Phoneno:+91124455666|+91124455777</pre>
<a href="{{ URL::to('/index') }}"  class="btn btn-outline-success btn-success badge-success">Click here</a>


 		</div>
</body>
</html>
