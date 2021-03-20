<?php require_once '../../../private/initialize.php';

$page_title = "Create New Subject";
include SHARED_PATH . '/staff_header.php';
?>

<div id="content">
	<h1>New Subject</h1>

<?php
	if ( request_is_post() ) {
		$menu_name = $_POST[ 'menu_name' ] ? $_POST[ 'menu_name' ] : '';
		$position = $_POST[ 'position' ] ? $_POST[ 'position' ] : '';
		$visible = $_POST[ 'visible' ] ? $_POST[ 'visible' ] : '';
		// printf( "<p>%s: %s</p>",
		// 	'Menu Name',
		// 	h( $menu_name ) );
		echo "<p>Menu Name: " . "$menu_name" . "</p>";
		echo "<p>Position: " . "$position" . "</p>";
		echo "<p>Visible: " . "$visible" . "</p>";
	} else {
			redirect_to( url_for( '/staff/subjects/new.php' ) );
		}
?>
	
</div><!-- #content -->

<?php include SHARED_PATH . '/staff_footer.php'; ?>










































