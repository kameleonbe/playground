<?php
require_once ('../class/User.php');
include ('../include/header.php');

if (isset($_REQUEST['id'])) {
    $delete_id = $_REQUEST['id'];
    $user->deleteUser($delete_id);
}

?>
<div id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php echo ($delete_id) ? 'The user you want to delete has ID: ' .  $delete_id : 'The user ID was not found'; ?>
            </div>
	</div>
    </div>
</div>

<?php include ('../include/footer.php'); ?>