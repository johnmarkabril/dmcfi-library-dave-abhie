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
				case 'Book':
					echo $content;
					break;
				case 'Login':
					echo $content;
					break;
				case 'Sign-up':
					echo $content;
					break;
				case 'Home':
					echo $content;
					break;
				case 'Profile':
					echo $content;
					break;
			}
			if ( !empty ($this->session->userdata['session_data']) ) {
				$this->load->view('common/footer_user');
			}
		?>

		<?php $this->load->view('common/js_files'); ?>
	</body>

</html>