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
			<input type="text" class="full-width form-control search" placeholder="Search book ...." />
		</div>

		<div class="row">
			<div class="list">
				<?php
					if ( ! empty( $get_all_book ) ) {
						foreach ( $get_all_book as $gab ) :
				?>
					<div class="col-sm-3">
						<a data-toggle="modal" data-target="#bookSpec<?php echo $gab->NO; ?>">
							<div class="ibox">
							    <div class="ibox-content product-box">
							        <div>
							            <img class="img-responsive full-width" src="<?php echo base_url(); ?>public/img/<?php echo $gab->IMAGEURL;?>" style="height: 180px;"/>
							        </div>
							        <div class="product-desc" style="height: 170px;">
							            <left>
							            	<div><label>ISBN</label> : <small class="text-muted title"><?php echo $gab->ISBN; ?></small></div>
							            	<div><label>Available QTY</label> : <small class="text-muted title"><?php echo $gab->QUANTITY; ?></small></div>
							            </left>
							            <center>
							            	<div><label class="text-muted title"><?php echo $gab->TITLE; ?></label></div>
							            </center>
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
	</div>
</div>

<?php
	if ( ! empty( $get_all_book ) ) {
		foreach ( $get_all_book as $gab ) :
?>
			<div class="modal fade" id="bookSpec<?php echo $gab->NO; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  	<div class="modal-dialog modal-sm" role="document">
			    	<div class="modal-content">
			    		<form method="POST" action="<?php echo base_url(); ?>student/home/reserveBook" class="no-margin">
				      		<div class="modal-body padding-all">
				        		<center>
				        			<input type="text" name="txtNoId" value="<?php echo $gab->NO; ?>" hidden/>
				        			<img class="img-responsive full-width" src="<?php echo base_url(); ?>public/img/<?php echo $gab->IMAGEURL;?>"/>
				        			<label><?php echo $gab->TITLE; ?></label>
				        		</center>
				      		</div>
				      		<div class="text-center text-bold padding-top">Author: <i><?php echo $gab->AUTHOR; ?></i></div>
				      		<div class="text-center text-bold padding-top-bottom">Publisher: <i><?php echo $gab->PUBLISHER; ?></i></div>
				      		<button type="submit" class="btn btn-info full-width" name="btn_reserve">Reserve this book!</button>
			      		</form>
			    	</div>
			  	</div>
			</div>
<?php
		endforeach;
	}
?>
