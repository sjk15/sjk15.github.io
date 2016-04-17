Spelprojekt 2: Yatzy
========================

[TOC]

Uppgift
-------

Uppgiften går ut på att skapa spelet Yatzy med grafik (Swing) i Java.

### Regler Yatzy

Varje spelare turas om att kasta fem tärningar och med olika kombinationer av tärningar försöka uppnå så hög poäng som möjligt.  Till exempel när en spelare har fem tärningar med samma värde har spelaren fått Yatzy (50 poäng). I varje omgång får varje spelare tre försök att kasta sina tärningar.

Ditt spel ska följa reglerna för den svenska varianten av [Yatzy](http://www.algaspel.se/~/media/Alga/Files/Rules/flersprakiga/38018737_ReseYatzy.ashx)  

Exempel
-------
Inspiration och exempel på hur ditt program kan se ut hittar du bland annat med [Googles bildsökning](https://www.google.se/search?q=yatzy+programmering&safe=off&espv=2&biw=2348&bih=1379&source=lnms&tbm=isch&sa=X&ved=0CAYQ_AUoAWoVChMI24735d3qyAIVo35yCh2QZQz7#safe=off&tbm=isch&q=yatzy+program&pws=0&imgrc=2jDnKDeMX0NU1M%3A).


Frivilligt
----------
Du väljer själv hur ditt spel ska ut och vilka komponenter du vill använda dig av förutsatt att [kraven](#krav) är uppfyllda.

Utförande
---------

Uppgiften utförs individuellt och med inslag av grupparbete:

* Börja med att meddela vilket betyg du satsar på
* Du tar fram ditt eget Yatzy-spel.
* Du är med i en grupp som varje vecka ska ha ett möte där ni diskuterar status för projektet. Frågor att svara på inför gruppen under mötet:
  * Vad har du gjort sen förra mötet?
  * Vad planerar du att få gjort till nästa möte?
  * Vad behöver du hjälp med? Kan du få det av gruppen?
* Efter varje möte skickar ni en kort rapport från mötet med:
  * Närvarande
  * Kort status för varje gruppmedlem
  * Kort om de problem ni stött på, vad ni behöver hjälp med och andra diskussioner ni haft

Du har cirka fyra veckor på dig så planera tiden noga och använd tiden väl. Du behöver avsätta tid till:

* Analys
  * Fundera kring vilka klasser och metoder som behövs samt ta fram UML-diagram
* Design
  * Kod (namn på variabler och metoder samt struktur på kod)
  * Gränssnittet (layout, komponenter och lyssnare)
* Implementation
  * Ta fram fungerande kod för spelet

<!-- vilket betyg du satsr på -->
<!-- analysera och --->
<!-- använd tiden väl! -->

Krav
----

För både **godkänt** och **väl godkänt** ska spelet minst uppfylla följande krav:

* Ett enklare UML-diagram över klasserna i spelet
* Spelet visar fem tärningar och ett protokoll där poäng för varje spelare och varje tärningskombination visas
* Användaren ska ha möjlighet att välja vilka tärningar som ska slås om
* Poängen för respektive tärningskombination ska automatiskt räknas ut
* Efter alla tärningskombinationer är ifyllda så ska spelet räkna ut eventuell bonuspoäng och meddela den totala poängen

Dessutom ska koden vara strukturerad, dokumenterad och du ska visa på att du förstår och kan använda dig av objektorienterad programmering samt grafik med Swing i Java. <!-- Du använder klasser, metoder, arv, gränssnitt, layout och lyssnare på lämpligt sätt.--> Onödig kodupprening ska i största mån undvikas.

För betyget **godkänt** ska spelet minst uppfylla följande krav:

* Tärningarnas värden visas med text
* Spelet spelas i ordning uppifrån och ner
* Spelet spelas med en mänsklig spelare 

För betyget **väl godkänt** ska spelet minst uppfylla följande krav:

* Tärningarnas värden visas med bilder
* Spelet ska fråga om namn på spelare och visa vems tur det är att slå tärningarna
* Spelet har stöd för godtyckligt antal spelare

samt minst ett av följande krav

* En spelare kan vara mänsklig eller dator
* Spelet kan spelas först övre delen i valfri ordning, sedan nedre delen i valfri ordning
* Spelet kan spelas i valfri ordning

Dessutom ska koden tydligt följa en etablerad stilguide. Du kan redogöra och argumentera för att din kod är av hög kvalitet.

Fusk?
-----
* All kod i ditt spel ska vara skriven av dig själv.
* Redovisa ärligt hjälp du fått och källor du använt dig av
* Det är tillåtet att be om och ge hjälp för ökad förståelse 


Redovisning
-----------

### Ordinarie redovisning
#### Måndag 30 november

Till detta datum ska du ha en så gott som färdig lösning redo för redovisning. Du blir tilldelad en annan student att redovisa ditt spel inför och ta emot redovisning från. Tillsammans hjälps ni åt att säkerställa att kraven på spelet är uppfyllda.

#### Torsdag 3 december

Diskussion och muntlig feedback erbjuds de som önskar. 

#### Söndag 6 december 23:59

Lämna in en ZIP-fil via Slack med:

* UML-diagram
	* Ta med namn på klasser du skapat, relationer samt klasser/gränssnitt du direkt ärver från/implementerar
	* Ta inte med klassens attribut (instans- och klassvariabler) och metoder
* Dokumentation med _javadoc_
* Projektet
	* Se till att all källkod samt eventuella bilder följer med

### Komplettering
Om ditt spel inte uppfyller kraven för godkänt har du möjlighet att komplettera det fram till senast 18 december.


Valfri extra utmaning
---------------------
Om du blir klar tidigt eller vill ha en ytterligare utmaning, ta fram utöver ditt Yatzy-spel även [MaxiYatzy eller TripleYatzy](http://www.algaspel.se/~/media/Alga/Files/Rules/flersprakiga/38018949_QUBE_Superyatzy.ashx) genom att återanvända redan befintliga klasser och metoder du skrivit.


Resurser
--------
* Om [Yatzy på Wikipedia](https://sv.wikipedia.org/w/index.php?title=Yatzy&oldid=30481091)
* Fär dokumentation med [Javadoc](http://www.oracle.com/technetwork/java/javase/documentation/index-137868.html), se t.ex. denna [tutorial](https://students.cs.byu.edu/~cs240ta/fall2012/tutorials/javadoctutorial.html)
* Förslag på stilguide: [Java Programming Style Guidelines](http://geosoft.no/development/javastyle.html#ref5) eller [Google Java Style](https://google.github.io/styleguide/javaguide.html)
