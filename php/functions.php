<?php include ('../include/header.php'); ?>
<div id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Function with default and optional arguments</h4>
                <code>
<pre>
function get_info ($name='Mike',$profession=null) {
    if($profession) {
      echo "My name is $name and my profession is $profession.";
    } else {
      echo "My name is $name.";                                 
    }
}

get_info();
get_info('Romain');
get_info('Romain','webdesigner');
</pre>
                </code>

                <section>
                        <?php
                            function get_info ($name='Mike',$profession=null) {
                                  if($profession) {
                                      echo "My name is $name and my profession is $profession.</br>";
                                  } else {
                                      echo "My name is $name.</br>";                                 
                                  }
                            }

                            get_info();
                            get_info('Romain');
                            get_info('Romain','webdesigner');
                        ?>
                </section>
                <hr>
                <h4>Function with return</h4>
                <code>
<pre>
function get_name ($profession=null,$name='Mike') {
      if($profession) {
          $arr = array ($name,$profession);
      } else {
          $arr = array ($name);                                 
      }

      return $arr;
}

$resultaat = get_name('Webdesigner');

print_r ($resultaat);
</pre>
                </code>

                <section>
                        <?php
                            function get_name ($profession=null,$name='Mike') {
                                  if($profession) {
                                      $arr = array ($name,$profession);
                                  } else {
                                      $arr = array ($name);                                 
                                  }
                                  
                                  return $arr;
                            }

                            $resultaat = get_name('Webdesigner');
                            
                            print_r ($resultaat);

                        ?>
                </section>

            </div>
        </div>
    </div>
</div>
<?php include ('../include/footer.php'); ?>