<?php include ('../include/header.php'); ?>
<div id="main">
	<div class="container">
		<div class="row">
                    <div class="col-md-12">
                    <h4>Fibonacci</h4>
                <code>
<pre>
$fibo1 = 1;
$fibo2 = 1;

echo "$fibo2, ";

function addfibo ($a,$b) {
    $result = $a + $b;
    echo "$result, ";
    return $result;
}

while ($fibo2 < 30000){
    $tussen = addfibo($fibo1,$fibo2);
    $fibo1 = $fibo2;
    $fibo2 = $tussen;
}
</pre>
                </code>

                        <section>
                                <?php
                                $fibo1 = 0;
                                $fibo2 = 1;
                                
                                
                                echo "$fibo2, ";

                                function addfibo ($a,$b) {
                                    $result = $a + $b;
                                    echo "$result, ";
                                    return $result;
                                }

                                while ($fibo2 < 30000){
                                    $tussen = addfibo($fibo1,$fibo2);
                                    $fibo1 = $fibo2;
                                    $fibo2 = $tussen;
                                }
                            ?>
                        </section>
                    </div>
		</div>
	</div>
</div>
<?php include ('../include/footer.php'); ?>