<?php require_once '../../../private/initialize.php';

$page_title = "New Subject";
include SHARED_PATH . '/staff_header.php';

?>
<div id="content">
	<p><a href="<?php echo url_for( '/staff/subjects/index.php' ); ?>">Back to Subjects</a></p>

	<div class="subject new">
		
		<form action="<?php echo url_for( '/staff/subjects/create.php' ); ?>" method="post">
			<fieldset>
				<legend>Create New Subject</legend>
				<dl>
					<dt><label for="menu_name">Menu Name</label></dt>
					<dd><input type="text" name="menu_name" value="<?php echo h( $menu_name ); ?>"></dd>

					<dt><label for="position-select" name="position">Position</label></dt>
					<dd>
						<select name="position" id="subject-position">
							<option name="position" value="1">1</option>
						</select>
					</dd>

					<dt><label for="visible-checkbox">Visible</label></dt>
					<dd>
						<input type="hidden" name="visible" value="0">
						<input type="checkbox" name="visible" value="1">
					</dd>
				</dl>

				<div class="operations">
					<label><input type="submit" value="Create Subject"></label>
				</div><!-- .submit -->

			</fieldset>
		</form>

	</div><!-- .subject .new -->

</div><!-- #content -->






































