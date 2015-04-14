<?php
require_once ('class/User.php');
include ('include/header.php');
$result = $user->getUsers();

$postdata = file_get_contents("php://input");

if ($postdata){
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
}
?>

<div id="main">
    <div class='container'>
        <div class='row'>
            <div class="col-md-12">
                <h1>PHP - Angular.js - Bootstrap</h1>
                     <label>Name:</label>
      <input type="text" ng-model="yourName" placeholder="Enter a name here">
      <hr>
      <h2>Hello {{yourName}}!</h2>
<form class="form-horizontal" ng-submit="frmSubmit()" ng-controller="frmControl">
<fieldset>

<!-- Form Name -->
<legend>Add new user</legend>

<div class="form-group">
  <label class="col-md-1 control-label" for="firstname">Voornaam</label>  
  <div class="col-md-5">
  <input id="firstname" name="firstname" placeholder="Voornaam" class="form-control input-md" required="" type="text" ng-model="firstname" >
  <span class="help-block">Typ hier uw voornaam</span>  
  </div>
</div>

<div class="form-group">
  <label class="col-md-1 control-label" for="name">Naam</label>  
  <div class="col-md-5">
  <input id="name" name="name" placeholder="Naam" class="form-control input-md" required="" type="text" ng-model="name" >
  <span class="help-block">Typ hier uw achternaam</span>  
  </div>
</div>

<div class="form-group">
  <label class="col-md-1 control-label" for="email">E-Mail</label>  
  <div class="col-md-5">
  <input id="email" name="email" placeholder="E-Mail" class="form-control input-md" required="" type="text" ng-model="email" >
  <span class="help-block">Typ hier uw e-mail adress</span>  
  </div>
</div>

<div class="form-group"> 
  <label class="col-md-1 control-label" for="email"></label> 
      <div class="col-md-5">
                <button id="submit" name="Submit" class="btn btn-primary">Maak nieuwe user aan</button>
      </div>
</div>


</fieldset>
    
   
</form>
      
       <legend>All users</legend>

                <?php
                echo "<table id='resultTable'><tr><th width='75'>ID</th><th width='150'>Naam</th><th width='150'>Voornaam</th><th width='300'>E-mail</th></tr>";

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