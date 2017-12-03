<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Employee</title>
	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- animate -->
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<div class="fixed-top">
	<nav class="navbar navbar-expand-lg navbar-light bg-light border border-black pt-2 pb-2 pl-5">
	  <a class="navbar-brand open-sans pl-3 accent f-bold" href="#">
	  	<img src="img/brand_logo.png">
	    Human Resource Management System
	  </a>
	  <a class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </a>
	  <div class="collapse navbar-collapse pr-5" id="navbarNavAltMarkup">
	    <div class="navbar-nav ml-auto">
	    	<a href="#" class="nav-item nav-link active">
	  			<i class="medium material-icons float-left text-lgray" style="font-size: 2rem;">notifications_none</i>
	  		</a>
	       <li class="nav-item dropdown  mr-1">
		      <a class="nav-item nav-link active dropdown-toggle" data-toggle="dropdown" href="#">
		      	<img class="responsive-img pr-1" src="img/dp.png">
		      </a>
		      <!-- dropdown items here -->
		      <div class="dropdown-menu dropdown-menu-right">
			      <a class="dropdown-item" href="#">Action</a>
		   	  </div>
		      <!-- end of dropdown -->
	  		</li>
	    </div>
	  </div>
	</nav>
<ul class="nav navbar-menu shadow-light -twitter pt-2 pb-0 pl-5 m-0">
  <li class="item"><a class="link">Home</a></li>
  <li class="item -active accent"><a class="link">Employee</a></li>
  <li class="item"><a class="link">Evaluation</a></li>
  <li class="item"><a class="link">Message</a></li>
</ul>
</div>
<div class="Home">
	<div class="card  mt-5 shadow-light">
			<div class="c-raduis pb-2 m-0">
					<div class="row p-lg-5">
							<img class="ml-4 img-fluid employee-size" src="img/employee.png">
							<div class=" ml-4">
								<h5><strong>Smith, Sam</strong></h5>
								<p class="m-0">Director, Quality Assurance Office</p>
								<p class="accent m-0">3001</p>
								<button type="button" class="btn mt-2 btn-post f-normal c-raduis">Edit Profile</button>
							</div>
					</div>
					<div class="pl-5 pr-5">
						<h6 class="pl-2 pr-2 f-bold"><strong>Personal Details</strong></h6>
					</div>
					<hr>
					<div class="pl-5 pr-5">
						<h6 class="pl-2 pr-2 mb-0"><strong>#4 23rd St., EBB Olongapo City</strong></h6>
						<p  class="pl-2 pr-2"><small>Mailing Address</small></p>
					</div>
					<hr>
					<div class="pl-5 pr-5">
							<h6 class="pl-2 pr-2 mb-0"><strong>thisisemail@email.com</strong></h6>
							<p  class="pl-2 pr-2"><small>Email</small></p>
						</div>
					<hr>
					<div class="pl-5 pr-5">
							<h6 class="pl-2 pr-2 mb-0"><strong>1234567890</strong></h6>
							<p  class="pl-2 pr-2"><small>Home Phone</small></p>
						</div>
					<hr>
					<div class="pl-5 pr-5">
							<h6 class="pl-2 pr-2 mb-0"><strong>1234567890</strong></h6>
							<p  class="pl-2 pr-2"><small>Mobile Number</small></p>
						</div>
				</div>
	</div>

	<table class="table table-hover c-raduis shadow-light mt-5 mb-5 border-0 ">
			<thead>
				<tr>
					<th class="border-0" scope="col"><h5 class="f-bold">Subject Load</h5></th>
					<th class="border-0"></th>
					<th class="border-0"></th>
					<th class="border-0"></th>
					<th class="border-0">
						<button type="button" class="btn btn-post f-normal c-raduis">Add Load</button>
					</th>
				</tr>
			</thead>
			<thead>
				<tr>
					<th scope="col">Subject Code</th>
					<th scope="col">Description</th>
					<th scope="col">Start</th>
					<th scope="col">End</th>
					<th scope="col">Day Code</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td scope="row">13310123</th>
					<td>Tapado</td>
					<td>Gemma</td>
					<td>College of Computer Science</td>
					<td>Active</td>
				</tr>
				<tr>
						<td scope="row">13310123</th>
						<td>Tapado</td>
						<td>Gemma</td>
						<td>College of Computer Science</td>
						<td>Active</td>
				</tr>
				<tr>
					<td scope="row">13310123</th>
					<td>Tapado</td>
					<td>Gemma</td>
					<td>College of Computer Science</td>
					<td>Active</td>
				</tr>
				<tr>
					<td scope="row">13310123</th>
					<td>Tapado</td>
					<td>Gemma</td>
					<td>College of Computer Science</td>
					<td>Active</td>
				</tr>
				<tr>
					<td scope="row">13310123</th>
					<td>Tapado</td>
					<td>Gemma</td>
					<td>College of Computer Science</td>
					<td>Active</td>
				</tr>
				<tr>
					<td scope="row">13310123</th>
					<td>Tapado</td>
					<td>Gemma</td>
					<td>College of Computer Science</td>
					<td>Active</td>
				</tr>
			</tbody>
		</table>
</div>

<!-- jquery -->
<script src="js/jquery-3.2.1.min.js"></script>
<!-- popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<!-- bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- bootstrap jquery -->
<script>
	// modal
	$('#myModal').on('shown.bs.modal', function () {
 	 $('#myInput').trigger('focus')
	})
</script>
</body>
</html>