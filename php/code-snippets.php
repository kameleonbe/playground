<?php include ('../include/header.php'); ?>
<div id="main">
    <div class="container">
        <div class="row">
            <h4>if else</h4>
            <code>
<pre>
$boolean = TRUE;
if ($boolean) {
    echo "boolean is TRUE";
} else {
    echo "boolean is FALSE";
}
</pre>
            </code>
               
            <?php
                $boolean = TRUE;
                if ($boolean) {
                    echo "boolean is TRUE";
                } else {
                    echo "boolean is FALSE";
                }
            ?>
            <hr>
            <h4>short code if else</h4>
            <code>
<pre>
$boolean = TRUE;
echo ($boolean) ? "boolean is TRUE" : "boolean is FALSE";
</pre>
            </code>
               
            <?php
                $boolean = TRUE;
                echo ($boolean) ? "boolean is TRUE" : "boolean is FALSE";
            ?>
            <hr>
	</div>
    </div>
</div>
<?php include ('../include/footer.php'); ?>