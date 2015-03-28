<?php include ('include/header.php'); ?>
<?php include ('include/dbuser.php'); ?>

<div class='container'>
    <div class='row'>
        <form action="php/add_user.php" method="POST">
               <label>Naam</label>
               <input type='text'name="name" />
               <label>Voornaam</label>
               <input type='text'name="firstname" />
               <label>E-mail</label>
               <input type='text'name="email" />
               <input type='submit' value='Maak nieuwe user aan'/> 
        </form>
    </div>
</div>

<?php include ('include/footer.php'); ?>