<html>
    <head>
        <style> 
#opmaak {
    width: 50%;
    padding: 10px 5px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #ffccb3;
    color: #990000;
    border: 1px solid #555;
}

    #keuze{background-color: #ffccb3;}
    
    #alles {font: italic bold 12px/30px Georgia, serif;}
    #alles {text-align: center;}
    #alles {color: #990000}
    
    #plaatje { align-content: center;
               margin-left: auto;
                   margin-right: auto;
                   display: block;
                }
    
    body {
    background-color: coral;
}
</style>
        
        
    </head>
    
    <body> 
        
        <a id = "alles">

        <h2>Anne-Marije's vrienden boekje</h2>  
        <img src="vrienden.jpg" id="plaatje">
        <form action="InformatieFormulier.php" method="post">
        Mijn naam is:
        <br><input style="tekst" name="naam" id="opmaak"></input><br>
        Mijn leeftijd is:
        <br><input style="tekst" name="leeftijd" id="opmaak"></input><br>
        We kennen elkaar van:
        <br><input style="tekst" name="kennen" id="opmaak"></input><br>
        Mijn lievelings eten:
        <br><input style="tekst" name="eten" id="opmaak"></input><br>
        Mijn lievelingskleur:
        <br><input style="tekst" name="kleur" id="opmaak"></input><br>
        <br>
       Wandelende tak
        <input type="radio" name="dier" value="wandelende tak" checked="checked" />
        of
        <input type="radio" name="dier" value="konijn" checked="checked" /> 
       Konijn
        
      <br>
      <br>
         <label for="keuze">Wat heb je liever:</label>
    <select id="keuze" name="Keuze">
        <option value="" disabled selected>je moet kiezen</option>
      <option value="steentje">Altijd een steentje in je schoen.</option>
      <option value="sokken">Altijd natte sokken.</option>
    </select>
        <br><br>
        
        
        <textarea rows="4" cols="50" id="opmaak">Schrijf een klein gedichtje: </textarea>
        
        <br><br>
        <img src="poes.gif" id="plaatje2">
        <br><br>
        <input type="submit" value="Submit" background-color: green>
        
        </form>
        
        </a>  
    </body>
<?php





?>

    </html>