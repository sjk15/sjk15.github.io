---
layout: default
title: "Javaprogrammering och databasteknik"
---


Javaprogrammering och databasteknik
=========================================

* TOC
{:toc}

Info
----

* [Kursplanering](kursplanering Javaprogrammering och databasteknik.pdf) (pdf)


Examination
----
[Miniprojekt databaser och JDBC](miniprojekt.html)

Kurslitteratur
----
* [Databasteknik webbkurs](http://www.databasteknik.se/webbkursen/) 

Enkel introduktion på svenska till databaser. Finns även att köpa som tryckt bok om man föredrar det: ISBN 9789144044491 Padron-McCarthy-Risch 

* [Tutorial JDBC](http://www.tutorialspoint.com/jdbc/index.htm)

Tutorial och någorlunda enkel inledning till JDBC

* [Intro till SQL](http://www.w3schools.com/sql/)


  
### Förslag på böcker för fördjupning (EJ OBLIGATORISK LITTERATUR)


* Connolly and Begg, Database Systems: A Practical Approach to Design, Implementation, and Management, Global Edition. ISBN 9781292061184

Omfattande och bra bok på engelska om man vill ha en grundlig och ganska praktisk introduktion till databasteknik.
  
* H. Garcia-Molina, J. D. Ullman and J. Widom, Database Systems: The Complete Book  ISBN  978-1-292-02447-9

En mer teoretisk bok som går igenom vad som händer bakom kulisserna  i en databashanterare. Mycket grundlig och går igenom det mesta som är  värt att veta.

### Fördjupningsområden för den som är extra intresserad av ämnet (kommer ej att gås igenom i kursen)

* [Relational Algebra](https://en.wikipedia.org/wiki/Relational_algebra)
Teoretisk grund till SQL. [Tutorial](http://www.tutorialspoint.com/dbms/relational_algebra.htm) Kräver viss kunskap om mängdlära från matematiken för att kunna tillgodose sig innehållet helt.

* [Tuple Relational Calculus](https://en.wikipedia.org/wiki/Tuple_relational_calculus#Atoms)
Kräver även detta en viss matematisk mognad då abstrakt matematisk notation används.

* [SQL Injection](http://www.w3schools.com/sql/sql_injection.asp)
En teknik som används för att utnyttja vissa säkerhetsproblem vid hanteringen av indata av datorprogram som arbetar mot en databas. 2013 var SQLI (SQL Injection) etta på [OWASP](https://en.wikipedia.org/wiki/OWASP) lista över webbattacker.
[Övning med SQLI](sqli.pdf)
Uppgift där man får testa på SQL Injection på en testsida. **Varning!** testa detta enbart på denna test-sidan och absolut INTE på någon riktigt hemsida. Uppgiften är från en laboration i en kurs om datasäkerhet på KTH. 
[SQLI-cheat-sheet](https://www.netsparker.com/blog/web-security/sql-injection-cheat-sheet/)


Kontrollskrivningar/Recitations
----
Varje måndag eftermiddag kommer det presenteras två problem på kurshemsidan. Dessa ska lösas till torsdag morgon. På torsdagens lektion kommer man att få välja att kryssa i att man har löst noll,ett eller två av dessa problem. Har man kryssat i ett eller två ska man vara beredd att man kanske får presentera sina lösningar på tavlan. Sedan kommer en person, som kryssat i att den löst problemet, slumpvis bli vald att göra uppgiften på tavlan. Man erhåller 0.5 bonuspoäng till tentan per uppgift som man kryssat i. Dvs 1 poäng per gång som max (fem kontrollskrivningar*1 poäng = max 5 bonuspoäng till tentan). 

Tentan kommer ha 25 poäng som max och 18 som godkänt. Bonuspoängen läggs till utöver de poäng man får på tentan. Så exempelvis om man har 5 bonuspoäng innebär det att man behöver ha 13 poäng på tentamen för att bli godkänd. (13+5=18)

Dessa bonuspoäng kan endast erhållas om man deltar på hela recitations-tillfället. Inga undantag görs.

**Ändring, eftersom vi inte kommer ha någon recitation vecka 38 sänks antalet bonuspoäng man kan erhålla från 6 till 5.**

#### Recitation 1 torsdag 1 sep

[Uppgift](ks 1.pdf)

#### Recitation 2 torsdag 8 sep

[Uppgift](rec2.pdf)

#### Recitation 3 torsdag 15 sep

1. Övning 2 från http://porkforge.mardby.se/index.php?title=%C3%96va_p%C3%A5_grunderna_i_JDBC
2. Övning 3 från http://porkforge.mardby.se/index.php?title=%C3%96va_p%C3%A5_grunderna_i_JDBC

#### Recitation 4 torsdag 29 sep

[Uppgift](rec4.pdf)

Lektionstillfällen
-------------------

### Torsdag 29 sep

Jag vaknade upp med ont i halsen. Jag kommer vara i skolan men jag känner att halsen/rösten inte kommer hålla för att stå och hålla genomgångar. 

Jag kommer fixa en uppgift som ni får jobba med under dagen. Vill ni sitta i skolan och jobba så kommer jag som sagt vara på plats och kan hjälpa er. Men vill man hellre arbeta hemifrån är det okej. Recitation-uppgifterna till idag tar vi och flyttar fram till nästa vecka och kör samtidigt som den veckans uppgifter för att ni inte ska tvingas åka in enbart för dem.

Dagens innehåll är ORM och Hibernate.

Antag att du jobbar på ett företag som använder JDBC och MySQL. Chefen vill att er arbetsgrupp utvärderar om företaget ska byta till något ORM-ramverk som Hibernate. Ni behöver då orientera er i följande frågor/områden

* Vad är ORM?
* Det finns något "mismatch"-problem, vad är det chefen har hört talas om?
* Vad är Hibernate ORM?
* Vilka andra teknologier liknar Hibernate? Finns det något bättre alternativ än Hibernate?    
* Vilka andra teknologier är Hibernate beroende av (eller använder sig av)? Behöver man kunna något mer än Hibernate?
* Kan ni skriva ett exempel med en klass som mappas till en databas med Hibernate? (Använd någon tutorial/guide till hjälp!)


Jobba gärna tillsammans och samarbeta smart. Skicka en pdf med en kort sammanfattning (1 sida räcker) med era svar på frågorna ovan till mig på Slack.

Användbara länkar:
https://en.wikipedia.org/wiki/Object-relational_mapping
https://www.tutorialspoint.com/hibernate/orm_overview.htm
http://hibernate.org/orm/what-is-an-orm/
https://en.wikipedia.org/wiki/Object-relational_impedance_mismatch
https://en.wikipedia.org/wiki/List_of_object-relational_mapping_software




### Måndag 26 sep
Redovisningar av miniprojekt JDBC+MySQL
    
    
   
### Måndag & Torsdag 19 respektive 22 sep

Ingen genomgång av något nytt utan ni arbetar med era miniprojekt. Martin är på plats 8.15-16-30 båda dagarna ifall ni behöver hjälp.

### Torsdag 15 sep

Genomgång av projekt med JDBC och MySQL. Börja planera vad för databas och program du/ni vill bygga. Nästa vecka kommer det inte vara någon undervisning utan ni har hela veckan på er att arbeta med projektet. Redovisning måndag 26/9.

### Måndag 12 sep

Kollade på phpmyadmin. För att starta från XAMPP (på Windows):
  *Starta MySQL och Apache
  *Tryck på "Admin" vid MySQL alternativt starta en webbläsare och skriv "localhost/phpmyadmin" i adressfältet.

Började därefter med JDBC. Om ni missade lektionen så kolla på tutorialen till JDBC som ligger länkad under Kurslitteratur. Kod från dagen finns delad på Slack.

[Övningar JDBC](http://porkforge.mardby.se/index.php?title=%C3%96va_p%C3%A5_grunderna_i_JDBC) 

Uppgift 4 pratade vi inte något om på lektionen. Men fundera gärna på det.

### Torsdag 8 sep

[Laboration 4](http://porkforge.mardby.se/index.php?title=MySQL_Laboration_4_-_Mer_SELECT_och_funktioner#Funktionen_CONCAT.28.29)
[Laboration 5](http://porkforge.mardby.se/index.php?title=MySQL_Laboration_5_-_SELECT_med_LIKE_och_jokertecken)



### Måndag 5 sep
[Laboration 3](http://porkforge.mardby.se/index.php?title=MySQL_Laboration_3_-_SELECT_fr%C3%A5n_flera_tabeller_med_JOIN#SELECT_fr.C3.A5n_flera_tabeller)

Extra träning med SQL och joins:
[SQLZooTutorial-JOIN](http://sqlzoo.net/wiki/The_JOIN_operation)
[SQLZooTutorial-More JOINS](http://sqlzoo.net/wiki/More_JOIN_operations)
[SQLZooTutorial-Using NULL](http://sqlzoo.net/wiki/Using_Null)
[SQLZooTutorial-Self JOIN](http://sqlzoo.net/wiki/Self_join)

**Till torsdag 8/9** 
Se till att vara klar med Laboration 1, Laboration 2 och Laboration 3.

### Torsdag 1 sep

[Laboration 1](http://porkforge.mardby.se/index.php?title=MySQL_Laboration_1_-_B%C3%B6rja_%C3%B6va_p%C3%A5_MySQL)

[Laboration 2](http://porkforge.mardby.se/index.php?title=MySQL_Laboration_2_-_%C3%96vningar_p%C3%A5_%C3%A4ndra_f%C3%A4lt_och_v%C3%A4lja_poster)

Extra träning med SQL för den som känner att det behövs:
[CodeSchool](https://www.codeschool.com/courses/try-sql)
[SQLZoo tutorial](http://sqlzoo.net/wiki/SELECT_basics)
[sqlcourse](http://sqlcourse.com/)

**Till måndag 5/9** 
Se till att vara klar med Laboration 1 och Laboration 2.

### Måndag 29 aug

Vi pratade om databaser i allmänhet och då speciellt relationsdatabaser. ER-modellering. Nycklar

[Övningar ER](Övningar_ER.pdf)

[Övningar nycklar](Övningar_nycklar.pdf)

Måndagens powerpoint är delad på Slack

#### Egen läsning
Data models: [1](http://www.datamodel.com/index.php/articles/what-are-conceptual-logical-and-physical-data-models/) [2](https://en.wikipedia.org/wiki/ANSI-SPARC_Architecture)

Transaktioner: [1](https://en.wikipedia.org/wiki/Database_transaction) [2](https://en.wikipedia.org/wiki/ACID)

Normalisering: [1](http://porkforge.mardby.se/index.php?title=Normalisering) Kolla på videos som finns längst ned i 1 också
[2](http://www.databasteknik.se/webbkursen/normalisering/index.html)

ER-modellen till relationsmodellen: [1](http://databasteknik.se/webbkursen/er2relationer/index.html) [2](https://dbwebb.se/kunskap/kokbok-for-databasmodellering)


