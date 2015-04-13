<?php
require ('lib/FirePHPCore/fb.php');
FB::log ('FirePHPCore');

require_once ('class/User.php');
include ('include/header.php');
$result = $user->getUsers();

$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$name = $request->name;
$firstname = $request->firstname;   
$email = $request->email;

$user->insertUser(array(
    'name' => $name, 
    'firstname' => $firstname, 
    'email' => $email, 
    'timestamp' => time()
));

?>

<div id="main">
    <div class='container'>
        <div class='row'>
            <div class="col-md-12">
                <h1>PHP - Angular.js - Bootstrap</h1>
                <?php echo '<h1>' . "email" . $result . '</h1>'; ?>
                     <label>Name:</label>
      <input type="text" ng-model="yourName" placeholder="Enter a name here">
      <hr>
      <h2>Hello {{yourName}}!</h2>
                <form ng-submit="frmSubmit()" ng-controller="frmControl">
                    <label>Naam</label>
                    <input type='text' name="name" ng-model="name" />
                    <label>Voornaam</label>
                    <input type='text' name="firstname" ng-model="firstname" />
                    <label>E-mail</label>
                    <input type='text'name="email" ng-model="email" />
                    <input type='submit' name="submit" value='Maak nieuwe user aan'/> 
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