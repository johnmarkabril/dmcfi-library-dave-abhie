<div class="">
	<div class="ibox-content" id="search_function">
		<div class="form-group">
			<input type="text" class="full-width form-control search" placeholder="Search book ...." />
		</div>

		<div class="row">
			<div class="list">
				<?php
					if ( ! empty( $get_book_per_list ) ) {
						foreach ( $get_book_per_list as $gab ) :
				?>
					<div class="col-sm-3">
						<a data-toggle="modal" data-target="#bookSpec<?php echo $gab->NO; ?>">
							<div class="ibox">
							    <div class="ibox-content product-box">
							        <div>
							            <img class="img-responsive full-width" src="<?php echo base_url(); ?>public/img/<?php echo $gab->IMAGEURL;?>" style="height: 180px;"/>
							        </div>
							        <div class="product-desc" style="height: 90px;">
							            <left>
							                <small class="text-muted title"><?php echo $gab->TITLE; ?></small>
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
	</div>
</div>

<?php
	if ( ! empty( $get_book_per_list ) ) {
		foreach ( $get_book_per_list as $gab ) :
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