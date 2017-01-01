<html>

	<head>
		<title>DMCFI LIBRARY</title>

		<?php $this->load->view('common/css_files'); ?>
	</head>

	<body>

		<?php
			if ( !empty ($this->session->userdata['session_data']) ) {
				$this->load->view('common/navtop_student');
			}
			switch ( $curpage ) {
				case 'Login':
					echo $content;
					break;
				case 'Home':
					echo $content;
					break;
<<<<<<< HEAD
				case 'Profile':
					echo $content;
					break;
=======
>>>>>>> 728dcf5425cacb607b2de2c6f0c616b1a44ebb59
			}
			if ( !empty ($this->session->userdata['session_data']) ) {
				$this->load->view('common/footer_user');
			}
		?>

		<?php $this->load->view('common/js_files'); ?>
	</body>

</html>