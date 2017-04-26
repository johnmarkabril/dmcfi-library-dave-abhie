<div style="background-color: #E74C3C;">
	<div class="container" style="background-color: #E74C3C;">
		<nav class="navbar navbar-static-top no-margin" role="navigation" style="background-color: #E74C3C;">
			<ul class="nav navbar-top-links navbar-left text-center">
		        <div class="margin-top-bottom">
		        <li>
		            <img src="<?php echo base_url();?>public/img/logo.png" class="img-responsive" style="width:30px;" />
		        </li>
		        <li>
		            <a href="<?php echo base_url(); ?>" style="font-size: 26px;color: #ECF0F1;">Divine Mercy Library Portal</a>
		        </li>
		        	
		        </div>
		    </ul>
			<ul class="nav navbar-top-links navbar-right text-center">
		        <li>
		            <a href="<?php echo base_url();?>student/profile/id/<?php echo $this->session->userdata('session_data')->IDNO; ?>">Profile</a>
		        </li>
		        <li>
		            <a href="<?php echo base_url();?>logout">Log out</a>
		        </li>
		    </ul>
		</nav>
	</div>
</div>