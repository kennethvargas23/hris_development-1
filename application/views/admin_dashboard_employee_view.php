<?php include 'include_header.php' ?>
<?php include'include_navigation.php' ?>
<?php 
$keyword_here=null;
if($x = $this->input->get('search')){
	$keyword_here = $x;
}
$employees = $employees[0];

 ?>

<div class="Home m3">
	<div class="Home ml-4 pt-4">
		<?php  var_dump($employees); ?>
	</div>
</div>















 <?php include'include_footer.php' ?>