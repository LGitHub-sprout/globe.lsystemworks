<?php require_once('../../private/initialize.php'); ?>

<?php $page_title = "Staff Menu"; // Comes before the include that calls it. ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>
richard(actor) jason(maintains db) eric bryan(190 legal content 12step) charles(westchester programmer)

<section id="content">

	<nav>
		<ul>
			<li><a href="<?php echo url_for( '/staff/subjects/index.php' ); ?>">Subjects</a></li>
			<li><a href="<?php echo url_for( '/staff/pages/index.php' ); ?>">Pages</a></li>
		</ul>
	</nav>

</section>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>