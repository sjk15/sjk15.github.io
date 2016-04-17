---
layout: default
title: En recepthemsida
---

En recepthemsida
=================

* TOC
{:toc}

## Uppgift

Ta fram en hemsida för ett recept på ett bakverk med HTML5, CSS3, JavaScript, jQuery och Ajax. Fokus ligger på att skapa en bra struktur med lämpliga HTML5-element, presentation med CSS och interaktion med JavaScript, jQuery och AJAX.

## Krav

Webbplatsen ska bestå av två sidor:

* Sida 1 innehåller 
	* information om bakverket och 
	* en bild på hur det ser ut.
* Sida 2 innehåller 
	* ett recept med ingredienser som behövs, 
	* steg-för-steg instruktioner,
	* interaktion för att ändra mängden portioner,
	* interaktion för att betygsätta bakverket med stjärnor samt
	* information om hur många som röstat och snittbetyg på bakverket.

### HTML5

* Informationen ska vara uppmärkt på ett logiskt och konsekvent sätt
* Navigering ska finnas på båda sidor till den andra sidan
* HTML-taggar som endast påverkar sidans presentation används ej
* Koden ska följa korrekt syntax och validera utan fel med [The W3C Markup Validation Service](https://validator.w3.org/)

Använd lämpliga element för rubriker, textstycken, länkar, listor med mera och utnyttja de nya elementen i HTML5 som `<nav>`, `<header>`, `<footer>`, `<main>`, `<article>` och `<section>`.

### CSS 

* CSS-koden ska vara samlad i en extern stilmall för de två HTML-filerna
* CSS-koden ska minst omfatta typografi (storlek, stil och typsnitt för rubriker, brödtext m.m.) och layout (färg, form och positionering). 
* Någon del av sidan ska använda sig av en repeterande bakgrundsbild med CSS. Använd till exempel någon från [Subtle Patterns](http://subtlepatterns.com/)
* CSS-koden ska följa korrekt syntax och validera utan fel med [W3C:s CSS-valideringstjänst](https://jigsaw.w3.org/css-validator/)

Du väljer själv hur du vill att din sida ska se ut. Sök inspiration eller hitta på något eget. De designval du gör ska underlätta för besökaren att att läsa och ta till sig informationen på sidorna.

### JavaScript

På sidan med receptet ska det vara möjligt att ändra mängden portioner och se mängden ingredienser ändras därefter. Exempel: 10 st portioner av klassiska semlor kräver 2,5 dl mjölk. Om mängden portioner ökar till 20 st så ska mängden mjölk öka till 5 dl. 

**Mängden portioner behöver _inte_ anges som ett bråktal (1/2), decimaltal går bra (0.5).**

* JavaScript-koden ska vara samlad i en extern fil
* Mängden portioner man kan variera mellan får vara ett på förhand bestämt intervall men med minst 5 steg
* Mängden ingredienser ska uppdateras direkt när man valt mängden portioner
* Hur interaktionen ska se ut väljer du själv men det ska finnas något element på sidan för användaren att interagera med, t.ex. en textruta
* JavaScript-koden ska vara fri från fel och inga fel som rör din JavaScript-kod ska dyka upp i konsollen när hemsidan används. Koden ska validera med [Esprima: Syntax Validator](http://esprima.org/demo/validate.html)

### jQuery

Det ska på sidan finnas möjlighet att betygsätta bakverket med en till fem stjärnor. När man för muspekaren över en stjärna så ska stjänorna från vänster till den man pekar på ändra färg, till exempel gul istället för grå. När man klickar på en av stjärnorna så förblir stjärnorna ändrade i färg tills det att man klickar igen. När man klickar på en av stjärnorna så behåller de sin färg tills det att man för muspekaren över eller klickar igen på någon av stjärnorna.

* jQuery ska användas för att lösa uppgiften, koden som har med uppgiften att göra ska vara samlad i en extern fil
* Du väljer själv om du vill använda dig av bilder för stjärnor eller text med symboler
* Koden ska vara fri från fel vilket ska synas både i konsollen och genom att den validerar med [Esprima: Syntax Validator](http://esprima.org/demo/validate.html)

### AJAX

> **[Receptbetyg API](../api/recipe/receptapi.php)**
> Ett API för att betygsätta recept och se deras snittbetyg.

Med AJAX ska du införa så att det faktiskt går att rösta och se snittbetyg på bakverket när man klickar på stjärnorna. Du kommer att få tillgång till ett API för att betygsätta bakverk och hämta snittbetyg.

* Koden för AJAX-anropen ska vara med jQuery och samlad i en extern fil
* Ett anrop ska göras för att meddela vilket bakverk användaren röstat på och vilket betyg användaren gav
* När sidan laddats in och när man röstat ska ett anrop göras för att hämta snittbetyget och antalet röster på bakverket
* Antalet röster och snittbetyg ska presenteras på sidan men exakt hur bestämmer du själv
* Koden ska vara fri från fel vilket ska synas både i konsollen och genom att den validerar med [Esprima: Syntax Validator](http://esprima.org/demo/validate.html)

## Reodovisning

Webbplatsen ska kontinuerligt versionshanteras och presenteras med [GitHub Pages](https://pages.github.com/)

Recepthemsidan ska vara klar senast **fredagen den 26 februari kl 17:00**. 

Eventuella källor du använt dig av ska redovisas. Detta gäller både text och bild som har med bakverket att göra samt kod du fått hjälp med. 


## Betygsbedömning

För betyget **godkänt** ska recepthemsidan uppfylla följande:

* Kraven ovan för HTML5, CSS, JavaScript, jQuery och Ajax är uppfyllda.

För betyget **väl godkänt** ska recepthemsidan uppfylla följande:

* Utöver kraven för betyget godkänt ska du även ha gjort samtliga följande små deluppgifter:
	* HTML5 och JavaScript
		* Använd _localStorage_ i HTML5 för att spara antalet portioner du valt. När man går in på sidan ska antalet portioner man senast valde visas.
	* CSS3
		* Använd _media queries_ i CSS3 så att något på sidan tydligt förändras för skärmstorlekar mindre än 500px.
	* jQuery
		* Använd en _effect_ i jQuery på någon del av sidan, t.ex. en fadein på stjärnorna
	* Ajax
		* Visa en animerad GIF-bild medan datan (snittbetyg och antalet röster) laddas in


<!--
För VG:
* JavaScript
  * portion -> portioner
  * 1.5 dl mjölk -> 1 1/2 dl mjölk  
  * Vissa ingredienser ska inte ändras...
  * Kvaliten på lösningen
-->
