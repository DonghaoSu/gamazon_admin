<?php
  if(!isset($page_title)) { $page_title = 'Staff Area'; }
?>

<!doctype html>

<html lang="en">
  <head>
    <title>Document</title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/staff.css'); ?>" />
  </head>

  <body>
    <header>
      <h1>Gamazon Admin Page</h1>
    </header>

    <navigation>
      <ul>
        <li><a href="<?php echo url_for('/staff/index.php'); ?>">Main Page</a></li>
      </ul>
    </navigation>
