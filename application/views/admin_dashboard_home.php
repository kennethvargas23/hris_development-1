<?php include 'include_header.php' ?>
<?php include'include_navigation.php' ?>
<?php 
$keyword_here=null;
if($x = $this->input->get('search')){
	$keyword_here = $x;
}
$all = 't-btn';
$announcement = 't-btn';
$event = 't-btn';
switch ($active_filter) {
	case 'announcement':
	$announcement = 'active';
	break;
	case 'event':
	$event = 'active';
	break;
	default:
	$all = 'active';
	break;
}
?>
<div class='Home ml-3 mr-3 mt-3 mb-3'>
	<div class='row pb-5 pt-4'>
		<div class='mb-3 col-11 pl-0 pr-0 mx-auto'>
			<ul class='nav nav-pills'>
				<li class='nav-item '>
					<a class='nav-link <?php echo $all ?> btn f-bold c-raduis' href='?'>All</a>
				</li>
				<li class='nav-item'>
					<a class='nav-link <?php echo $announcement ?> btn f-bold ml-3 mr-3 c-raduis' href='?filter=announcement'>Announcements</a>
				</li>
				<li class='nav-item '>
					<a class='nav-link <?php echo $event ?> btn f-bold c-raduis' href='?filter=event'>Events</a>
				</li>
				<li class='ml-lg-auto'>

					<form class='form-inline'>

						<input class='form-control search-box c-raduis' type='search' name='search' placeholder='Search' aria-label='Search'>

					</form>

				</li>

			</ul>
		</div>

		<?php foreach ($posts as $post) { 
			$id = $post['post_id'];
			if ($post['type_name']=='event'){?> 

			<div class=' mb-3 col-11 card pl-0 pr-0 mx-auto shadow-light c-raduis'>
				<div class='card-body1 m-0'>
					<div class='d-flex p5'>
						<div class='date-box border-top-0 border-left-0 border-bottom-0 border border-black'>
							<div class='pt-5 pb-5'>
								<h1 class='text-center accent display-4 '><?php echo date('d', strtotime($post['post_when_start'])) ?></h1>
								<h5 class='mt-0'><small><?php echo date('l', strtotime($post['post_when_start'])) ?></small></h5>
							</div>
						</div>
						<div class='mt-2 pt-3 pb-4 pl-4 pr-2 ml-2 w-100'>
							<h3 class='p-0 m-0 f-bold'><?php echo highlight_phrase(word_limiter($post['post_title'], 100),$keyword_here, "<span style='font-weight:bold;'>", '</span>');?></h3>
							<p class='card-text pt-1'><small class='text-muted'><?php echo $post['account_username'];?> | Posted at <?php echo $post['post_dateCreated'];?></small></p>
							<p><?php echo highlight_phrase(word_limiter($post['post_body'], 30,'...'),$keyword_here, "<span style='font-weight:bold;'>", '</span>');?></p>
							<a href='post/<?php echo $post['post_id'] ?>' class ='btn mt-3 btn-success f-normal c-radius float-right mr-4'>Read More</a>
						</div>
					</div>
				</div>
			</div>



			<?php 
		}
		else{

			?>

			<div class='mb-3 col-11 card pl-0 pr-0 mx-auto shadow-light c-raduis pr-2'>
				<div class='card-body pt-5 p-4'>
					<h4 class=''><strong><?php echo highlight_phrase(word_limiter($post['post_title'], 100),$keyword_here, "<span style='font-weight:bold;'>", '</span>');?></strong></h4>
					<p class='card-text'><small class='text-muted'><em><?php echo $post['account_username'];?> | Posted at <?php echo $post['post_dateCreated'];?></em></small></p>

					<p><?php echo highlight_phrase(word_limiter($post['post_body'], 30,'...'),$keyword_here, "<span style='font-weight:bold;'>", '</span>');?></p>
					<a href='post/<?php echo $post['post_id'] ?>' class ='btn mt-3 btn-success f-normal c-radius float-right'>Read More</a>
				</div>
			</div>

			<?php }} ?>
<!-- 	
	<button type='button' class='btn btn-primary floating-btn' data-toggle='modal' data-target='#exampleModal'><i class='material-icons white-text mx-auto pt-1'>add</i></button> -->
	<!-- Modal -->

	<div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
		<div class='modal-dialog' role='document'>
			<div class='modal-content'>
				<div class='modal-header'>
					<h5 class='modal-title' id='exampleModalLabel'>Make Post</h5>
					<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
						<span aria-hidden='true'>&times;</span>
					</button>
				</div>
				<div class='modal-body'>


					<ul class='nav nav-tabs' id='myTab' role='tablist'>
						<li class='nav-item'>
							<a class='nav-link active' id='announce-tab' data-toggle='tab' href='#home' role='tab' aria-controls='home' aria-selected='true'>Create Announcement</a>
						</li>
						<li class='nav-item'>
							<a class='nav-link' id='event-tab' data-toggle='tab' href='#profile' role='tab' aria-controls='profile' aria-selected='false'>Create Event</a>
						</li>
					</ul>

					<div class='tab-content' id='myTabContent'>

						<div class='tab-pane fade show active' id='home' role='tabpanel' aria-labelledby='announce-tab'>
							<form method='post' action='post/add'>  
								<div class='form-group'>
									<label for='inputsm'>Title</label>
									<input class='form-control input-sm' id='inputsm' type='text' name='post_title' placeholder='Title'>
								</div>

								<div class='form-group'>
									<label for='comment'>Description</label>
									<textarea class='form-control' rows='5' id='comment' placeholder='Content' name='post_body'></textarea>
								</div>

								<div class='modal-footer'>
									<button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
									<button type='submit' class='btn btn-primary'>Save</button>
								</div>
								<input type="hidden" name="type" value="1">
							</form>
						</div>


						<div class='tab-pane fade' id='profile' role='tabpanel' aria-labelledby='event-tab'>
							<form method='post' action='post/add'>  

								<div class='form-group'>
									<label for='inputsm'>Title</label>
									<input class='form-control input-sm' id='inputsm' type='text' name='post_title' placeholder='Title'>
								</div>

								<div class='form-group'>
									<label for='inputsm'>Event Date</label>
									<input class='form-control input-sm' id='inputsm' type='date' name='post_when_start' placeholder='Event Date'>
								</div>

								<div class='form-group'>
									<label for='inputsm'>(Optional)</label>
									<label for='inputsm'>End Date</label>
									<input class='form-control input-sm' id='inputsm' type='date' name='post_when_end' placeholder='Event Date'>
								</div>

								<div class='form-group'>
									<label for='comment'>Description</label>
									<textarea class='form-control' rows='5' id='comment' placeholder='Description' name='post_body'></textarea>
								</div>

								<div class='modal-footer'>
									<button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
									<button type='submit' class='btn btn-primary'>Save changes</button>

								</div>
								<input type="hidden" name="type" value="2">
							</form>	
						</div>


					</div>


				</div>
<!--		      <div class='modal-footer'>
		        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
		        <button type='submit' class='btn btn-primary'>Save changes</button>
		    </div>-->
		</div>
	</div>
</div>

<footer class='footer fixed-bottom pb-4 pr-3'>
	<button type='button' class='btn btn-primary floating-btn float-right' data-toggle='modal' data-target='#exampleModal'><i class='material-icons white-text mx-auto pt-1'>add</i></button>
</footer>
<?php include 'include_footer.php' ?>


