<?php
require_once ('../class/User.php');
include ('../include/header.php');

if (isset($_POST['name'])) {
    $name = $_POST['name'];
}
if (isset($_POST['firstname'])) {
    $firstname = $_POST['firstname'];
}
if (isset($_POST['email'])) {
    $email = $_POST['email'];
}

$user->insertUser(array(
     'name' => $name, 
     'firstname' => $firstname, 
     'email' => $email, 
     'timestamp' => time()
));
?>
<div id="main">
    <div class="container">
        <div class="row">
	<?php echo ($name . " " . $firstname . " " . $email . " " . $timestamp); ?>
	</div>
    </div>
</div>

<?php include ('../include/footer.php'); ?>