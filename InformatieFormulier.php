<html>
    <body>
        
        <?php
        echo "Naam:".$_POST ["naam"]."<br>";
        echo "Leeftijd:".$_POST ["leeftijd"]."<br>";
        echo "Waar kennen we elkaar van:".$_POST ["kennen"]."<br>";
        echo "Lievelings eten:".$_POST ["eten"]."<br>";
        echo "Lievelings kleur:".$_POST ["kleur"]."<br>";
        echo "Drinken:".$_POST ["drinken"]."<br>";
        echo "Jaargetijden:".$_POST ["getijden"]."<br>";
        echo "Lievelingsdier(en):";
        foreach ($_POST["dieren"] as $dieren){
            
         echo $dieren." ";   
        }
        echo "<br>";
        echo "Moeilijke keuze:".$_POST["keuze"]."<br>";
        echo "Gedichtje:".$_POST["gedicht"]."<br><br>";
        echo "Bedankt voor het invullen, ".$_POST["naam"]."!";
          
            
        $naam = $_POST["naam"];
        $leeftijd = $_POST["leeftijd"];
        $kennen = $_POST["kennen"];
        $eten = $_POST["eten"];
        $kleur = $_POST["kleur"];
        
        $regel = "naam: " . $_POST['naam'];
        opslaan($naam, $regel);
        $regel = "leeftijd: " . $_POST['leeftijd'];
        opslaan($naam, $regel);       
        $regel = "we kennen elkaar van: " . $_POST['kennen'];
        opslaan($naam, $regel);  
        $regel = "lievelings eten: " . $_POST['eten'];
        opslaan($naam, $regel);
        $regel = "lievelings kleur: " . $_POST['kleur'];
        opslaan($naam, $regel);
        $regel = "drinken: ". $_POST["drinken"];
        opslaan ($naam, $regel);
         $regel = "jaargetijden: ". $_POST["getijden"];
        opslaan ($naam, $regel);  
         $regel = "dieren: ". $dieren;
        opslaan ($naam, $regel);
         $regel = "keuze: ". $_POST["keuze"];
        opslaan ($naam, $regel);        
         $regel = "gedichtje: ". $_POST["gedicht"];
        opslaan ($naam, $regel);
        
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