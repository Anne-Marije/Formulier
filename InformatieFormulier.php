<html>
    <body>
        
        <?php
        echo "Naam:".$_POST ["naam"]."<br>";
        echo "Leeftijd:".$_POST ["leeftijd"]."<br>";
        echo "Waar kennen we elkaar van:".$_POST ["kennen"]."<br>";
        echo "Lievelings eten:".$_POST ["eten"]."<br>";
        echo "Lievelings kleur:".$_POST ["kleur"]."<br>";
        echo "Dier:".$_POST ["dier"]."<br>";
        
        
        
        $naam = $_POST["naam"];
        $leeftijd = $_POST["leeftijd"];
        $kennen = $_POST["kennen"];
        $eten = $_POST["eten"];
        $kleur = $_POST["kleur"];
        
        $regel = "naam: " . $_POST['naam'];
        opslaan($naam, $regel);
        $regel = "leeftijd: " . $_POST['leeftijd'];
        opslaan($leeftijd, $regel);       
        $regel = "we kennen elkaar van: " . $_POST['kennen'];
        opslaan($kennen, $regel);  
        $regel = "lievelings eten: " . $_POST['eten'];
        opslaan($eten, $regel);
        $regel = "lievelings kleur: " . $_POST['kleur'];
        opslaan($eten, $regel);
        
     //   $query = "INSERT INTO `personen` (`naam`, `adres`, `woonplaats`, `gender` ) VALUES ( '$naam', '$adres', '$woonplaats', '$gender'  )";
        
            function opslaan($var1, $var2) {
            $fh = fopen($var1 . ".txt", 'a+');
            fwrite($fh, "\n");
            fwrite($fh, $var2);
            fwrite($fh, ";");
            fclose($fh);
        }
        
      ?>
      

        
    </body>
    
    
</html>