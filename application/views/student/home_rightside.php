<div class="ibox-content full-height">
<<<<<<< HEAD
	<div class="form-group">
		<input type="text" class="form-control full-width" placeholder="Search ...." />
	</div>
	
	<div class="panel panel-default margin-bottom no-border no-margin">
	  	<div class="panel-body def-color padding-top-bottom-ten" style="background-color: #E74C3C;">
	    	<h4 class="no-margin">Announcement
	    	</h4>
	  	</div>
	  	<ul class="list-group" id="categ_stud">
			<li class="list-group-item no-border no-padding-bottom">
				<a class="text-bold">Event title</a>
				<div><small>December 15, 2016</small></div>
			</li>
		</ul>
	</div>

	<div class="panel panel-default margin-bottom no-border no-margin">
	  	<div class="panel-body def-color padding-top-bottom-ten" style="background-color: #E74C3C;">
	    	<h4 class="no-margin">Borrowed book/s 
	    		<span class="pull-right">
	    			<?php
	    				echo $get_specific_borrowed_book;
	    			?>
	    		</span>
	    	</h4>
=======
	<div class="panel panel-default margin-bottom" style="background-color: #ED5565;">
	  	<div class="panel-body text-center def-color">
	    	<h3 class="text-bold">Time remaining</h3>
	    	<h3 class="no-margin">2 days</h3>
	    	<h6 class="no-margin">Introducing to Programming with C++</h6>
	  	</div>
	</div>
	
	<div class="panel panel-default margin-bottom" style="background-color: #23C6C8;">
	  	<div class="panel-body text-center def-color">
	    	<h3 class="text-bold">Borrowed book/s</h3>
	    	<h3 class="no-margin">3</h3>
>>>>>>> 728dcf5425cacb607b2de2c6f0c616b1a44ebb59
	  	</div>
	</div>

	<div class="panel panel-default no-border no-margin">
<<<<<<< HEAD
	  	<div class="panel-body def-color padding-top-bottom-ten" style="background-color: #E74C3C;">
	    	<h4 class="no-margin">Book Category</h4>
	  	</div>
	</div>

	<ul class="list-group" id="categ_stud">
		<?php
			if ( !empty($get_all_category) ) {
				foreach ( $get_all_category as $gac ) :
		?>
					<li class="list-group-item no-border">
						<a class="text-bold"><?php echo $gac->CATEGORYNAME; ?></a>
					</li>
		<?php
				endforeach;
			} else {
		?>
				<h2 class="text-center"> No category yet!</h2>
		<?php		
			}
		?>
=======
	  	<div class="panel-body def-color" style="background-color: #1AB394;">
	    	<h3 class="text-bold no-margin"><center>Book Category</center></h3>
	  	</div>
	</div>

	<ul class="list-group">
		<li class="list-group-item no-border">
			<span class="badge">14</span>
			Agriculture, Aquaculture &amp; Food Science
		</li>

		<li class="list-group-item no-border">
			<span class="badge">35</span>
			Architecture &amp; Planning
		</li>

		<li class="list-group-item no-border">
			<span class="badge">30</span>
			Art &amp; Applied Arts
		</li>

		<li class="list-group-item no-border">
			<span class="badge">11</span>
			Business, Economics, Finance &amp; Accounting
		</li>

		<li class="list-group-item no-border">
			<span class="badge">8</span>
			Chemistry
		</li>
>>>>>>> 728dcf5425cacb607b2de2c6f0c616b1a44ebb59
	</ul>


</div>