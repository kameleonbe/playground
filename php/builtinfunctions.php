<?php include ('../include/header.php'); ?>
<div id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="http://php.net/manual/en/functions.internal.php">http://php.net/manual/en/functions.internal.php</a>
                <h4>strlen(), substr(), strpos()</h4>
                <code>
<pre>
$phrase = 'Dara Factor Two';
// strlen
echo 'String length of Dara Factor Two = ' . strlen($phrase);
// substr
echo 'Substring (0,8) = ' . substr($phrase,0,8);
// strpos
$start = strpos($phrase,'Factor');
echo 'Strpos of Factor = ' . $start;
echo 'Find sentence starting from Factor = ' . substr($phrase,$start);
</pre>
                </code>

                <section>
                        <?php
                            $phrase = 'Dara Factor Two';
                            // strlen
                            echo 'String length of Dara Factor Two = ' . strlen($phrase) . '</br>';
                            // substr
                            echo 'Substring (0,8) = ' . substr($phrase,0,8) . '</br>';
                            // strpos
                            $start = strpos($phrase,'Factor');
                            echo 'Strpos of Factor = ' . $start . '</br>';
                            echo 'Find sentence starting from Factor = ' . substr($phrase,$start);
                        ?>
                </section>
                <hr>
                
            </div>
        </div>
    </div>
</div>
<?php include ('../include/footer.php'); ?>