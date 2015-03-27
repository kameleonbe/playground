<?php
require '../lib/FirePHPCore/fb.php';
FB::log ('FirePHPCore');
require_once '../class/StatusPoster.php';
if (isset($_POST['status'])) {
    
        FB::log ('status is set');
    
        $statusStr = trim($_POST['status']);
        $length = mb_strlen($statusStr);
        $success = false;

   if ($length > 0 && $length < 500) {
        $success = $status->insertStatus(array(
             'name' => 'M A Hossain Tonu', 
             'image' => 'tonu.jpg', 
             'status' => $statusStr, 
             'timestamp' => time()
           ));
        }

        if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest') {
            echo ($success) ? '{"success":true}' : '{"error":"Error posting status"}';
            exit;
        }
    }
    $result = $status->getStatusPosts();
?>

<?php include ('../include/header.php'); ?>


       <link href="../assets/css/statusposter.css" media="screen" rel="stylesheet" type="text/css" />
       <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
       <script src="../assets/js/status.js"></script>

       <div id="status-container" class="container">
        <div class="row">
            <h1>Status Poster</h1>
            <div class="inputbox">
                <form id="statusFrom" action="http://localhost:8888/php/statusposter.php" method="POST" >
                    <textarea name="status" id="status_box">Write your status here</textarea>
                    <input class="right" type="submit" name="submit" id="submit" value="Share" />
                    <div id="postStatus" class="postStatus clearer hidden">loading</div>
                </form>
            </div>
            <ul>
                <?php
                if (is_array($result))
                foreach ($result as $row) {
                    echo '
                        <li>
                            <a href="#">
                                <img class="left" src="../assets/img/user/' . $row['image'] . '" alt="picture">
                            </a>
                            <div class="content left">
                                <a href="#">' . $row['name'] . '</a>
                                <div class="status">' . $row['status'] . '</div>
                                <span class="localtime" data-timestamp="' . $row['timestamp'] . '"></span>
                            </div>
                            <div class="clearer"></div>
                        </li>
                    ';
                }
                ?>
            </ul>
        </div>
        
        
        <div id="statusTemplate" class="hidden">
            <li>
                <a href="#">
                    <img class="left" src="#SRC" alt="picture">
                </a>
                <div class="content left">
                    <a href="#">#NAME</a>
                    <div class="status">#STATUS</div>
                    <span class="localtime">#TIME</span>
                </div>
                <div class="clearer"></div>
            </li>
        </div>
		
		</div>
<?php include ('../include/footer.php'); ?>

