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
$boolean = FALSE;
echo ($boolean) ? "boolean is TRUE" : "boolean is FALSE";
</pre>
            </code>
               
            <?php
                $boolean = FALSE;
                echo ($boolean) ? "boolean is TRUE" : "boolean is FALSE";
            ?>
            <hr>
            <h4>data type check</h4>
            <code>
<pre>
$var = TRUE;
echo 'Is Boolean: ' . is_bool($var);

$var = 'TRUE';
echo 'Is String: ' . is_string($var);

$var = 15;
echo 'Is Integer: ' . is_int($var);

$var = array('een','twee','drie');
echo 'Is Array: ' . is_array($var); 

$var= NULL;
echo 'Is NULL: ' . is_null($var);

$var= "";
echo 'Is Resource: ' . is_resource($var);

$var= "";
echo 'Is Object: ' . is_object($var);
 
$var= 3.14;
echo 'Is Double: ' . is_double($var);

</pre>
            </code>
               
            <?php
                $var = TRUE;
                echo 'Is Boolean: ' . is_bool($var) . '<br />';
                $var = 'TRUE';
                echo 'Is String: ' . is_string($var) . '<br />';
                $var = 15;
                echo 'Is Integer: ' . is_int($var) . '<br />';
                $var = array('een','twee','drie');
                echo 'Is Array: ' . is_array($var) . '<br />'; 
                $var= NULL;
                echo 'Is NULL: ' . is_null($var) . '<br />';
                $var= "";
                echo 'Is Resource: ' . is_resource($var) . '<br />';
                $var= "";
                echo 'Is Object: ' . is_object($var) . '<br />'; 
                $var= 3.14;
                echo 'Is Double: ' . is_double($var);
            ?>
            <hr>
	</div>
    </div>
</div>
<?php include ('../include/footer.php'); ?>