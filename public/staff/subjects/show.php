<?php require_once '../../../private/initialize.php';

$page_title = "Show Subjects";
include SHARED_PATH . '/staff_header.php';
?>

<div id="content">
	<h2>Show Subjects</h2>

	<p><a href="<?php echo url_for( '/staff/subjects/index.php' ); ?>">Back to Subjects</a></p>

	<?php
		$id = isset( $_GET[ 'id' ] ) ? $_GET[ 'id' ] : 999;
		echo h( $id ) . '<br />';
	?>



</div><!-- .content -->

<?php include SHARED_PATH . '/staff_footer.php'; ?>































