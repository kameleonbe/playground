<?php include ('../include/header.php'); ?>
<div id="main">
    <div class="container">
        <div class="row">
            <h4>for</h4>
            <code>
<pre>
for ($i==0;$i<11;$i++){
    $output .= $i . "&nbsp;";
};

echo ($output);
</pre>
            </code>
               
            <?php
                for ($i==0;$i<11;$i++){
                    $output .= $i . "&nbsp;";
                };

                echo ($output);
            ?>
            <hr>
            <h4>while</h4>
            <code>
<pre>
while($i<11){
    $output .= $i . "&nbsp;";
};

echo ($output);
</pre>
            </code>
            
            <?php
                while($i<11){
                    $output .= $i . "&nbsp;";
                };

                echo ($output);
            ?>
            
	</div>
    </div>
</div>
<?php include ('../include/footer.php'); ?>
