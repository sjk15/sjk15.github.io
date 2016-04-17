---
layout: default
title: "Spelprojekt 3: Tre-i-rad med design"
---


Spelprojekt 3: Tre-i-rad med design
====================================

Uppgift
-------

Skapa ett Tre-i-rad med  ett grafiskt gränssnitt. Använd dig av model-view-control (MVC) samt andra designmönster. Du jobbar tillsammans med en annan student med en metod som kallas parprogrammering. Ni presenterar inför klassen de designval ni gjort. 

Spelet
------
Spelet ska

* vara spelbart mellan två människor som turas om att välja en ruta 
* kontrollera och meddela vilken spelare som vunnit eller om det är oavgjort
* meddela användaren på något sätt om man försöker välja en redan vald ruta



Utförande
----------

* Meddela om du satsar på betyget G eller VG
* Du kommer att slumpmässigt paras ihop med en annan student som satsar på samma betyg
* Studera och jämför varandras tidigare lösningar för Tre-i-rad. Vilka likheter/skillnader hittar ni?
* Tillsammans tar ni fram en gemensam modell för Tre-i-rad och ett grafiskt gränssnitt enligt betygskraven

Frivilligt
----------
Hur det grafiska gränssnittet ska se ut är frivilligt så länge ett rutnät om 3*3 rutor presenteras. Det ska även vara möjligt att se ett felmeddelande när man klickar på en upptagen ruta, men hur detta presenteras är frivilligt.

Kommer ni på ytterligare funktionalitet att ha med i spelet är det tillåtet att ta med förutsatt att tiden tillåter och att betygskraven redan är uppfyllda.

Krav
----

För **godkänt** ska spelet minst uppfylla följande krav:

* Spelet ska ha ett grafiskt gränssnitt och använda sig av MVC
* Enum används på lämpligt ställe
* Designmänstret Observer/Observable används på lämpligt ställe
* Designmönstret Singleton används på lämpligt ställe
* Spelet har felhantering där ett objekt av klassen `Exception` kastas 

För betyget **väl godkänt** ska spelet, utöver kraven för godkänt, minst uppfylla nedan krav

* Spelet ska ha ytterligare en vy (_view_) som använder sig av samma modell
* Spelet innehåller en abstrakt klass på lämpligt ställe
* Spelet innehåller ett gränssnitt (interface) på lämpligt ställe
* Ytterligare ett designmönster används på motiverat ställe
* Felhantering med en egenskriven klass som ärver från `Exception`
* Spelet innehåller minst en testklass med testmetoder

 

Redovisning
-----------

Redovisningen är en muntlig presentation inför klassen där ni visar ert spel och motiverar hur koden uppfyller de olika kraven. Lägg upp presentationen så att de lösningar ni är mest nöjda med prioriteras. Ni ska båda kunna redogöra för samtlig kod och för **ungefärlig tid ni spenderat som navigatör/förare**.

Tid för redovisning är cirka 15 min per grupp. 

Redovisning sker **torsdag 28 januari**.

Varje student lämnar därefter in sin lösning på [JENSEN online](https://yh.jenseneducation.se/).

### Vad händer om jag inte redovisar torsdag 28 januari?

Om du utan giltigt skäl inte redovisar torsdag 28 januari så gäller följande:

1. Du får göra en *kompletteringsuppgift*:
   > Skriv ca ett A4 där du besvarar följande frågor:
   >  * Vilka är fördelarna med att använda MVC?
   >  * Vilka är nackdelarna med att använda MVC?
   >  * När bör man använda/inte använda MVC?
   >  * Vilka är fördelarna samt nackdelarna med parprogrammering enligt forskning?
   >  * När bör man använda/inte använda parprogrammering? 
   >  Lämnas in senast måndag 8/2 för att få ett betyg på kursen.

2. Du och din grupp har möjlighet att redovisa inför klassen eller Oscar i mån av tid under lektionstillfällena vecka 5.

3. Vecka 6 sätts betyg på kursen _OOP och Java_.

4. Lämna in kompletteringsuppgift och en individuell lösning på examinationsuppgiften för att höja betyget från ett IG. 

Om du har giltigt skäl för att inte kunna redovisa torsdag 28 januari (sjuk, vård av barn, personlig angelägenhet eller annat skäl som anses som giltig frånvaro på en arbetsplats):

* Orsak till varför du inte kan redovisa ska meddelas senast torsdag 28 januari 23:59. 
* Du behöver inte göra en kompletteringsuppgift men du och den du jobbar med får redovisa inför klassen eller Oscar i mån av tid under lektionstillfällena vecka 5. 

### Vad händer om jag redovisar torsdag 28 januari men inte når kraven för godkänt?

1. Du och din grupp har möjlighet att redovisa på nytt i mån av tid för Oscar under lektionstillfällena vecka 5. 

2. Om inte detta sker innan betyget sätts under vecka 6 så ska en individuell lösning på uppgiften lämnas in för att höja betyget från ett IG.
 



