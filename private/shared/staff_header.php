<?php
$page_title = isset( $page_title ) ? $page_title : 'Staff Area';
?>

<!DOCTYPE html>
<html lang="en-US">  
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=edge">
  <title><?php echo $page_title ?></title>
  <link rel="stylesheet" media="all" href="<?php echo url_for( 'stylesheets/style.css' ); ?>">
</head>
<body>
  <header>
    <h1>Welcome To Globe Bank International</h1>
    <nav>
      <ul>
        <li><a href="<?php echo url_for( '/staff/index.php' ); ?>">Staff Menu</a></li>
      </ul>
    </nav>
  </header>