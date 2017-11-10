<html>
    <head>
        
        
        
    </head>
    
    <body> 
        
         <!--wil je het netjes zet het in een tabel-->

        <h2>Anne-Marije's vrienden boekje</h2>  
        <br>
        <form action="InformatieFormulier.php" method="post">
        Mijn naam is:
        <br><input style="tekst" name="naam"></input><br>
        Mijn leeftijd is:
        <br><input style="tekst" name="leeftijd"></input><br>
        We kennen elkaar van:
        <br><input style="tekst" name="kennen"></input><br>
        Mijn lievelings eten:
        <br><input style="tekst" name="eten"></input><br>
        Mijn lievelingskleur:
        <br><input style="tekst" name="kleur"></input><br>
        
        <br>
       Wandelende tak
        <input type="radio" name="dier" value="wandelende tak" checked="checked" />
        of
        <input type="radio" name="dier" value="konijn" checked="checked" /> 
       Konijn
        
      <br>
      <br>
         <label for="keuze">Maak een keuze:</label>
    <select id="keuze" name="Keuze">
      <option value="steentje">Altijd een steentje in je schoen.</option>
      <option value="sokken">Altijd natte natte sokken.</option>
    </select>
        <br><br>
        
        
        <textarea rows="4" cols="50">Schrijf een klein gedichtje: </textarea>
        
        <br><br>
        <input type="submit" value="Submit">
        
        </form>
        
        
    </body>
<?php





?>

    </html>