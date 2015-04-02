<?php include ('../include/header.php'); ?>
<?php	
$ctn = 1;
$table = $_REQUEST ['table'];
?>
<div id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h2><?php echo ('Tafel van ' . $table ) ?></h2>
                    <?php
                    while ($ctn < 11) {
                        echo ($table . " x " . $ctn . " = " . $ctn * $table . '<br />');
                        $ctn++;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include ('../include/footer.php'); ?>
