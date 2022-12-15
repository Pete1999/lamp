<?php
if (!isset($page_title)) {
    $page_title = 'Default Budget title';
}
?>
<!doctype html>

<html lang="en">
    <head>
        <title>Budget - <?php echo h($page_title); ?></title>
        <meta charset="utf-8">
        <link rel="stylesheet" media="all" href="<?php echo
               url_for('stylesheets/staff.css');?> "/>
    </head>

    <body>
        <header><h1>Budget</h1></header>
    <navigation>
        <ul>
            <li><a href="<?php echo url_for('index.php'); ?>">Menu</a></li>

        </ul>
    </navigation>
