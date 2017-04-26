<?php
	$sd = $this->session->userdata('session_data') ;
?>
<div class="ibox-content">
	<center>
		<?php
      		foreach ( $get_specific_user as $gsu ) :
      	?>
				<img class="img-responsive" style="width: 150px; height: 150px;" src="<?php echo base_url(); ?>public/img/<?php echo $gsu->IMAGEURL; ?> " />
				<div class="padding-top">
					<div>
						<label><a data-toggle="modal" data-target="#personalInfoModal" ><?php echo $gsu->FIRSTNAME." ".$gsu->LASTNAME ; ?></a></label>
					</div>
					<div>
						<label><?php echo $gsu->IDNO; ?></label>
					</div>
				</div>
		<?php
			endforeach;
		?>
	</center>

	<div class="padding-top"></div>

	<div class="panel panel-default no-border no-margin" style="border-radius: 0px;">
		<div class="panel-body def-color padding-top-bottom-ten" style="background-color: #E74C3C;">
		  	<h4 class="no-margin">Manage your borrowed book/s</h4>
		</div>
	</div>

	<div class="padding-top">
		<input type="text" class="form-control full-width" placeholder="Search your book/s ...." />
	</div>

	<div class="row">
		<?php
			if ( !empty($get_specific_borrowed_book) ) {
				foreach ( $get_specific_borrowed_book as $gsbb ) :
		?>
					<div class="padding-top col-sm-4">
						<a data-toggle="modal" data-target="">
							<div class="ibox">
								<div class="ibox-content product-box">
									<div>
										<img class="img-responsive full-width" style="height: 250px;" src="<?php echo base_url(); ?>public/img/<?php echo $gsbb->IMAGEURL; ?>"/>
									</div>
									<div class="product-desc" style="height: 70px;">
										<left>
											<small class="text-muted title"><?php echo $gsbb->TITLE; ?></small>
										</left>
									</div>
								</div>
							</div>
						</a>
					</div>
		<?php
				endforeach;
			}
		?>
	</div>

</div>

<div class="modal fade" id="personalInfoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  	<div class="modal-dialog modal-sm" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<h4 class="modal-title text-center" id="myModalLabel">Personal Information</h4>
      		</div>
      		<div class="modal-body padding-all no-padding-bottom">
      			<?php
      				foreach ( $get_specific_user as $gsu ) :
      			?>
		      			<form method="POST" enctype="multipart/form-data" action="<?php echo base_url(); ?>student/profile/update/<?php echo $gsu->NO; ?>">
			      			<div class="form-group">
								<input type="file" accept="image*/" name="image" id="file-1" class="inputfile inputfile-1" style="display:none;"/>
								<label for="file-1" class="full-width">
									<svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
										<path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z" />
									</svg> 
									<span>Choose an image</span></label>
							</div>
			       	 		<div class="form-group">
								<input type="text" class="form-control full-width" name="" value="<?php echo $gsu->FIRSTNAME.' '.$gsu->LASTNAME; ?>" disabled/>
			       	 		</div>
			       	 		<div class="form-group">
								<input type="text" class="form-control full-width" name="" value="<?php echo $gsu->IDNO; ?>" disabled/>
			       	 		</div>
			       	 		<div class="form-group">
								<input type="text" class="form-control full-width" name="email_address" placeholder="<?php echo $gsu->EMAILADDRESS; ?>" required/>
			       	 		</div>
			       	 		<div class="form-group">
								<input type="text" class="form-control full-width" name="contact" placeholder="<?php echo $gsu->PHONENUMBER; ?>" required/>
			       	 		</div>
		      				<input type="submit" name="Submit" class="btn btn-success btn-lg full-width" value="Save this information" />
		      			</form>
      			<?php
      				endforeach;
      			?>
      		</div>
    	</div>
  	</div>
</div>