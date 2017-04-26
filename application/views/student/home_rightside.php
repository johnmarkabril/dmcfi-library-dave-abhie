<div class="ibox-content " style="min-height: 500px;">

	<div class="panel panel-default margin-bottom no-border no-margin">
	  	<div class="panel-body def-color padding-top-bottom-ten" style="background-color: #E74C3C;">
	    	<h4 class="no-margin">Borrowed book/s 
	    		<span class="pull-right">
	    			<?php
	    				echo $get_specific_borrowed_book_rows;
	    			?>
	    		</span>
	    	</h4>
	    </div>
	</div>

	<div class="panel panel-default no-border no-margin">
	  	<div class="panel-body def-color padding-top-bottom-ten" style="background-color: #E74C3C;">
	    	<h4 class="no-margin">Book Category</h4>
	  	</div>
	</div>

	<ul class="list-group" id="categ_stud">
		<?php
			if ( !empty($get_all_category) ) {
				foreach ( $get_all_category as $gac ) :
		?>
					<li class="list-group-item no-border" style="text-align: right">
						<a class="text-bold" href="<?php echo base_url(); ?>student/book/category/<?php echo $gac->CATEGORYNAME; ?>"><?php echo $gac->CATEGORYNAME; ?></a>
					</li>
		<?php
				endforeach;
			} else {
		?>
				<h2 class="text-center"> No category yet!</h2>
		<?php		
			}
		?>
	</ul>


</div>