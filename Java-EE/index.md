---
layout: default
title: "Java Enterprise Edition"
---


Java Enterprise Edition
=========================================

* TOC
{:toc}

Info
----

* [Kursplanering](Kursplanering JEE.pdf) (pdf)
Har reviderats lite smått. 

Examination
----
Kursen examineras genom ett projekt där ni kommer bygga något med de teknologier som vi gått igenom. Mer info kommer.

Kurslitteratur
----

Kommer presenteras löpande under kursens gång. Se länkar under "Lektionstillfällen"

Men Javas egna tutorial ger en bra överblick. http://docs.oracle.com/javaee/7/tutorial/


  






Lektionstillfällen
-------------------

### Torsdag 24 november

En kortare genomgång om SOAP och WSDL. Se kanalen anteckningar på Slack för bild på tavlan. Därefter kollade vi lite på hur man kunde skapa en web-service i Eclipse.

**Länkar:**

http://www.w3schools.com/xml/xml_soap.asp

https://www.tutorialspoint.com/soap/what_is_soap.htm

http://www.javatpoint.com/web-services-tutorial

http://searchsoa.techtarget.com/tip/REST-vs-SOAP-How-to-choose-the-best-Web-service




### Måndag 21 november

Introduktion till Web Services. Se kanalerna anteckningar och code på Slack för bilder på tavlan samt kod från dagen.

Vi pratade om REST (mest) och SOAP (litegrann). För att kunna bygga RESTful services i Java EE används biblioteket JAX-RS.

Det behövs en implementation av JAX-RS

Jersey-Som är Suns standard implementation och referensimplementation

root resource class som är den klassen där vi berättar hur web servicen ska hantera de olika HTTP-metoderna

För att kunna använda Jersey behövs att  vi laddar ned Jersey rars från deras hemsida.

1. Skapa ett nytt dynamic web project, se till att klicka next tills ni kommer till sidan där ni kan välja "create web.xml" och kryssa i den rutan

2. Ladda ned Jersey-filerna från https://jersey.java.net/download.html

3. Lägg till dem (allihopa) i er WEB-INF/lib

4. Skapa en root resource class 

5. Kolla på min web.xml från slack och kopiera in innehållet i eran web.xml

6. Testa att deploya projektet på tomcat och se om ni kan komma åt er web service genom webläsaren


Länkar:
https://docs.oracle.com/javaee/6/tutorial/doc/gilik.html - Om root resource class
http://stackoverflow.com/questions/19884295/soap-vs-rest-differences - Lite om SOAP vs REST
http://rest.elkstein.org/ - Introduktion till REST
https://en.wikipedia.org/wiki/Java_API_for_RESTful_Web_Services - Wikipedias sida för en kort förklaring till REST

Lynda.com har en bra kurs som heter "Building web services with Java EE" som är cirka 2.5 h timmar och förklarar grunderna bra. Man kan ta en 10-dagars free trial där man avslutar sin prenumeration direkt.

### Torsdag 17 november

**OBS lektion inställd***

Vi pratade i måndags om JSF.

Har ni inte gjort dem så gör dessa uppgifter. [Uppgifter](http://porkforge.mardby.se/index.php?title=%C3%96va_p%C3%A5_JavaServer_Faces_och_Managed_Beans)

Är ni klara med de uppgifterna och känner att ni har bra koll på det vi gjort tidigare i kursen kan ni kolla på ett tredjepartsbibliotek till JavaServer Faces som heter PrimeFaces (http://www.primefaces.org/) och som används att ett antal större företag för att bygga upp deras webbapplikationer. Se [denna](http://www.primefaces.org/whouses) sida  för att se en lista på företag som använder PrimeFaces.

[Här](http://www.primefaces.org/showcase/) är PrimeFaces sida med demos för hur deras UI-komponenter ser ut. Med inte speciellt mycket ansträngning kan man bygga ett någorlunda vettigt UI med hjälp av JSF och PrimeFaces.

För att använda det laddar ni bara ned deras jar och lägger den i WEB-INF/lib i era projekt samt lägger till den i classpath. [Nedladdning](http://www.primefaces.org/downloads). För att sedan använda PrimeFaces i era .xhtml-filer (facelets) så lägger ni till följande namespace:

xmlns:p="http://primefaces.org/ui"

En annan trevlig aspekt med PrimeFaces är att de har en väldigt utförlig dokumentation. De har en över 600-sidor lång User Guide som pdf. Den finns att läsa [här](http://www.primefaces.org/docs/guide/primefaces_user_guide_6_0.pdf).

Så börja med att göra övningarna. När ni sedan är klara med dem så kolla på PrimeFaces och se om ni kan hitta någon komponent som skulle gå att använda för att förbättra er lösning uppgifterna.




### Måndag 14 november

Vi gick igenom login-applikationen med sessions och databasanslutning med Servlets. Se kanalen code på Slack för koden.

Denna vecka så börjar vi med JavaServer Faces som är ett framework för att skapa UI:s på ett simpelt sätt och som är en standard inom Java EE. 

#### Uppgifter att jobba med tills på torsdag

[Uppgifter](http://porkforge.mardby.se/index.php?title=%C3%96va_p%C3%A5_JavaServer_Faces_och_Managed_Beans)

#### JSF och MVC


MVC
![MVC](https://i.imgur.com/4xRz3TN.png)

JSF
![JSF](https://i.imgur.com/0VTMzOU.png)

En JSF-app består av:

* JSF Faces Servlet (vår controller)
* Webbsidor (s.k Facelets)
* Managed Beans
* web.xml
* faces-config.xml (vi behöver inte röra denna då vi kan använda @ManagedBean)

#### Managed beans

Managed Beans är en Bean som vi inte behöver instansiera eller "sköta" = manage utan den används av ramverket.

Länkar:

* http://stackoverflow.com/questions/7031885/how-to-choose-the-right-bean-scope
* http://docs.oracle.com/javaee/6/tutorial/doc/bnaqm.html
* http://www.andygibson.net/blog/article/comparing-jsf-beans-cdi-beans-and-ejbs/

#### Länkar om JSF

Länkar:

* http://www.tutorialspoint.com/jsf/
* http://docs.oracle.com/javaee/6/tutorial/doc/bnaph.html
* http://www.tutorialspoint.com/jsf/
* [Youtube-tutorial](https://www.youtube.com/watch?v=_3XiiNZYpAw&list=PLEAQNNR8IlB5H6fbgvNl_oN259gdZAnXl)
* https://blog.udemy.com/jsf-tutorial-an-introduction-to-jsf/







### Torsdag 10 november

Vi ska bygga vidare på inloggningen från i måndags. Denna gång ska vi lagra användare i en databas och när en användare loggar in så ska vi kolla user och pw mot databasen. En användare ska även kunna registrera sig på sidan och således lagras i databasen om registreringen gick bra. Kolla kanalen code på slack för kod från i måndags.

Se kanalen anteckningar på slack för bild på hur det kan tänkas se ut. 

För att kunna använda JDBC måste ni lägga till den drivern som en jar till projektet i eclipse. Det kan även behövas att jaren läggs till i vår web-container (dvs Tomcat). Detta görs i tomcat/lib om man använder tomcat.

Så uppgiften nu består i att ta de filer jag lagt upp på slack (alternativt använda sina egna från i måndags) och bygga vidare utifrån dem. 


**Vi behöver:**

Först måste vi skapa en databas som vi kan använda och en tabell i den som vi kan lagra information om användare i.


En register.html som är en enkel form där en användare kan registera sig. Data från denna ska hanteras av en RegisterServlet som lägger in användaren i databasen. 

Ändra om LoginServlet så att den nu kontrollerar username och password med användarna i databasen och inte med bara hårdkodad data som i måndags.

En javaklass User som modellerar en användare.

En klass ConnectionManager som hanterar anslutning till databasen. Den bör egentligen bara ha en konstruktor som tar dbURL, dbUser och dbPass. Sen ha en instansvariabel Connection con och en get-metod för den instansvariabeln. Får ni inte databasanslutningen att fungera så lägg till 

Class.forName("com.mysql.jdbc.Driver");

i konstruktorn innan ni skapar anslutningen.

Något som heter en Listener. Den lyssnar på events inom web-containern. Vi skapar en som förslagsvis heter AppContextListener och implementerar interfacet ServletContextListener. Då måste den ha två metoder:

public void contextInitialized(ServletContextEvent servletContextEvent) och public void contextDestroyed(ServletContextEvent servletContextEvent)

Dessa metoder körs först respektive sist när web-appen startar. Här inne vill vi öppna upp och stänga vår databasanslutning så våra servlets kan ansluta till databasen.


Länkar:
http://www.journaldev.com/1945/servletcontextlistener-servlet-listener-example - Listeners

http://docs.oracle.com/javaee/6/api/javax/servlet/ServletContext.html - ServletContext

http://docs.oracle.com/javaee/6/api/javax/servlet/ServletContextListener.html - ServletContextListener

https://www.tutorialspoint.com/servlets/servlets-database-access.htm - Servlets och databaser

http://www.java2s.com/Code/Java/Servlets/JDBCandServlet.htm - Servlets och databaser

http://www.journaldev.com/1997/servlet-jdbc-database-connection-example - Servlets, listeners och databaser

http://www.javatpoint.com/crud-in-servlet - CRUD med Servlets

http://www.javatpoint.com/Event-and-Listener-in-Servlet - Events och Listeners

### Måndag 7 november

MVC-tänk med JSP och Servlet.

Sessionshantering med Servlets.

Länkar:

http://examplesofjava.com/servlets-jsp/first-project-servlets-jsp-using-mvc.html

http://www.javatpoint.com/MVC-in-jsp

http://www.thejavageek.com/2013/08/11/mvc-architecture-with-servlets-and-jsp/

http://stackoverflow.com/questions/2575471/how-to-develop-jsp-servlets-web-app-using-mvc-pattern

http://stackoverflow.com/questions/3541077/design-patterns-web-based-applications

http://www.javatpoint.com/session-tracking-in-servlets


### Torsdag 3 november

HTTP POST och GET samt introduktion till Servlets

Bra länkar (vissa är dock lite utdaterade men ger en bra grund):
http://docstore.mik.ua/orelly/java-ent/servlet/index.htm

http://edu4java.com/en/servlet/servlet1.html 

http://www.programmera.net/about/index.php 

Videos:

[JSP och Servlets](https://www.youtube.com/watch?v=b42CJ0r-1to&list=PLE0F6C1917A427E96)

[Servlets](https://www.youtube.com/watch?v=BMRamj_eKFY)

[Servlets, JSP och hur man kan bygga en första enkel webbapplikation](https://www.youtube.com/watch?v=BeR4kyZ11G8)

[Om att hantera HTTP requests](https://www.youtube.com/watch?v=anJD8F-4nlw)

[Mer om Servlets och JSP](https://www.youtube.com/watch?v=tkFRGdUgCsE) - kolla alla tutorials 01-06

### Måndag 31 oktober

Vi pratade lite allmänt om webbapplikationer och introducerade JavaServer Pages.

Se slack för kod, ppt och bilder på tavlan från dagen.

Behöver Eclipse för Java EE samt en Java applikationsserver, exempelvis Tomcat.

[Eclipse JEE](http://www.eclipse.org/downloads/packages/eclipse-ide-java-ee-developers/neon1a)

[Tomcat](http://tomcat.apache.org/)



Länkar JEE och JSP:

[Översikt Java EE](http://www.oracle.com/technetwork/java/javaee/tech/index.html)

[YouTube-tutorial för JSP](https://www.youtube.com/watch?v=78nSYSQO0H0&index=1&list=PLEAQNNR8IlB5qfU7joeyIVRCRqD3nMsmV)

[Intro till webbapplikationer](https://www.youtube.com/watch?v=4Qh4mOYhZCY)

Övningar:

[Övningar JSP och Servlets](http://porkforge.mardby.se/index.php?title=%C3%96va_p%C3%A5_JSP_och_Servlets)
Gör uppgift 1 och 2. Om man vill ha en utmaning kan ni försöka göra uppgift 4 också. De andra uppgifterna handlar om Servlets som vi går igenom på torsdag.
