<?php require_once('../../../private/initialize.php'); ?>

<?php
	$subjects = array(
		array( 'id' => '1', 'position' => '1', 'visible' => '1', 'menu_name' => 'About Globe Bank' ),
		array( 'id' => '2', 'position' => '2', 'visible' => '1', 'menu_name' => 'Commercial' ),
		array( 'id' => '3', 'position' => '3', 'visible' => '1', 'menu_name' => 'Consumer' ),
		array( 'id' => '4', 'position' => '4', 'visible' => '1', 'menu_name' => 'Small Business' )
	);
?>

<?php $page_title = 'GBI Subjects'; // Comes before include that calls it. ?>
<?php include SHARED_PATH . '/staff_header.php'; ?>

<div id="content">
	<h2>Subjects</h2>

	<div class="actions">
		<p><a class="action" href="<?php echo url_for( '/staff/subjects/new.php' ); ?>">Create New Subject</a>
		</p>
	</div>

	<table>
		<tr>
			<th>ID</th>
			<th>Position</th>
			<th>Visible</th>
			<th>Menu Name</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
		</tr>

		<?php foreach( $subjects as $subject ) { ?>

		<tr>
			<td><?php	echo h( $subject['id'] ); ?></td>
			<td><?php	echo h( $subject['position'] ); ?></td>
			<td><?php	echo $subject['visible'] == 1 ? 'true' : 'false'; ?></td>
			<td><?php	echo h( $subject['menu_name'] ); ?></td>
			<td><a class="action" href="<?php echo url_for( '/staff/subjects/edit.php?id=' . h(u( $subject[ 'id' ] ))); ?>">Edit</a></td>
			<td><a class="action" href="<?php echo url_for( '/staff/subjects/show.php?id=' . h(u( $subject[ 'id' ] ))); ?>">View</a></td>
			<td><a class="action" href="<?php echo url_for( '/staff/subjects/' ); ?>">Delete</a></td>
		</tr>

		<?php } ?>
	</table>

</div><!-- #content -->

<?php include SHARED_PATH . '/staff_footer.php'; ?>











































