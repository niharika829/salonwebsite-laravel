<!DOCTYPE html>
<html>
<head>
	<title>Beauty Courses</title>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="bootstrap.css">
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
	<style type="text/css">
		#d{
			display: none;
		}
	body{
			background-image: url('http://localhost/Salon/storage/app/Image1/back4.jpg');
			  height: 100%;
              background-repeat:repeat;
              background-position: : right-top;
              background-attachment: fixed;
		width: 100%


		}
		.specialist{
			border-radius: 50%;
		}
		#about{
			background-image:url('http://localhost/Salon/storage/app/Image1/about1.jpg');
		}
		.inner{
			overflow: hidden;
		}
		.inner img{
			transition: all 1.5s ease;
		}
		.inner:hover img{
			transform: scale(1.1);
		}
		.card{
			overflow: hidden;
		}
		.card:hover{
			transform: scale(1.1);
		}
		.img-contact{
  		background-image:url('http://localhost/Salon/storage/app/Image1/contact4.jpg');
  		background-size: fixed;
  		height: 50%
  	}
  		.zoom:hover{
	transform: scale(1.2);
	color: white;
}
	</style>
</head>

<body>

<nav class="navbar navbar-expand-sm navbar-dark fixed-top" style="background-color:#E60073">
	<div class="container">
	    <h6><a href="{{ URL::to('/mainhome') }}" class="navbar-brand">KLAUS</a><h6>
	     <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarid">
	     	<span class="navbar-toggler-icon"></span>
	     </button>
	    <div class="collapse navbar-collapse" id="navbarid">
           <ul class="navbar-nav text-right ml-auto">
		    <li class="nav-item  zoom"><a href="{{ URL::to('/index') }}" class="nav-link text-white">Home</a></li>
		    <li class="nav-item zoom"><a href="#courses" class="nav-link text-white">Courses</a></li>
		    <li class="nav-item zoom"><a href="#about" class="nav-link text-white">About Us</a></li>
		    <li class="nav-item zoom"><a href="{{ URL::to('/form') }}" class="nav-link text-white">Register Now</a></li>
		    <li class="nav-item zoom"><a href="{{ URL::to('/gallery') }}" class="nav-link text-white">Gallery</a></li>
		    <li class="nav-item zoom"><a href="#contactus" class="nav-link text-white">Contact Us</a></li>
	       </ul>
	    </div>
	</div>
</nav>
<!------------------------------------------Photo---------------------------------------------------------------->

<div class="carousel slide" id="myslider" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="http://localhost/Salon/storage/app/Image1/aa.jpg" alt="1.jpg" style="height: 500px;width: 100%; margin-top: 30px;">
			<div class="carousel-caption">
				<h1 style="color:#E60073;">Beauty Course</h1>
				<h3 class="font-italic">Take the first step for your exciting career in the Global Beauty and Fashion Career.</h3>
			</div>

		</div>
			<div class="carousel-item ">
			<img src="http://localhost/Salon/storage/app/Image1/bb.jpg" alt="2.jpg" style="height: 500px; width: 100%; margin-top: 30px;">
			<div class="carousel-caption">
				<h2 class="font-italic">Our Academy offers a complete range of beauty courses for novices and working professionals..</h1><!--badge for highlight the sentence-->
			</div>

		</div>
			<div class="carousel-item">
			<img src="http://localhost/Salon/storage/app/Image1/c.jpg" alt="3.jpg" style="height: 500px; margin-top: 30px; width: 100%">


		</div>
		<div class="carousel-item">
			<img src="http://localhost/Salon/storage/app/Image1/d.jpg" alt="4.jpg" style="height: 500px; margin-top: 30px; width: 100%">
			<div class="carousel-caption">
				<h1 class="font-italic" style="color:#E60073;">HAIR STYLING</h1>
				<h2 class="font-italic">Our specialist trained  to the students very well.</h2>
			</div>

		</div>
		<div class="carousel-item">
			<img src="http://localhost/Salon/storage/app/Image1/e.jpg" alt="1.jpg" style="height: 500px; margin-top: 30px; width: 100%">
			<div class="carousel-caption">

				<h3 class="font-italic">Only a beautician course gives the opportunity to deep dive into the real world of beauty.</h3>
			</div>

		</div>
		<div class="carousel-item">
			<img src="http://localhost/Salon/storage/app/Image1/f.jpg" alt="f.jpg" style="height: 500px; margin-top: 30px; width: 100%">
			<div class="carousel-caption">
				<h1 class="font-italic" style="color:#E60073;">Beauty Classes</h1>
				<h2 class="font-italic">We are having a Professionals of beauty course.They give the classes to the students </h2>
			</div>

		</div>

	</div>
	<a href="#myslider" class="carousel-control-prev" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
		<span class="sr-only">Previous</span>
	</a>
    <a href="#myslider" class="carousel-control-next" role="button" data-slide="next">
		<span class="carousel-control-next-icon"></span>
		<span class="sr-only">Next</span>
	</a>
</div><br>


<!--------------------------------COURSES------------------------------------------------------------------------>
		<h1 class="text-center text-white  font-italic font-weight-bold" style="background-color: #E60073; font-family:andrade_probold" id="courses">COURSES FOR YOU</h1><br>
<div class="container-fluid">
		<div class="card-columns bg-transparent  row">
		     <div class="card col-lg-5 col-md-5 col-sm-5 col-12 m-auto" >
		     	<div class="inner">
		         <img src="http://localhost/Salon/storage/app/Image1/beautytherapy1.jpg" class="card-img img-fluid" style="height: 100%;"></div>
		         <div class="card-body ">
			     <h4 class="card-title text-center text-danger">MAKE UP</h4>
			     <p class="card-text"> Be a hair stylish by joining a hair styling courses that teaches hair dressing, hair treatments, hair cutting techniques</p>
			     <a href="{{ URL::to('/makeup') }}" class="btn  btn-outline-danger">KNOW MORE</a>
		         </div>

		     </div>
		     <div class="card col-lg-5 col-md-5 col-sm-5 col-12 m-auto" >
		     	<div class="inner">
		        <img src="http://localhost/Salon/storage/app/Image1/a1.jpg"  class="card-img img-fluid" style="height: 100%;"></div>
		        <div class="card-body">
			    <h4 class="card-title text-center text-danger">HAIR</h4>
			    <p class="card-text"> Gain skills and offer professional services in bridal,airbrush,coporate and ocasion makeup by joining any of our make up courses</p>
			    <a href="{{ URL::to('/hair') }}"  class="btn btn-outline-danger ">KNOW MORE</a>
		        </div>

		    </div>
	    </div>
    </div>
    <br>
    <div class="container-fluid">
		<div class="card-columns bg-transparent  row">
		     <div class="card col-lg-5 col-md-5 col-sm-5 col-12 m-auto" >
		     	<div class="inner">
		         <img src="http://localhost/Salon/storage/app/Image1/makeup.jpg" class="card-img img-fluid" style="height: 100%;"></div>
		         <div class="card-body">
			     <h4 class="card-title text-center text-danger">BEAUTY THEARPY</h4>
			     <p class="card-text "> Master the art of delivering world class service in areas like waxing, facial and clean ups</p>
			     <a href="{{ URL::to('/beauty') }}" class="btn  btn-outline-danger">KNOW MORE</a>
		         </div>

		     </div>
		     <div class="card col-lg-5 col-md-5 col-sm-5 col-12 m-auto" >
		     	<div class="inner">
		        <img src="http://localhost/Salon/storage/app/Image1/nailart.jpg" class="card-img img-fluid" style="height: 100%;"></div>
		        <div class="card-body">
			    <h4 class="card-title text-center" style="color: #CD5C5C">NAIL ART</h4>
			    <p class="card-text">Short term nail technician course teaches acrylic extensions and all latest and trendy nail art design..</p>
			    <a href="{{ URL::to('/nailart') }}"  class="btn btn-outline-danger ">KNOW MORE</a>
		        </div>

		    </div>
	    </div>
    </div>
    <br>
    <br>

    <div class="container">
  <div class=" col-lg-12 col-md-12 col-sm-12 col-12 m-auto">
  <center> <button onclick="d()" class="btn  btn-outline-danger ">VIEW MORE COURSES</button>

</div>
</div>

		     <center>
		     	 <div id="d" class="container-fluid">
		    		<div class="card-columns bg-transparent  row">
					<div class="card col-lg-5 col-md-5 col-sm-5 col-12 m-auto" >
		     		<div class="inner">
		       		 <img src="http://localhost/Salon/storage/app/Image1/bridal.jpg" class="card-img img-fluid" style="height: 100%;"></div>
		        	<div class="card-body">
			    	<h4 class="card-title text-center" style="color: #CD5C5C">BRIDAL</h4>
			    	<p class="card-text">A bright and long-lasting makeup for the happiest day of a woman's life : her wedding. From the East to the West , there are several types of makeup to know.</p>
			    	<a href="{{ URL::to('/bridal') }}"  class="btn btn-outline-danger ">KNOW MORE</a>
		       	 </div>

		    </div></div></div></center>
		    <br>
		    <br>
		    <script>
		    	function d()

		    	{
                   var x= document.getElementById("d");
                   if (x.style.display === "none")
                   {
                       x.style.display = "block";
                    }
                    else {
                              x.style.display = "none";
                          }
		    	}
		    </script>
	<!-------------------------------------Specialist--------------------------------------------------->

		     	 <div  class="container-fluid">
		     	 	<div><h1 style="background-color: #E60073; text-align: center; color: white; font-family: andrade_probold">Our Specialist</h1></div>
		    		<div class="card-columns bg-transparent  row">
					<div class="card col-lg-3 col-md-3  col-12 m-auto bg-transparent">
		     		<div class="inner">
		       		 <img src="http://localhost/Salon/storage/app/Image1/hair stylist.jpg" class="card-img img-responsive specialist" style="height:150px;"></div>
		        	<div class="card-body badge-dark">
			    	<h5 class="card-title text-center" style="color: #E60073;">Hair Stylist</h5>
			    	<p class="card-text">Sapna Bhavnani is one of the most renowned hairstylists of the fashion world.</p>

		       	 </div>

		    </div>
			<div class="card col-lg-3 col-md-3  col-12 m-auto bg-transparent" >
		     		<div class="inner">
		       		 <img src="http://localhost/Salon/storage/app/Image1/beauty.jpg" class="card-img img-responsive specialist" style="height:150px;"></div>
		        	<div class="card-body badge-dark">
			    	<h5 class="card-title text-center" style="color: #E60073">Beauty Specialist</h5>
			    	<p class="card-text">Chandni Singh is an expert in doing the base where half the battle is won in beauty.Truly a professional beauty artist with well-known reputation. </p>

		       	 </div>

		    </div>
			<div class="card col-lg-3 col-md-3  col-12 m-auto bg-transparent" >
		     		<div class="inner">
		       		 <img src="http://localhost/Salon/storage/app/Image1/makup.jpg" class="card-img img-responsive specialist" style="height:150px;"></div>
		        	<div class="card-body badge-dark">
			    	<h5 class="card-title text-center" style="color: #E60073">Makeup Artist</h5>
			    	<p class="card-text"> Aliya Baig is a renowned name in the Indian makeup industry.
			    	she is right up there as one of the most popular makeup artists of India.</p>

		       	 </div>

		    </div></div></div><br>

	 <!------------------------------About----------------------------------------------------->
		 <div class="jumbotron" id="about">
		 	<div class="container-fluid" >
		 		<h1 style="font-size: 44px; opacity: 1; color: #E60073; font-family: andrade_probold;     text-align: left;">ABOUT US</h1>
		 		<hp class="text-white">From high-end salons to fashion runway, the beauty and makeup industry in India offers dynamic, exciting and lucrative career opportunities for aspiring professionals.

		 		</p>
		 		<a href="{{ URL::to('/about') }}" class="btn" style="background-color: #E60073">+</a>

		 	</div>

		 </div>


	<!-------------------------------------CONTACT US--------------------------------------------->

	<div class="container-fluid img-contact mt-2">
		<h2 class="text-danger font-italic " id="contactus">CONTACT US:</h1>
		<p class="text-dark font-weight-bold">KLAUS ,Gurgaon</p>
		<p class="text-dark font-weight-bold">Mon-fri, Open:9:00a.m , Close:9:00p.m</p>
		<pre class="text-dark font-weight-bold">Adjacent to DLF Qutab Enclave,
Phase-1, Gurgaon -122002| Map
Email:contact@patnitopinn.com
Phoneno:+91124455666|+91124455777</pre>
<p class="text-danger">FOLLOW US:</p>
 <i class="fab fa-facebook-f fa-fw"style="color:blue; font-size: 2rem;"></i>
  <i class="fab fa-twitter fa-fw"style="color:blue;font-size: 2rem;"></i>
  <i class="fab fa-instagram fa-fw "style="color:pink;font-size: 2rem;"></i>
  <i class="fab fa-linkedin fa-fw "style="color:blue;font-size: 2rem;"></i>
 <i class="fab fa-pinterest fa-fw" style="color:red;font-size: 2rem;"></i>
</div>



</body>
</html>
