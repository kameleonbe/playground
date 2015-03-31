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
            <hr>
            <h4>foreach</h4>
            <code>
<pre>
$for_each_array = array();

array_push ($for_each_array,'een');
array_push ($for_each_array,'twee');
array_push ($for_each_array,'drie');
array_push ($for_each_array,'vier');

foreach ($for_each_array as $item) {
    echo $item;
}
</pre>
            </code>
            
            <?php
                $for_each_array = array();
                
                array_push ($for_each_array,'een');
                array_push ($for_each_array,'twee');
                array_push ($for_each_array,'drie');
                array_push ($for_each_array,'vier');
                
                foreach ($for_each_array as $item) {
                    echo $item . '<br />';
                }
            ?>
            
	</div>
    </div>
</div>
<?php include ('../include/footer.php'); ?>
