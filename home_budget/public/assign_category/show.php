<?php
require_once '../../private/initialize.php';

$id = $_GET['id'] ?? '1';
?>

<?php $page_title = 'Show Detail';
include(SHARED_PATH . '/budget_header.php');
?>

<div id="content">
    <a class="back-link" href="<?php echo url_for('assign_category/index.php');
       ?>">&laquo; Back to listing</a>
    <div class="subject_show">
        Subject id: <?php echo h($id); ?>
    </div>
</div>

<?php include(SHARED_PATH . '/budget_footer.php'); ?>
