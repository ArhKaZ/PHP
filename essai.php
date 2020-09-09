<!DOCTYPE html>
<html> <Center>
    <head>
        <title>Titre P</title>
    </head>
    <body>
    <h1>Ma page web</h1>
    <?php echo "Coucou <br><br>";
    $tr = rand (1, 10);
    echo "$tr <br>";
    if($tr <= 5)
    {
        echo "Bien joué hugo tu as réussi ! <br><br>";
    }
    else
    {
        echo "Dommage essaye encore <br><br>";
    }
    echo"La date en ce moment est: ";
    echo date ('d/m/y h:i:s');
    ?>
    <p>Bonjours... p</p>

    <?php
    echo "Bienvenue dans mon nouveaux jeu !<br><br><br><br>";
    echo "Appuyé sur OUI ou NON pour jouer au jeu !<br><br><br>";
    ?>
    <form method="post">
        <input class="favorite styled"
               type="submit"
               name="Oui"
               id="Oui"
               value="OUI">
        <input class="favorite styled"
               type="submit"
               name="Non"
               id="Non"
               value="NON">
    </form>

    <?php

    function testfun()
    {
        include "morpion.php" ;
    }

    function testfun2()
    {
        echo "echec" ;
    }

    if(array_key_exists('Oui',$_POST)){
        testfun();
    }

    if(array_key_exists('Non',$_POST)){
        testfun2();
    }

    ?>
    <style>
        .styled {
            border: 0;
            line-height: 2.5;
            padding: 0 20px;
            font-size: 1rem;
            text-align: center;
            color: #fff;
            text-shadow: 1px 1px 1px #000;
            border-radius: 10px;
            background-color: rgba(220, 0, 0, 1);
            background-image: linear-gradient(to top left,
            rgba(0, 0, 0, .2),
            rgba(0, 0, 0, .2) 30%,
            rgba(0, 0, 0, 0));
            box-shadow: inset 2px 2px 3px rgba(255, 255, 255, .6),
            inset -2px -2px 3px rgba(0, 0, 0, .6);
        }

        .styled:hover {
            background-color: rgba(255, 0, 0, 1);
        }

        .styled:active {
            box-shadow: inset -2px -2px 3px rgba(255, 255, 255, .6),
            inset 2px 2px 3px rgba(0, 0, 0, .6);
        }

    </style>
    </body>
</center>
</html>
