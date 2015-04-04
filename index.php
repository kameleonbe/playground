<?php
require_once ('class/User.php');
include ('include/header.php');
$result = $user->getUsers();
?>

<div id="main">
    <div class='container'>
        <div class='row'>
            <div class="col-md-12">
                <form action="php/add_user.php" method="POST">
                    <label>Naam</label>
                    <input type='text'name="name" />
                    <label>Voornaam</label>
                    <input type='text'name="firstname" />
                    <label>E-mail</label>
                    <input type='text'name="email" />
                    <input type='submit' value='Maak nieuwe user aan'/> 
                </form>

                <?php
                echo "<table><tr><th width='75'>ID</th><th width='150'>Naam</th><th width='150'>Voornaam</th><th width='300'>E-mail</th></tr>";

                foreach ($result as $row) {
                    echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row [2] . "</td><td>" . $row [3] . "</td><td><a href='php/delete_user.php?id=" . $row[0] . "'>Delete</td></tr>";
                }

                $user = NULL;

                echo "</table>";
                ?>
                
                <p><h4><?php echo 'PHP version is ' . PHP_VERSION; ?></h4><P>
            </div>
        </div>
    </div>
</div>



<?php include ('include/footer.php'); ?>