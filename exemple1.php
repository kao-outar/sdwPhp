<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php
            echo "c'est un script PHP";
            // ceci est un commentaire sur une seule ligne
            /* ceci est
            un commentaire
            sur plusieures lignes */
        ?>
        <?php
            $fruit = Array();
            $fruit[0] = "fraise";
            $fruit[1] = "banane";
            $fruit[2] = "abricot";
        
        
            $fruit = Array();
            $fruit['le_meilleur'] = "fraise";
            $fruit['le_prefere_de_Julien'] = "banane";
            $fruit['mon_prefere'] = "abricot";
        
        
            $nom = "LA GLOBULE";
            echo 'Bonjour ';
            echo $nom;
            echo ' !';
        

            $date_du_jour = date ("d-m-Y");
            $heure_courante = date ("H:i");
            echo 'Nous sommes le : ';
            echo $date_du_jour;
            echo ' Et il est : ';
            echo $heure_courante;

            
            echo 'Votre adresse IP est : '.$_SERVER['REMOTE_ADDR'];

            // Concaténer deux chaînes
            $nom = "LA GLOBULE";
            echo 'Bonjour ';
            echo $nom;
            echo ' !';

            $nom = "LA GLOBULE";
            echo 'Bonjour '.$nom.' !';
        ?>
    </body>
</html>