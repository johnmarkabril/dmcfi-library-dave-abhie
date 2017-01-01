<?php
	$sd = $this->session->userdata('session_data') ;
?>
<div class="ibox-content">
	<center>
		<img class="img-responsive" style="width: 150px; height: 150px;" src="<?php echo base_url(); ?>public/img/<?php echo $this->session->userdata('session_data')->IMAGEURL; ?>" />
		<div class="padding-top">
			<div>
				<label><a data-toggle="modal" data-target="#personalInfoModal" >Dave Dizon</a></label>
			</div>
			<div>
				<label>C-00654-13</label>
			</div>
		</div>
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

	<div class="row padding-top">
		<div class="col-sm-4">
			<a data-toggle="modal" data-target="">
				<div class="ibox">
					<div class="ibox-content product-box">
						<div>
							<img class="img-responsive full-width" src="<?php echo base_url(); ?>public/img/book/AccessibleEPUB3.gif"/>
						</div>
						<div class="product-desc" style="height: 70px;">
							<left>
								<small class="text-muted title">TITLE OF BOOK</small>
							</left>
						</div>
					</div>
				</div>
			</a>
		</div>
	</div>

</div>

<div class="modal fade" id="personalInfoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  	<div class="modal-dialog modal-sm" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<h4 class="modal-title text-center" id="myModalLabel">Personal Information</h4>
      		</div>
      		<div class="modal-body padding-all no-padding-bottom">
       	 		<div class="form-group">
					<input type="text" class="form-control full-width" value="<?php echo $sd->FIRSTNAME.' '.$sd->LASTNAME; ?>" disabled/>
       	 		</div>
       	 		<div class="form-group">
					<input type="text" class="form-control full-width" value="<?php echo $sd->IDNO; ?>" disabled/>
       	 		</div>
       	 		<div class="form-group">
					<input type="text" class="form-control full-width" placeholder="Email Address" />
       	 		</div>
       	 		<div class="form-group">
					<input type="text" class="form-control full-width" placeholder="Location Address" />
       	 		</div>
      		</div>
      		<input type="button" class="btn btn-success btn-lg full-width" value="Save this information" />
    	</div>
  	</div>
</div>