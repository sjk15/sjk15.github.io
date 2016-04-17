<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Spelprojekt 3: Tre-i-rad med design</title>
<?php 
include_once "../includes/header.php";
?>
</head>
<body><div class="container"><h1 id="spelprojekt-3-tre-i-rad-med-design">Spelprojekt 3: Tre-i-rad med design</h1>



<h2 id="uppgift">Uppgift</h2>

<p>Skapa ett Tre-i-rad med  ett grafiskt gränssnitt. Använd dig av model-view-control (MVC) samt andra designmönster. Du jobbar tillsammans med en annan student med en metod som kallas parprogrammering. Ni presenterar inför klassen de designval ni gjort. </p>



<h2 id="spelet">Spelet</h2>

<p>Spelet ska</p>

<ul>
<li>vara spelbart mellan två människor som turas om att välja en ruta </li>
<li>kontrollera och meddela vilken spelare som vunnit eller om det är oavgjort</li>
<li>meddela användaren på något sätt om man försöker välja en redan vald ruta</li>
</ul>



<h2 id="utförande">Utförande</h2>

<ul>
<li>Meddela om du satsar på betyget G eller VG</li>
<li>Du kommer att slumpmässigt paras ihop med en annan student som satsar på samma betyg</li>
<li>Studera och jämför varandras tidigare lösningar för Tre-i-rad. Vilka likheter/skillnader hittar ni?</li>
<li>Tillsammans tar ni fram en gemensam modell för Tre-i-rad och ett grafiskt gränssnitt enligt betygskraven</li>
</ul>



<h2 id="frivilligt">Frivilligt</h2>

<p>Hur det grafiska gränssnittet ska se ut är frivilligt så länge ett rutnät om 3*3 rutor presenteras. Det ska även vara möjligt att se ett felmeddelande när man klickar på en upptagen ruta, men hur detta presenteras är frivilligt.</p>

<p>Kommer ni på ytterligare funktionalitet att ha med i spelet är det tillåtet att ta med förutsatt att tiden tillåter och att betygskraven redan är uppfyllda.</p>



<h2 id="krav">Krav</h2>

<p>För <strong>godkänt</strong> ska spelet minst uppfylla följande krav:</p>

<ul>
<li>Spelet ska ha ett grafiskt gränssnitt och använda sig av MVC</li>
<li>Enum används på lämpligt ställe</li>
<li>Designmänstret Observer/Observable används på lämpligt ställe</li>
<li>Designmönstret Singleton används på lämpligt ställe</li>
<li>Spelet har felhantering där ett objekt av klassen <code>Exception</code> kastas </li>
</ul>

<p>För betyget <strong>väl godkänt</strong> ska spelet, utöver kraven för godkänt, minst uppfylla nedan krav</p>

<ul>
<li>Spelet ska ha ytterligare en vy (<em>view</em>) som använder sig av samma modell</li>
<li>Spelet innehåller en abstrakt klass på lämpligt ställe</li>
<li>Spelet innehåller ett gränssnitt (interface) på lämpligt ställe</li>
<li>Ytterligare ett designmönster används på motiverat ställe</li>
<li>Felhantering med en egenskriven klass som ärver från <code>Exception</code></li>
<li>Spelet innehåller minst en testklass med testmetoder</li>
</ul>



<h2 id="redovisning">Redovisning</h2>

<p>Redovisningen är en muntlig presentation inför klassen där ni visar ert spel och motiverar hur koden uppfyller de olika kraven. Lägg upp presentationen så att de lösningar ni är mest nöjda med prioriteras. Ni ska båda kunna redogöra för samtlig kod och för <strong>ungefärlig tid ni spenderat som navigatör/förare</strong>.</p>

<p>Tid för redovisning är cirka 15 min per grupp. </p>

<p>Redovisning sker <strong>torsdag 28 januari</strong>.</p>

<p>Varje student lämnar därefter in sin lösning på <a href="https://yh.jenseneducation.se/">JENSEN online</a>.</p>

<h3 id="vad-händer-om-jag-inte-redovisar-torsdag-28-januari">Vad händer om jag inte redovisar torsdag 28 januari?</h3>

<p>Om du utan giltigt skäl inte redovisar torsdag 28 januari så gäller följande:</p>

<ol>
<li><p>Du får göra en <em>kompletteringsuppgift</em>:</p>

<blockquote>
  <p>Skriv ca ett A4 där du besvarar följande frågor:</p>
  
  <ul><li>Vilka är fördelarna med att använda MVC?</li>
  <li>Vilka är nackdelarna med att använda MVC?</li>
  <li>När bör man använda/inte använda MVC?</li>
  <li>Vilka är fördelarna samt nackdelarna med parprogrammering enligt forskning?</li>
  <li>När bör man använda/inte använda parprogrammering?  <br>
  Lämnas in senast måndag 8/2 för att få ett betyg på kursen.</li></ul>
</blockquote></li>
<li><p>Du och din grupp har möjlighet att redovisa inför klassen eller Oscar i mån av tid under lektionstillfällena vecka 5.</p></li>
<li><p>Vecka 6 sätts betyg på kursen <em>OOP och Java</em>.</p></li>
<li><p>Lämna in kompletteringsuppgift och en individuell lösning på examinationsuppgiften för att höja betyget från ett IG. </p></li>
</ol>

<p>Om du har giltigt skäl för att inte kunna redovisa torsdag 28 januari (sjuk, vård av barn, personlig angelägenhet eller annat skäl som anses som giltig frånvaro på en arbetsplats):</p>

<ul>
<li>Orsak till varför du inte kan redovisa ska meddelas senast torsdag 28 januari 23:59. </li>
<li>Du behöver inte göra en kompletteringsuppgift men du och den du jobbar med får redovisa inför klassen eller Oscar i mån av tid under lektionstillfällena vecka 5. </li>
</ul>



<h3 id="vad-händer-om-jag-redovisar-torsdag-28-januari-men-inte-når-kraven-för-godkänt">Vad händer om jag redovisar torsdag 28 januari men inte når kraven för godkänt?</h3>

<ol>
<li><p>Du och din grupp har möjlighet att redovisa på nytt i mån av tid för Oscar under lektionstillfällena vecka 5. </p></li>
<li><p>Om inte detta sker innan betyget sätts under vecka 6 så ska en individuell lösning på uppgiften lämnas in för att höja betyget från ett IG.</p></li>
</ol></div></body>
</html>
