<?php include ('../include/header.php'); ?>
<div id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
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
            <h4>data type check & gettype()</h4>
            <code>
<pre>
$var = TRUE;
echo 'Is Boolean: ' . is_bool($var);
echo 'Type = ' . gettype($var);

$var = 'TRUE';
echo 'Is String: ' . is_string($var);
echo 'Type = ' . gettype($var);

$var = 15;
echo 'Is Integer: ' . is_int($var);
echo 'Type = ' . gettype($var);

$var = array('een','twee','drie');
echo 'Is Array: ' . is_array($var);
echo 'Type = ' . gettype($var);

$var= NULL;
echo 'Is NULL: ' . is_null($var);
echo 'Type = ' . gettype($var);

$var= "";
echo 'Is Resource: ' . is_resource($var);
echo 'Type = ' . gettype($var);

$var= "";
echo 'Is Object: ' . is_object($var);
echo 'Type = ' . gettype($var);
 
$var= 3.14;
echo 'Is Double: ' . is_double($var);
echo 'Type = ' . gettype($var);

</pre>
            </code>
               
            <?php
                $var = TRUE;
                echo 'Is Boolean: ' . is_bool($var) . '<br />';
                echo 'Type = ' . gettype($var) . '<br />';
                $var = 'TRUE';
                echo 'Is String: ' . is_string($var) . '<br />';
                echo 'Type = ' . gettype($var) . '<br />';
                $var = 15;
                echo 'Is Integer: ' . is_int($var) . '<br />';
                echo 'Type = ' . gettype($var) . '<br />';
                $var = array('een','twee','drie');
                echo 'Is Array: ' . is_array($var) . '<br />';
                echo 'Type = ' . gettype($var) . '<br />';
                $var= NULL;
                echo 'Is NULL: ' . is_null($var) . '<br />';
                echo 'Type = ' . gettype($var) . '<br />';
                $var= "";
                echo 'Is Resource: ' . is_resource($var) . '<br />';
                echo 'Type = ' . gettype($var) . '<br />';
                $var= "";
                echo 'Is Object: ' . is_object($var) . '<br />';
                echo 'Type = ' . gettype($var) . '<br />';
                $var= 3.14;
                echo 'Is Double: ' . is_double($var) . '<br />';
                echo 'Type = ' . gettype($var);
            ?>
            
            <hr>
            <h4>print_r</h4>
            <code>
<pre>
$names = array('Nele','Elisa', 'Ilja','Romain');
print_r($names);
</pre>
            </code>
            <?php
                $names = array('Nele','Elisa', 'Ilja','Romain');
                print_r($names);
            ?>
            <hr>
            <h4>var_dump</h4>
            <code>
<pre>
$vari = "This is a string variable";
var_dump($vari);
$vari = TRUE;
var_dump($vari);
$vari = 1;
var_dump($vari)
</pre>
            </code>
            <?php
                $vari = "This is a string variable";
                var_dump($vari);
                $vari = TRUE;
                var_dump($vari);
                $vari = 1;
                var_dump($vari)
            ?>
            <hr>
            <h4>define () constants</h4>
            <code>
<pre>
define (YEAR, 1967);
define (NAME, 'Romain Verbeke');
echo NAME . ' was born in ' . YEAR . '.';
</pre>
            </code>
               
            <?php
               define (YEAR, 1967);
               define (NAME, 'Romain Verbeke');
               echo NAME . ' was born in ' . YEAR . '.';
            ?>
            <hr>
            <h4>define () constants</h4>
            <code>
<pre>
$bool = TRUE; if ($bool):
<>$bool = TRUE<>
endif;
</pre>
            </code>
               
            <?php $bool = TRUE; if ($bool): ?>
            <h3>$bool = TRUE</h3>
            <?php endif;?>
            <hr>
            </div>
	</div>
    </div>
</div>
<?php include ('../include/footer.php'); ?>