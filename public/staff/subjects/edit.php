<?php require_once '../../../private/initialize.php';
/**
 * Edit the subjects table/array and print to screen the new value.
 *
 * Single Page Form Submission.
 */

/**
 * Prevent direct access to edit.php w/out an ID and redirect to main page.
 *
 * Notes:
 * 	edit.php needs to get an ID to edit the params.
 */
if ( ! isset( $_GET[ 'id' ] ) ) {
	redirect_to( url_for( 'staff/subjects/index.php' ) );
}

// Assign/initialize ID, knowing it's been accessed via Edit link.
$id = $_GET[ 'id' ];
// Default initializations
$menu_name = '';
$position = '';
$visible = '';


/**
 * Only POST request sets and prints params.
 *
 * Prevents form resubmission:
 * 	by default, GET request skips this and rest of code just prints the form.
 */
if ( request_is_post() ) {
	// Set fallback defaults, just in case.
	$menu_name = $_POST[ 'menu_name' ] ? $_POST[ 'menu_name'] : '';
	$position = $_POST[ 'position' ] ? $_POST[ 'position'] : '';
	$visible = $_POST[ 'visible' ] ? $_POST[ 'visible'] : '';

	echo "<p>Menu Name: " . $menu_name . "</p>";
	echo "<p>Position: " . $position . "</p>";
	echo "<p>Visible: " . $visible . "</p>";
}

$page_title = "Edit Subject";
include SHARED_PATH . '/staff_header.php';
?>

<div id="content">
	<p><a href="<?php echo url_for( '/staff/subjects/index.php' ); ?>">&laquo; Back to Subjects</a></p>

	<div class="subject edit">
		
		<form action="<?php	echo url_for( '/staff/subjects/edit.php?id=' . h(u( $id ))); ?>" method="post">
			<fieldset>

				<legend>Edit Subject</legend>
				<dl>
					<dt><label for="menu_name">Menu Name</label></dt>
					<!-- Value is POST request, so it's not escaped? -->
					<dd><input type="text" name="menu_name" value="<?php echo $menu_name; ?>">
					</dd>

					<dt><label for="position-select">Position</label></dt>
					<dd>
						<select name="position" id="subject-position">
							<option name="position" value="1">1</option>
							<option value="2">2</option>
						</select>
					</dd>

					<dt><label for="visible-checkbox">Visible</label></dt>
					<dd>
						<input type="hidden" name="visible" value="0">
						<input type="checkbox" name="visible" value="1" <?php echo $_POST['visible'] == '1' ? 'checked="true"' : ''; ?>>
					</dd>
				</dl>

				<div class="operations">
					<label><input type="submit" value="Edit Subject"></label>
				</div><!-- .submit -->
			</fieldset>
		</form>

	</div><!-- .subject .new -->

</div><!-- #content -->

<?php include SHARED_PATH . '/staff_footer.php'; ?>




































