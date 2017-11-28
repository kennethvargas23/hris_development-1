<?php include 'include_header.php' ?>
<?php include 'include_navigation.php' ?>
<div class='Home ml-3 mr-3 mt-3 mb-3'>
	<div class="mt-3 pt-4">
		<?php
		$id = $post['post_id'];
		if ($post['type_name']=='event'){?> 

		<div class='mb-3 col-11 card pl-0 pr-0 mx-auto shadow-light c-raduis'>
			<div class='card-body1 m-0'>
				<div class='d-flex p5'>
					<div class='date-box border-top-0 border-left-0 border-bottom-0 border border-black'>
						<div class='pt-5 pb-5'>
							<h1 class='text-center accent display-4 '><?php echo date('d', strtotime($post['post_when_start'])) ?></h1>
							<h5 class='mt-0'><small><?php echo date('l', strtotime($post['post_when_start'])) ?></small></h5>
						</div>
					</div>
					<div class='mt-2 pt-3 pb-4 pl-4 pr-2 ml-2'>
						<h3 class='p-0 m-0 f-bold'><?php echo $post['post_title']?></h3>
						<p class='card-text pt-1'><small class='text-muted'><?php echo $post['account_username'];?> | Posted at <?php echo $post['post_dateCreated'];?></small></p>
						<p><?php echo $post['post_body']?></p>
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
				<h4 class=''><strong><?php echo $post['post_title']?></strong></h4>
				<p class='card-text'><small class='text-muted'><em><?php echo $post['account_username'];?> | Posted at <?php echo $post['post_dateCreated'];?></em></small></p>

				<p><?php echo $post['post_body']?></p>
				
			</div>
		</div>

		<?php } ?>
	</div>
</div>













<?php include 'include_footer.php' ?>