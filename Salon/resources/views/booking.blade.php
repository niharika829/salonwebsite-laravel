<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<style type="text/css">
  #box{

  width:800px;
  padding:20px;
  margin: 30px;
font-family:Times New Roman;
  opacity:0.8;
}
</style>
</head>
<body style="background-image: url('http://localhost/Salon/storage/app/Image1/booking5.jpg'); ">
  <nav class="navbar navbar-expand-sm navbar-dark fixed-top" style="background-color:#E60073">
  <div class="container">
      <h6><a href="{{ URL::to('/index') }}" class="navbar-brand">KLAUS</a><h6>
       <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarid">
        <span class="navbar-toggler-icon"></span>
       </button>
      <div class="collapse navbar-collapse" id="navbarid">
           <ul class="navbar-nav text-right ml-auto">
        <li class="nav-item  zoom"><a href="{{ URL::to('/index') }}" class="nav-link text-white">Home</a></li>
        <li class="nav-item zoom"><a href="{{ URL::to('/index') }}" class="nav-link text-white">Courses</a></li>
        <li class="nav-item zoom"><a href="{{ URL::to('/about') }}" class="nav-link text-white">About Us</a></li>
        <li class="nav-item zoom"><a href="{{ URL::to('/form') }}" class="nav-link text-white">Register Now</a></li>
        <li class="nav-item zoom"><a href="{{ URL::to('/gallery') }}" class="nav-link text-white">Gallery</a></li>
        <li class="nav-item zoom"><a href="{{ URL::to('/index') }}" class="nav-link text-white">Contact Us</a></li>
         </ul>
      </div>
  </div>
</nav>
<br>
<br>
<div class="container">
<div class="col-lg-10 col-12 badge-dark" id="box">
  <h1> BOOK YOUR APPOINTMENT</h1>
    <form action="{{ URL::to('/products') }}" method="post">
    @csrf Name :<input type="text"name="name" class="text-dark" placeholder="Enter your name" required><br>
    @error('name')
    <div style="color:red">{{$message}}</div>
  @enderror
    Email :<input type="text" placeholder="xyz@gmail.com " name="email"  class="text-dark" required><br>
    @error('email')
    <div style="color:red">{{$message}}</div>
  @enderror
     Gender: <p style="color: white;">Male:<input type="radio" name="gender" value="male">Female:<input type="radio" name="gender" value="female"><br>

    Mobile Number :<input type="text" placeholder="xxxxxxxxxx"class="text-dark" name="mobile" required><br>
    @error('mobile')
    <div style="color:red">{{$message}}</div>
  @enderror<br>
    Select Course:
    <select name="course" required>
      <option>NAIL ART</option>
      <option>HAIR</option>
      <option>MAKEUP</option>
      <option>BRIDAL</option>
      <option>BEAUTY</option>

    </select><br>
    Type of course<select name="type" required>
      <option>Certification</option>
      <option>Foundation</option>
    </select><br>
    Joining Month<input type="date"name="date" required>
    @error('date')
  <div>{{$message}}</div>
  @enderror
    <br><br>
    <input type="submit" value="Submit" name="submit" style="background-color: #E60073">
    <a href="{{ URL::to('/index') }}" class="btn btn-outline-danger text-white" style="background-color: #E60073">Cancel</a>

  </form>

</div></div>

</body>
</html>
