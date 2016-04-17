<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>En recepthemsida</title>
<?php 
include_once "../includes/header.php";
?>
</head>
<body><div class="container"><h1 id="en-recepthemsida">En recepthemsida</h1>

<p><div class="toc">
<ul>
<li><a href="#en-recepthemsida">En recepthemsida</a><ul>
<li><a href="#uppgift">Uppgift</a></li>
<li><a href="#krav">Krav</a><ul>
<li><a href="#html5">HTML5</a></li>
<li><a href="#css">CSS</a></li>
<li><a href="#javascript">JavaScript</a></li>
<li><a href="#jquery">jQuery</a></li>
<li><a href="#ajax">AJAX</a></li>
</ul>
</li>
<li><a href="#reodovisning">Reodovisning</a></li>
<li><a href="#betygsbedömning">Betygsbedömning</a></li>
</ul>
</li>
</ul>
</div>
</p>



<h2 id="uppgift">Uppgift</h2>

<p>Ta fram en hemsida för ett recept på ett bakverk med HTML5, CSS3, JavaScript, jQuery och Ajax. Fokus ligger på att skapa en bra struktur med lämpliga HTML5-element, presentation med CSS och interaktion med JavaScript, jQuery och AJAX.</p>



<h2 id="krav">Krav</h2>

<p>Webbplatsen ska bestå av två sidor:</p>

<ul>
<li>Sida 1 innehåller  <br>
<ul><li>information om bakverket och </li>
<li>en bild på hur det ser ut.</li></ul></li>
<li>Sida 2 innehåller  <br>
<ul><li>ett recept med ingredienser som behövs, </li>
<li>steg-för-steg instruktioner,</li>
<li>interaktion för att ändra mängden portioner,</li>
<li>interaktion för att betygsätta bakverket med stjärnor samt</li>
<li>information om hur många som röstat och snittbetyg på bakverket.</li></ul></li>
</ul>



<h3 id="html5">HTML5</h3>

<ul>
<li>Informationen ska vara uppmärkt på ett logiskt och konsekvent sätt</li>
<li>Navigering ska finnas på båda sidor till den andra sidan</li>
<li>HTML-taggar som endast påverkar sidans presentation används ej</li>
<li>Koden ska följa korrekt syntax och validera utan fel med <a href="https://validator.w3.org/">The W3C Markup Validation Service</a></li>
</ul>

<p>Använd lämpliga element för rubriker, textstycken, länkar, listor med mera och utnyttja de nya elementen i HTML5 som <code>&lt;nav&gt;</code>, <code>&lt;header&gt;</code>, <code>&lt;footer&gt;</code>, <code>&lt;main&gt;</code>, <code>&lt;article&gt;</code> och <code>&lt;section&gt;</code>.</p>



<h3 id="css">CSS</h3>

<ul>
<li>CSS-koden ska vara samlad i en extern stilmall för de två HTML-filerna</li>
<li>CSS-koden ska minst omfatta typografi (storlek, stil och typsnitt för rubriker, brödtext m.m.) och layout (färg, form och positionering). </li>
<li>Någon del av sidan ska använda sig av en repeterande bakgrundsbild med CSS. Använd till exempel någon från <a href="http://subtlepatterns.com/">Subtle Patterns</a></li>
<li>CSS-koden ska följa korrekt syntax och validera utan fel med <a href="https://jigsaw.w3.org/css-validator/">W3C:s CSS-valideringstjänst</a></li>
</ul>

<p>Du väljer själv hur du vill att din sida ska se ut. Sök inspiration eller hitta på något eget. De designval du gör ska underlätta för besökaren att att läsa och ta till sig informationen på sidorna.</p>



<h3 id="javascript">JavaScript</h3>

<p>På sidan med receptet ska det vara möjligt att ändra mängden portioner och se mängden ingredienser ändras därefter. Exempel: 10 st portioner av klassiska semlor kräver 2,5 dl mjölk. Om mängden portioner ökar till 20 st så ska mängden mjölk öka till 5 dl. </p>

<p><strong>Mängden portioner behöver <em>inte</em> anges som ett bråktal (1/2), decimaltal går bra (0.5).</strong></p>

<ul>
<li>JavaScript-koden ska vara samlad i en extern fil</li>
<li>Mängden portioner man kan variera mellan får vara ett på förhand bestämt intervall men med minst 5 steg</li>
<li>Mängden ingredienser ska uppdateras direkt när man valt mängden portioner</li>
<li>Hur interaktionen ska se ut väljer du själv men det ska finnas något element på sidan för användaren att interagera med, t.ex. en textruta</li>
<li>JavaScript-koden ska vara fri från fel och inga fel som rör din JavaScript-kod ska dyka upp i konsollen när hemsidan används. Koden ska validera med <a href="http://esprima.org/demo/validate.html">Esprima: Syntax Validator</a></li>
</ul>

<h3 id="jquery">jQuery</h3>

<p>Det ska på sidan finnas möjlighet att betygsätta bakverket med en till fem stjärnor. När man för muspekaren över en stjärna så ska stjänorna från vänster till den man pekar på ändra färg, till exempel gul istället för grå. När man klickar på en av stjärnorna så förblir stjärnorna ändrade i färg tills det att man klickar igen. När man klickar på en av stjärnorna så behåller de sin färg tills det att man för muspekaren över eller klickar igen på någon av stjärnorna.</p>

<ul>
<li>jQuery ska användas för att lösa uppgiften, koden som har med uppgiften att göra ska vara samlad i en extern fil</li>
<li>Du väljer själv om du vill använda dig av bilder för stjärnor eller text med symboler</li>
<li>Koden ska vara fri från fel vilket ska synas både i konsollen och genom att den validerar med <a href="http://esprima.org/demo/validate.html">Esprima: Syntax Validator</a></li>
</ul>



<h3 id="ajax">AJAX</h3>

<blockquote>
  <p><strong><a href="../api/recipe/receptapi.php">Receptbetyg API</a></strong> <br>
  Ett API för att betygsätta recept och se deras snittbetyg.</p>
</blockquote>

<p>Med AJAX ska du införa så att det faktiskt går att rösta och se snittbetyg på bakverket när man klickar på stjärnorna. Du kommer att få tillgång till ett API för att betygsätta bakverk och hämta snittbetyg.</p>

<ul>
<li>Koden för AJAX-anropen ska vara med jQuery och samlad i en extern fil</li>
<li>Ett anrop ska göras för att meddela vilket bakverk användaren röstat på och vilket betyg användaren gav</li>
<li>När sidan laddats in och när man röstat ska ett anrop göras för att hämta snittbetyget och antalet röster på bakverket</li>
<li>Antalet röster och snittbetyg ska presenteras på sidan men exakt hur bestämmer du själv</li>
<li>Koden ska vara fri från fel vilket ska synas både i konsollen och genom att den validerar med <a href="http://esprima.org/demo/validate.html">Esprima: Syntax Validator</a></li>
</ul>



<h2 id="reodovisning">Reodovisning</h2>

<p>Webbplatsen ska kontinuerligt versionshanteras och presenteras med <a href="https://pages.github.com/">GitHub Pages</a></p>

<p>Recepthemsidan ska vara klar senast <strong>fredagen den 26 februari kl 17:00</strong>. </p>

<p>Eventuella källor du använt dig av ska redovisas. Detta gäller både text och bild som har med bakverket att göra samt kod du fått hjälp med. </p>



<h2 id="betygsbedömning">Betygsbedömning</h2>

<p>För betyget <strong>godkänt</strong> ska recepthemsidan uppfylla följande:</p>

<ul>
<li>Kraven ovan för HTML5, CSS, JavaScript, jQuery och Ajax är uppfyllda.</li>
</ul>

<p>För betyget <strong>väl godkänt</strong> ska recepthemsidan uppfylla följande:</p>

<ul>
<li>Utöver kraven för betyget godkänt ska du även ha gjort samtliga följande små deluppgifter: <br>
<ul><li>HTML5 och JavaScript <br>
<ul><li>Använd <em>localStorage</em> i HTML5 för att spara antalet portioner du valt. När man går in på sidan ska antalet portioner man senast valde visas.</li></ul></li>
<li>CSS3 <br>
<ul><li>Använd <em>media queries</em> i CSS3 så att något på sidan tydligt förändras för skärmstorlekar mindre än 500px.</li></ul></li>
<li>jQuery <br>
<ul><li>Använd en <em>effect</em> i jQuery på någon del av sidan, t.ex. en fadein på stjärnorna</li></ul></li>
<li>Ajax <br>
<ul><li>Visa en animerad GIF-bild medan datan (snittbetyg och antalet röster) laddas in</li></ul></li></ul></li>
</ul>

<!--&#10;F&#246;r VG:&#10;* JavaScript&#10;  * portion -&gt; portioner&#10;  * 1.5 dl mj&#246;lk -&gt; 1 1/2 dl mj&#246;lk  &#10;  * Vissa ingredienser ska inte &#228;ndras...&#10;  * Kvaliten p&#229; l&#246;sningen&#10;--></div></body>
</html>