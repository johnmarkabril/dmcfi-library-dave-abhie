<script src="<?php echo base_url();?>public/js/jquery-3.1.1.min.js"></script>

<script src="<?php echo base_url();?>public/js/bootstrap.min.js"></script>

<script src="<?php echo base_url();?>public/js/plugins/toastr/toastr.min.js"></script>

<script src="<?php echo base_url();?>public/js/jquery.md5.js"></script>

<!-- CUSTOM AND PLUGIN JAVASCRIPT -->
<script src="<?php echo base_url();?>public/js/inspinia.js"></script>
<script src="<?php echo base_url();?>public/js/plugins/pace/pace.min.js"></script>

<script src="<?php echo base_url();?>public/js/plugins/list/list.min.js"></script>

<script src="<?php echo base_url();?>public/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo base_url();?>public/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script>

	// PUT THE DEFAULT CODE HERE - START
	$(document).ready(function(){
		// TOOLTIP AND POPOVER
        $('[data-toggle="tooltip"]').tooltip(); 
        $('[data-toggle="popover"]').popover();
        
        var options = {
          valueNames: [ 'title', 'description', 'author' ]
        };

        var searchfunction = new List('search_function', options);
        
    });

</script>