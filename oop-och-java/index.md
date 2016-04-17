---
layout: default
title: "OOP och Java"
kramdown: 
   toc_levels: 1
   syntax_highlighter: rouge
---


Objektorienterad Programmering och Java
=======================================

``` java
public class Main {
    public static void main(String[] args) {
        System.out.println("Hej studenter!");
    }
}
``` 

* TOC 
{:toc} 

Info
----
[Kursplanering (pdf)](kursplanering-OOP-och-Java.pdf)


### Bra resurser
The Java™ Tutorials
http://docs.oracle.com/javase/tutorial/

Learn Java - Free Interactive Java Tutorial
http://www.learnjavaonline.org/

Java Tutorial | SoloLearn: Learn to code and more for FREE!
http://www.sololearn.com/Course/Java/

Learn Programming with Java - Learneroo
https://www.learneroo.com/modules/11S

Programming by Doing
https://programmingbydoing.com/

Svensk Javaterminologi
https://www.nada.kth.se/~snilsson/publications/Javaterminologi/

Examination
-----------

Kursen examineras med spelprojekt och tentamina. 

### Spelprojekt

**[Spelprojekt 1: Tre-i-rad](tre-i-rad.html)**
Skapa ett spelbart tre-i-rad i terminalen/kommandotolken mellan två mänskliga spelare.

**[Spelprojekt 2: Yatzy](yatzy.html)**
Skapa ett Yatzy med grafik och objektorienterad programmering.


### Tentamen

**Tentamen 1: Grundläggande programmering i Java** 
Torsdag 17 sep 9:15--10:45

* Tentamen 1 är skriftlig -- ta med kladdpapper, penna och sudd.
* Betyg på tentamen 1 är antingen icke godkänt (IG) eller godkänt (G).
* Tentamen 1 behandlar det vi gått igenom från och med 17 augusti till och med 11 september:
	* Om Java
	* Syntax
	* Utskrift och inläsning
	* Variabler
	* Datatyper 
	* Strängar
	* Tal
	* Villkorssatser
	* Repetitionssatser
	* Funktioner (metoder)
	* Vektorer (arrayer) 

**Tentamen 2: Objektorienterad programmering i Java** 
Torsdag 5 nov 9:15--10:45

* Tentamen 2 är skriftlig -- ta med kladdpapper, penna och sudd.
* Betyg på tentamen 2 är antingen icke godkänt (IG) eller godkänt (G).
* Tentamen 2 behandlar det vi gått igenom från och med 11 september till och med 8 oktober:
	* Objekt
	* Klasser
	* Instansvariabler
	* Klassvariabler
	* Statiska och icke-statiska metoder
	* Arv
	* Konstruktor
	* Begreppen `this` och `super`
	* UML (enklare klassdiagram)
		* Arv (_is-a_)
		* Ägande (_has-a_)
			* Aggregering (_aggregation_)
			* Sammansättning/komposition (_composition_)
	* Överlagring (overloading) / Överskuggning (override) 


Föreläsningar
-------------

### Måndag 23 november

#### ProjectTable

ProjectTable använder sig av 

* _MVC_ för uppdelning av modell från View och Control 
	* En modell för ett spel, `GameModel`, kommer att hålla  `MyTableModel` uppdaterad som i sin tur uppdaterar en `JTable`
* Designmönstret _Observable_ / _observer_ för att `MyTableModel` ska observera `GameModel` och uppdatera en `JTable` därefter
* Designmönstret _Singleton_ för att underlätta åtkomst till `GameModel` på olika ställen i projektet (tänk "global variabel") 
* _JTable_ och en egengjord `MyTableModel` som förser JTable med data. Denna data hämtas ifrån `GameModel`
* _javadoc_ för att skapa dokumentation

Projektet består av [fyra filer att ladda ned](https://www.dropbox.com/sh/f678zxz9x3d0u02/AACYHrTmx_xp9naJ9jk3EDnFa?dl=0) samt [genererad dokumentation](http://edu.oscarb.se/SJK15/OOP-och-Java/project-table-docs/).  

#### Ämnen

* Utökade UML-klassdiagram 
	* [Class diagram](https://en.wikipedia.org/wiki/Class_diagram) (Wikipedia)
* Polymorfism
	* [Polymorphism](https://docs.oracle.com/javase/tutorial/java/IandI/polymorphism.html) (The Java™ Tutorials > Learning the Java Language > Interfaces and Inheritance)
* Designmönster Singleton
	* [Singleton Design Pattern](https://sourcemaking.com/design_patterns/singleton)
* Dokumentation (javadoc)
	* [How to Write Doc Comments for the Javadoc Tool](http://www.oracle.com/technetwork/java/javase/documentation/index-137868.html)
	* [Java Documentation](http://www.tutorialspoint.com//java/java_documentation.htm) (TutorialsPoint)
	* [Javadoc - Wikipedia, the free encyclopedia](https://en.wikipedia.org/wiki/Javadoc)
	* IntelliJ
		* [Creating Documentation Comments](https://www.jetbrains.com/idea/help/creating-documentation-comments.html)
		* [Generate JavaDoc Dialog](https://www.jetbrains.com/idea/help/generate-javadoc-dialog.html)
* JTable
	* [How to Use Tables ](https://docs.oracle.com/javase/tutorial/uiswing/components/table.html) (The Java™ Tutorials > Creating a GUI With JFC/Swing > Using Swing Components)
	* [java - AbstractTableModel tutorial](http://stackoverflow.com/questions/9845800/abstracttablemodel-tutorial/10341395#10341395) (Stack Overflow)

### Torsdag 5 november

Tentamen 2 skrevs och gicks igenom.

#### Lyssnare och händelser

* Om att fånga händelser:[EventDemo.java](https://sjk15.slack.com/files/oscar/F0DTWHCTX/EventDemo.java)
* En egen lyssnare: [MyActionListener.java](https://sjk15.slack.com/files/oscar/F0DU03KH9/MyActionListener.java)

### Måndag 2 november

#### Övningar

* [Questions and Exercises: Laying Out Components within a Container](http://docs.oracle.com/javase/tutorial/uiswing/QandE/questions-ch4.html)



### Torsdag 29 oktober

#### Swing layout

[Lesson: Laying Out Components Within a Container](https://docs.oracle.com/javase/tutorial/uiswing/layout/)

[A Visual Guide to Layout Managers](https://docs.oracle.com/javase/tutorial/uiswing/layout/visual.html)

[Implementationsövningar om layout med swing i Java](http://porkforge.mardby.se/index.php?title=Implementations%C3%B6vningar_om_layout_med_swing_i_Java)

#### Exempelkod

* [Main.java](https://slack-files.com/T093JN6HK-F0DEAASAV-223d44af09) (Slack)
* [TemplateWindow.java](https://slack-files.com/T093JN6HK-F0DEA3EPK-db8e39c161) (Slack)
* [ComponentsDemo.java](https://slack-files.com/T093JN6HK-F0DE5EXUM-fbadc3795e) (Slack)
* [BoxLayoutDemo.java](https://slack-files.com/T093JN6HK-F0DE98Z47-092478d25a) (Slack)
* [GridLayoutDemo.java](https://slack-files.com/T093JN6HK-F0DE8S32A-05dc613aa5) (Slack)



#### Swing komponenter
Implementationsövningar med swing i Java - PorkForge
http://porkforge.mardby.se/index.php?title=Implementations%C3%B6vningar_med_swing_i_Java

A Visual Guide to Swing Components (Java Look and Feel) (The Java™ Tutorials > Graphical User Interfaces > Swing Features)
http://da2i.univ-lille1.fr/doc/tutorial-java/ui/features/components.html

JComponent (Java Platform SE 7 )
https://docs.oracle.com/javase/7/docs/api/javax/swing/JComponent.html

Skapa program och undersök följande metoder för JComponent
```
        setFont - sätter textens typsnitt
        setBackground - bakgrundsfärg
        setBorder - skapar en ram
        setSize - Sätter storleken
        setVisible - Visar komponenten
        setEnabled - true/false, om den är på eller ej (är primär funktiob avstängd)
        setComponentPopUpMenu - Ett pop-up-fönster
        setLayout - tar hand om vyernas layout
        setMinimumSize - sätter en minsta storlek
        setMaximumSize - sätter en största storlek
        setName - Namn på komponenten
        setTitle - Namn på komponenten?
        setOpaque - (boolean) om true , bakgrundsfärg visas
        setTransferHandler - flytta in/utdata från komponenter

        getName - Hämta namn på komponenten
        getActionForKeystroke - Vad ska hända när man trycker på en tangent

```
### Måndag 26 oktober

_Kommer!_

### Måndag 12 oktober

**Kursplanering**
Kursplaneringen har reviderats, se [översikten](#oversikt).

**Kod**

* Hur kan vi plocka ett slumpvalt kort ur en kortlek? [MyRandom.java](https://slack-files.com/T093JN6HK-F0C9BE8TG-6019ee18ae), [CardGame.java](https://slack-files.com/T093JN6HK-F0C3JJBKQ-ee100e09a1)

**Scrum**

* Intro to Agile Scrum in Under 10 Minutes - What is Scrum? - [YouTube](https://www.youtube.com/watch?v=XU0llRltyFM)
* [A Lightweight Guide to the Theory and Practice of Scrum](http://www.scrumprimer.org/scrumprimer20_small.pdf) (pdf)
* [Scrum Guide](http://www.scribd.com/doc/35686704/Scrum-Guide)
* [Trello](https://trello.com)
* [Burndown for Trello](https://www.burndownfortrello.com/)
* [Scrum (rugby) - Wikipedia](https://en.wikipedia.org/wiki/Scrum_(rugby))

**Resurser:**

* [ArrayList (Java Platform SE 8)](https://docs.oracle.com/javase/8/docs/api/java/util/ArrayList.html)


### Torsdag 8 oktober 

Uppgift till efter lunch, ca 13:15:

* Skapa en klass för spelare som ärver från en klass "människa", 
	* Se till att spelare kan ha poäng och ett kort
* Skriv kod för att ta ut ett slumpmässigt kort ur kortleken och tilldela en spelare
	* Hur slumpar vi kort ur en en ArrayList? (
* Jämför två spelares kort
	* Vem har kortet med högst valör? Tilldela den spelaren en poäng!

### Måndag 5 oktober


**Resurser**

* [Grunder om objektorientering](http://www.databasteknik.se/webbkursen/oo-grunder/)

### Torsdag 1 oktober 

### Måndag 28 september

Vi pratade om arv (inheritance).

**Övningar på arv**

* [Övningar på arv](http://porkforge.mardby.se/index.php?title=%C3%96va_p%C3%A5_OOP_och_arv_i_Java): gör övning 1, 2 och 7
* [Questions and Exercises: Inheritance](http://docs.oracle.com/javase/tutorial/java/IandI/QandE/inherit-questions.html)
* Fundera över vad som kan vara super- eller subklass till:
	* Trafikljus
	* Flygplan
	* Bilpersonal
	* Hund

**Till torsdag 1 oktober**

I grupper om tre, fundera kring kortspel och ta fram tillsammans för några kortspel:

* Vad har vi för klasser/objekt?
	* Vilka metoder och variabler behövs?
* Vilka arv finns det? 
* Ta fram
	* Pseudo-kod
	* Flödesschema ([exempel](http://www.derekhaines.ch/vandal/wp-content/uploads/2012/12/240796d.jpg), [rita online](https://drive.draw.io/) samt [hur det fungerar](http://users.evtek.fi/~jaanah/IntroC/DBeech/3gl_flow.htm))
	* UML (vilka klasser och arv har vi)  
* Meddela mig vilka ni jobbar med senast ikväll måndag 28 sep

**Omtentamen**

Omtentamen är 9 oktober kl 9:00. Anmäl dig till Cecilia om ditt resultat ej är godkänt: <cecilia.sundkvist@jenseneducation.se>


### Torsdag 24 sep

**Kortspel**

I grupper om tre, välj ut några kortspel.

1. Jämför några kortspel i hur komplicerade de är och hur lätta de skulle vara att implementera i kod.
2. Välj ut ett av spelen och fundera kring vad som motsvarar klasser och objekt.
3. Ta fram pseudo-kod för kortspelet.

**Till måndag 21 sep**

* Läs på om arv (inheritance). *Länkar kommer!*


**Kod**

* Om kortspel, hur man genererar kort och använder flera konstruktorer: [CardGame.java (Slack)](https://slack-files.com/T093JN6HK-F0B8A0GHX-47f680e405)

### Måndag 21 sep 

**Kod**

* Om kortspel och spelkort: [CardGame.java (Slack)](https://slack-files.com/T093JN6HK-F0B1HM5CK-92ac3c2ac8)

**Länkar**

* [Java Programming Style Guidelines](http://geosoft.no/development/javastyle.html)

**Begrepp**

* Konstruktor
* `toString()`
* Klasser vs. hjälpklasser vs. omslagsklasser (*wrapper class*) 
* Integer vs int
* Statiska och icke-statiska variabler och metoder
* get- och set-metoder

### Torsdag 17 sep

**Kod**

* Om objektorienterad programmering, ett godtyckligt spel: [ArbitraryGame.java (Slack)](https://slack-files.com/T093JN6HK-F0B0TGUBZ-ed5a138449)

### Måndag 14 sep

**Kod**

 * Om objektorienterad programmering: [HelloObjectOrientedProgramming.java (Slack)](https://slack-files.com/T093JN6HK-F0APL2Y9H-71faf91099)

**Begrepp**

* GitHub: Local working directory vs. Local repository vs Remote Repository
* GitHub: Branch vs. Fork vs. Clone

### Fredag 11 sep

**Länkar**

Set Up Git - User Documentation
https://help.github.com/articles/set-up-git/

Markdown Basics - User Documentation
https://help.github.com/articles/markdown-basics/

octocat/Spoon-Knife
https://github.com/octocat/Spoon-Knife

Understanding the GitHub Flow · GitHub Guides
https://guides.github.com/introduction/flow/

git - the simple guide - no deep shit!
http://rogerdudler.github.io/git-guide/

Code School - Try Git
https://try.github.io/levels/1/challenges/1

GitHub Glossary - User Documentation
https://help.github.com/articles/github-glossary/

### Torsdag 10 sep

<!--
 XKCD
 -->

**Kod**

* [Om vektorer (array)](https://slack-files.com/T093JN6HK-F0AE2S4VC-fd7f421185) 

**Omvänt sendstreck (backslash) \ i Atom**
Ladda ned och installera paketet *keyboard-localization* i Atom. Välj därefter i inställningarna för paketet att använda `sv_SE` som tangentbordsuppsättning (keyboard layout).

**Utmaning**

Undersök och jämför vad följande gör i Java:

List

* ArrayList
* LinkedList
* Vector

Set

* HashSet
* LinkedHashSet
* TreeSet


**Övningar**
Arrays - Learn Java - Free Interactive Java Tutorial
http://www.learnjavaonline.org/en/Arrays

SoloLearn: Module 3
http://www.sololearn.com/Course/Java/

Arrays - Learneroo
https://www.learneroo.com/modules/11/nodes/110
https://www.learneroo.com/modules/11/nodes/111

Programming by Doing: Assignments 138--150
https://programmingbydoing.com/

**Fördjupande läsning**
Arrays (The Java™ Tutorials > Learning the Java Language > Language Basics)
http://docs.oracle.com/javase/tutorial/java/nutsandbolts/arrays.html

### Måndag 7 sep 
> **OBS!**
> Lektionstillfället måndag 7 september inställt p.g.a. sjukdom. 
> Ersätts preliminärt med ett lektionstillfälle fredag 11 september 8:15--16:30

### Torsdag 3 sep

**Till måndag 7 sep**

* Registrera ett konto på [GitHub](https://github.com/)

**Kod**

* Om funktioner: [helloFunctions.java (Slack)](https://slack-files.com/T093JN6HK-F0A4JB614-94fb5106a1)

**Fördjupande läsning**
Defining Methods (The Java™ Tutorials > Learning the Java Language > Classes and Objects)
http://docs.oracle.com/javase/tutorial/java/javaOO/methods.html

Functions - Learn Java - Free Interactive Java Tutorial
http://www.learnjavaonline.org/en/Functions

**Övningar**
Variables, Methods and Parameters - Learneroo
https://www.learneroo.com/modules/11/nodes/101

Programming by Doing - Assignments 97--113
https://programmingbydoing.com/

### Måndag 31 aug 

**Kod**

* FizzBuzz: [helloFizzBuzz.java (Slack)](https://slack-files.com/T093JN6HK-F09TE8P25-8fccc22d5b)
* Om switch case: [helloSwitch.java (Slack)](https://slack-files.com/T093JN6HK-F09TDSJQP-ea5b3b1579)
* Om repetitionssatser: [helloLoops.java (Slack)](https://slack-files.com/T093JN6HK-F09TE3UAW-a1c9afc4a8)

**Svenska tecken i kommandotolken för (Windows **

Alternativ 1:

- Ändra teckenuppsättning på din fil i din texteditor till *Western (Windows 1252)*
	- I Atom kan du klicka på UTF8 längst ned i högra hörnet, för andra textredigerare; sök efter hur du ändrar "file encoding"

Alternativ 2:

- Varje gång du kompilerar kod, skriv följande (`helloWorld.java` byter du ut mot namnet på din fil!)
 `javac helloWorld.java -encoding UTF8`
	
**Utskrift med formatering**
Formatting (The Java™ Tutorials > Essential Classes > Basic I/O)
https://docs.oracle.com/javase/tutorial/essential/io/formatting.html

Java For Complete Beginners - formatted strings
http://www.homeandlearn.co.uk/java/java_formatted_strings.html


**Övningar/fördjupande läsning**

Programming by Doing - Assignment 48--75
https://programmingbydoing.com/

While and For Loops - Learneroo
https://www.learneroo.com/modules/11/nodes/132

Loopy Thinking - Learneroo
https://www.learneroo.com/modules/11/nodes/573

Java Tutorial | SoloLearn: Assignments 19--22
http://www.sololearn.com/Course/Java/

Loops - Learn Java - Free Interactive Java Tutorial
http://www.learnjavaonline.org/en/Loops

Control Flow Statements (The Java™ Tutorials > Learning the Java Language > Language Basics)
http://docs.oracle.com/javase/tutorial/java/nutsandbolts/flow.html


### Torsdag 27 aug

**Kod**

* Om strängar, tal, matematik och villkorssatser (if): [helloStrings.java (Slack)](https://slack-files.com/T093JN6HK-F09NMH2LD-d1fbd22e37)
* Om inmatning av strängar, tal samt kontroll av tal: [helloInput.java (Slack)](https://slack-files.com/T093JN6HK-F09NNQPFH-b55d8cb7e5)

**Mer läsning**
Math and Comparison Operators - Learneroo
https://www.learneroo.com/modules/11/nodes/103

If Statement - Learneroo
https://www.learneroo.com/modules/11/nodes/104

Conditionals - Learn Java - Free Interactive Java Tutorial
http://learnjavaonline.org/en/Conditionals

**Relevanta övningar**
Programming by Doing - Assignment 14--25
https://programmingbydoing.com/

Java Tutorial | Lesson 13--18	
http://www.sololearn.com/Course/Java/
 

#### Utmaningar
Palindrom
: Kolla om inmatat ord/mening är samma baklänges (t.ex. "naturrutan", "ni talar bra latin")

Skottår (leap year)
: Kontrollera om inmatat årtal är skottår

Personnummer
: Kontrollera om inmatad sträng är ett giltigt personnummer (rätt antal tecken, giltigt födelsedatum och kontrollsiffra)

### Måndag 24 aug

**Kod**

* Om variabler, tal och strängar: [helloVariables.java (Slack)](https://slack-files.com/T093JN6HK-F09GQHNKS-dd4b36b84b)


**Uppgift till torsdag 27 aug **

* Sök upp en stilguide "style guide" för Java. Skriv lite om dina intryck, till exempel:
	* Om du har mycket erfarenheter av programmering sen tidigare...
		* ...vilka "fel" har du gjort som bryter mot stilguiden? 
		* ...skiljer sig stilguiden åt från stilguiden för ett annat språk du programmerat i tidigare? Hurdå?
	* Finns det något du inte håller med om, som kan göras "snyggare"?
	* När är det lämpligt att bryta mot stilguiden?


**Fördjupande läsning/övningar**

Variables, Methods and Parameters - Learneroo
https://www.learneroo.com/modules/11/nodes/101

Variables in Programming and Algebra - Learneroo
https://www.learneroo.com/modules/11/nodes/102

**Övningar**

Programming by Doing - Assignment 9--13
https://programmingbydoing.com/

Java Tutorial | Lesson 9--12	
http://www.sololearn.com/Course/Java/

Variables and Types - Learn Java - Free Interactive Java Tutorial
http://www.learnjavaonline.org/en/Variables_and_Types


**Relevanta länkar**
String (Java Platform SE 8 )
http://docs.oracle.com/javase/8/docs/api/java/lang/String.html

**Fördjupande läsning**
Lesson: Language Basics (The Java™ Tutorials > Learning the Java Language)
http://docs.oracle.com/javase/tutorial/java/nutsandbolts/index.html

Lesson: Numbers and Strings (The Java™ Tutorials > Learning the Java Language)
http://docs.oracle.com/javase/tutorial/java/data/index.html

### Torsdag 20 aug

**Uppgift**
I grupper om 4:

* Välj en IDE per person
	* Exempel: Noteblock, Notepad++, Textpad, Sublime Text, Atom
* Undersök IDE
	* Spontana intryck?
	* Vad är bra? Vad är dåligt?
	* Kan ni få text editorn att kompilera och köra er Javakod utan att du behöver använda kommandoprompten? Hur?
	* Gör HelloWorld!
	* Rita ut ett tre-i-rad-spelbräde (förbättra gärna!) **Förtydligande:** gör ett program som ritar ut ett spelbräde för tre-i-rad
```
  |  |  
--------
  |  | 
--------
  |  |
```

* Samling 13:30

> En sammanställning över finesser att leta efter i valet av textredigerare från dagens övning
> https://workflowy.com/s/KMIswrqLXE

**Till måndag 24 aug:**
* Tänk dig att någon frågar dig *varför har du valt Java?* Skriv ett kortfattat inlägg på din DPY där du förklarar varför!
* Skriv ett kortfattat inlägg om den editor du prövade idag. Var den bra? Varför? Varför inte? Var det någon annan editor som presenterades som du hellre vill använda? Isåfall, varför då? 

**Länkar som visades under lektionen**
* How to Install JDK 8 (on Windows, Mac, Ubuntu) and Get Started with Java Programming
http://www.ntu.edu.sg/home/ehchua/programming/howto/JDK_Howto.html

**Relevanta övningar**
"Hello World!" for Microsoft Windows (The Java™ Tutorials > Getting Started > The "Hello World!" Application)
https://docs.oracle.com/javase/tutorial/getStarted/cupojava/win32.html

SoloLearn: Modul 1--8 (hoppa över nr 6)
http://www.sololearn.com/Course/Java/

Hello, World! - Learn Java - Free Interactive Java Tutorial
http://www.learnjavaonline.org/en/Hello%2C_World%21

Programming by Doing - Övning 0--7
https://programmingbydoing.com/

**Fördjupande läsning**
Java 101: Learn Java from the ground up | JavaWorld
http://www.javaworld.com/article/2076075/learn-java/core-java-learn-java-from-the-ground-up.html

About the Java Technology (The Java™ Tutorials > Getting Started > The Java Technology Phenomenon)
http://docs.oracle.com/javase/tutorial/getStarted/intro/definition.html

How Will Java Technology Change My Life? (The Java™ Tutorials > Getting Started > The Java Technology Phenomenon)
http://docs.oracle.com/javase/tutorial/getStarted/intro/changemylife.html

Lesson: A Closer Look at the "Hello World!" Application (The Java™ Tutorials > Getting Started)
http://docs.oracle.com/javase/tutorial/getStarted/application/index.html


### Måndag 17 aug

How to know your life purpose in 5 minutes | Adam Leipzig | TEDxMalibu - YouTube
https://www.youtube.com/watch?v=vVsXO9brK7M

What is programming? from the Course Foundations of Programming: Fundamentals
http://www.lynda.com/Developer-Programming-Foundations-tutorials/What-programming/83603/90430-4.html

Meet the Professional | Computer programming | Khan Academy
https://www.khanacademy.org/computing/computer-programming/meet-the-computing-professional

**Att göra till torsdag 20 aug**

* Titta på länkarna i [kursplaneringen](kursplanering-OOP-och-Java.pdf)
* Skapa din egna digitala presentationsyta (DPY)
	* Använd till exempel [WordPress](http://www.wordpress.org), [Blogger](https://www.blogger.com) eller [Weebly](http://www.weebly.com/)
	* Presentera dig själv med bild och en kortare text, använd till exempel ditt "life purpose"
	* Skriv ett inlägg där du kort reflekterar över
		* vilka förväntningar har jag på kursen?
		* vad är bra kod?
		* vad skiljer en bra programmerare från en dålig programmerare?
	* Skriv länken till din DPY i [Slack](http://sjk15.slack.com) 
* Sök gärna på studieteknik

Översikt
--------

Datum  | Dag | Moment
-------|-----|--------------
17 aug | mån | Kursintro. Om datorer, programmering. DPY~~
20 aug | tors | Java Allmänt. IDE. "Hello World"
24 aug | mån | Syntax, variabler, kommentarer. Börja med strängar och tal
27 aug | tors | Strängar, tal, villkorssatser
31 aug | mån | Repetitionssatser
3 sep | tors | Funktioner
~~7 sep~~ | ~~mån~~ | ~~Funktioner, listor, samlingar, GitHub~~
10 sep | tors | Funktioner, vektorer (arrayer)
11 sep | fre | Funktioner, vektorer, GitHub, kort om OOP
14 sep | mån | OOP Grunder. Objekt och klasser, Metoder
17 sep | tors | Tentamen 1. OOP Grunder: Metoder, Konstruktorer, Arv
21 sep | mån | OOP Grunder, Arv, UML
24 sep | tors | OOP Grunder, Samlingar, Listor, UML
28 sep | mån | OOP, flera konstruktorer, förberedelse kortspel
1 okt | tors | OOP, arv, komposition, aggregering, konstruktorer, this, super, 
5 okt | mån | OOP, konstruktorer, överskuggning, överlagring
8 okt | tors | OOP, Slumptal, Arv, ArrayList, kortspelsförberedelser
12 okt | mån | [**Teknisk projektledning.**](../teknisk-projektledning) 
15 okt | tors | [**Teknisk projektledning.**](../teknisk-projektledning) 
19 okt | mån | [**Teknisk projektledning.**](../teknisk-projektledning) 
22 okt | tors | [**Teknisk projektledning.**](../teknisk-projektledning) 
26 okt | mån | OOP, Grafik
29 okt | tors | OOP, Grafik
2 nov | mån | OOP, Grafik, Interface
5 nov | tors | Tentamen 2 (OOP), OOP, Grafik, Abstrakta klasser
9 nov | mån | [**OOP och Design.**](../OOP-och-Design)
12 nov | tors | [**OOP och Design.**](../OOP-och-Design)
16 nov | mån | [**OOP och Design.**](../OOP-och-Design)
19 nov | tors | [**OOP och Design.**](../OOP-och-Design) 
23 nov | mån | Dokumentation
26 nov | tors | Trådar
30 nov | mån | Presentation, examination av projekt
3 dec | tors | Presentation, examination av projekt



