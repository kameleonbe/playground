<?php include ('../include/header.php'); ?>
<div id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
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
            <hr>
            <h4>foreach 2</h4>
            <code>
<pre>
$icons = array(
'thumbs-up' => array ('thumbs-up','http://www.kameleon-media.be','go to kameleon.media'),
'thumbs-down' => array ('thumbs-down','http://www.kameleon-media.eu','go to kameleon.media'),
'hand-right' => array ('hand-right','http://kameleon.media','go to kameleon.media'),
'hand-left' => array ('hand-left','http://www.kameleon-media.be','go to kameleon.media'),
'hand-up' => array ('hand-up','http://www.kameleon-media.eu','go to kameleon.media'),
'hand-down' => array ('hand-down','http://kameleon.media','go to kameleon.media')
);

$lengte = count($icons);
foreach ($icons as $icon) :
<a href="echo $icon[1];" title="echo $icon[2];"><span class="glyphicon glyphicon- echo $icon[0];"></span></a>
endforeach;
</pre>
            </code>

            <?php
                $icons = array(
                    'thumbs-up' => array ('thumbs-up','http://www.kameleon-media.be','go to kameleon.media'),
                    'thumbs-down' => array ('thumbs-down','http://www.kameleon-media.eu','go to kameleon.media'),
                    'hand-right' => array ('hand-right','http://kameleon.media','go to kameleon.media'),
                    'hand-left' => array ('hand-left','http://www.kameleon-media.be','go to kameleon.media'),
                    'hand-up' => array ('hand-up','http://www.kameleon-media.eu','go to kameleon.media'),
                    'hand-down' => array ('hand-down','http://kameleon.media','go to kameleon.media')
                 );
                
                $lengte = count($icons);
                
                foreach ($icons as $icon) :
            ?>
            <a href="<?php echo $icon[1]; ?>" title="<?php echo $icon[2]; ?>"><span class="glyphicon glyphicon-<?php echo $icon[0]; ?>"></span></a>
                
            <?php endforeach;?>
     
            </div>
        </div>
    </div>
</div>
<?php include ('../include/footer.php'); ?>
