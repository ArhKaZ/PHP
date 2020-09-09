
<?php

if (isset($_POST['ok'])) {
 echo '<p style="text-align: center">Hello mister ' .$_POST['nom'].'</p>';
    }
    else {
        if (isset($_POST['nom'])===true)
        { ?>
            <center>
        <form action="Pagedebase.php" method="post">
        <input type="text" textcolor="red" name="nom" required > <input name = "ok" type="submit" value="Valider" >
    </form>
        </center>
            <?php
        }?>
        <center>
        <form action="Pagedebase.php" method="post">
        <input type="text" name="nom" required > <input name = "ok" type="submit" value="Valider" >
    </form>
        </center>
        <?php

}
?>
<!DOCTYPE html>
<html>
<head> </br></br></br></br></br>

    <title>Rentrez votre nom</title>
</head>
<body>
</body>



</html>