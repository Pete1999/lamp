<?php require_once('../private/initialize.php'); ?>
<?php $page_title = 'Home Budget Menu'; ?>
<?php include(SHARED_PATH . '/budget_header.php'); ?>
<div id="content">
    <div id="main-menu">
        <h2>Main Menu</h2>
        <ul>
            <li><a href="<?php echo url_for('assign_category/index.php'); ?>">Assign Category</a></li>
            <li><a href="<?php echo url_for('load/index.php'); ?>">Load</a></li>
        </ul>

    </div>
    
</div>
<?php include(SHARED_PATH . '/budget_footer.php'); ?>
  
