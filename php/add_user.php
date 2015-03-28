<?php include ('../include/header.php'); ?>
<?php	
if (isset($_POST['name'])) {
    $name = $_POST['name'];
}
if (isset($_POST['firstname'])) {
    $firstname = $_POST['firstname'];
}
if (isset($_POST['email'])) {
    $email = $_POST['email'];
}
?>
<div id="main">
    <div class="container">
        <div class="row">
	<?php echo ($name . " " . $firstname . " " . $email); ?>
	</div>
    </div>
</div>

<?php include ('../include/footer.php'); ?>


