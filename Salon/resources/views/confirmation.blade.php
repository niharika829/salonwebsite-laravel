
<!DOCTYPE html>
<html>
<head>
	<title>Billing</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<style type="text/css">
		body{
			background-image: url('http://localhost/Salon/storage/app/Image1/confirm1.jpg');
		}


	</style>
</head>
<body >
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
</nav><br><br>
<div class="container-fluid">

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>email</th>
            <th>contact</th>
            <th>gender</th>
            <th>course</th>
            <th>type</th>
            <th width="280px">Action</th>
        </tr>


	        <tr>
	            <td></td>

	            <td>{{ $data->name }}</td>
	            <td>{{ $data->email }}</td>
	            <td>{{ $data->mobile }}</td>
	            <td>{{ $data->gender }}</td>
	            <td>{{ $data->course }}</td>
	            <td>{{ $data->type }}</td>
	            <td>
	                <form action="{{ route('products.destroy',$data->id) }}" method="POST">

	                    <a class="btn btn-info" href="{{ route('products.show',$data->id) }}">Show</a>

	                    <a class="btn btn-primary" href="{{ route('products.edit',$data->id) }}">Edit</a>

	                    @csrf
	                    @method('DELETE')

	                    <button type="submit" class="btn btn-danger">Delete</button>
	                </form>
	            </td>
	        </tr>

    </table>
  </div>
