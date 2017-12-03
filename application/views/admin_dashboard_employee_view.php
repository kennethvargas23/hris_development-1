<?php include 'include_header.php' ?>
<?php include'include_navigation.php' ?>
<?php 
$keyword_here=null;
if($x = $this->input->get('search')){
	$keyword_here = $x;
}



 ?>

<div class="Home m3">
	<div class="Home ml-4 pt-4">
		<?php  var_dump($employees); ?>
	</div>
</div>
<div class="row top-card">
				<img class=" img-fluid border" src="https://static.pexels.com/photos/139829/pexels-photo-139829.jpeg" style="height: 120px; width: 120px;" >
				<div class=" ml-4">
					<h5><strong><?php echo $employees[0]['employee_firstName'] ?></strong></h5>
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
	<table class="table table-hover shadow-light c-radius bg-light mt-5 border" style="margin-bottom: 100px;">
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














 <?php include'include_footer.php' ?>