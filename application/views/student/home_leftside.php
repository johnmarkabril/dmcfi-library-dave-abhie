<div class="ibox-content">
	<img class="img-responsive full-width half-height" src="<?php echo base_url(); ?>public/img/image1.jpg" />
	<div class="padding-top-bottom">
		<h4>
			The Divine Mercy College Foundation Inc. is an institution with an aim to help young people improve their lives, we are committed to develop our youth  to become competent and better individuals.
		</h4>
		<h4>
			Our faculty is comprised of qualified and competent educators.
			We use modern mulit-media instructional facilities, and our campus has Wi-Fi and all our classrooms are air conditioned.
		</h4>
	</div>
</div>


<div class="padding-top">
	<div class="ibox-content" id="search_function">
		<div class="form-group">
<<<<<<< HEAD
			<input type="text" class="full-width form-control search" placeholder="Search book ...." />
=======
			<label>Search a book</label>
			<input type="text" class="full-width form-control search"/>
>>>>>>> 728dcf5425cacb607b2de2c6f0c616b1a44ebb59
		</div>

		<div class="row">
			<div class="list">
				<?php
					if ( ! empty( $get_all_book ) ) {
						foreach ( $get_all_book as $gab ) :
				?>
					<div class="col-sm-3">
<<<<<<< HEAD
						<a data-toggle="modal" data-target="#bookSpec<?php echo $gab->isbn; ?>">
							<div class="ibox">
							    <div class="ibox-content product-box">
							        <div>
							            <img class="img-responsive full-width" src="<?php echo base_url(); ?>public/img/book/<?php echo $gab->imageurl;?>"/>
							        </div>
							        <div class="product-desc" style="height: 70px;">
							            <left>
							                <small class="text-muted title"><?php echo $gab->titleOfbook; ?></small>
							            </left>
							        </div>
							    </div>
							</div>
						</a>
=======
						<div class="ibox">
						    <div class="ibox-content product-box">
						        <div>
						            <img class="img-responsive full-width" src="<?php echo base_url(); ?>public/img/book/<?php echo $gab->imageurl;?>"/>
						        </div>
						        <div class="product-desc" style="height: 70px;">
						            <left>
						                <small class="text-muted title"><?php echo $gab->titleOfbook; ?></small>
						            </left>
						        </div>
						    </div>
						</div>
>>>>>>> 728dcf5425cacb607b2de2c6f0c616b1a44ebb59
					</div>
				<?php
						endforeach;
					}
				?>
			</div>
		</div>
	</div>
</div>

<<<<<<< HEAD
<?php
	if ( ! empty( $get_all_book ) ) {
		foreach ( $get_all_book as $gab ) :
?>
			<div class="modal fade" id="bookSpec<?php echo $gab->isbn; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  	<div class="modal-dialog modal-sm" role="document">
			    	<div class="modal-content">
			      		<div class="modal-body padding-all">
			        		<center>
			        			<img class="img-responsive full-width" src="<?php echo base_url(); ?>public/img/book/<?php echo $gab->imageurl;?>"/>
			        			<label><?php echo $gab->titleOfbook; ?></label>
			        		</center>
			      		</div>

			        		<input type="button" class="btn btn-success btn-lg full-width" value="Borrow this book" />
			    	</div>
			  	</div>
			</div>
<?php
		endforeach;
	}
?>
=======
>>>>>>> 728dcf5425cacb607b2de2c6f0c616b1a44ebb59
