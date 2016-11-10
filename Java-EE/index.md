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
http://www.journaldev.com/1945/servletcontextlistener-servlet-listener-example

http://docs.oracle.com/javaee/6/api/javax/servlet/ServletContext.html

http://docs.oracle.com/javaee/6/api/javax/servlet/ServletContextListener.html

https://www.tutorialspoint.com/servlets/servlets-database-access.htm

http://www.java2s.com/Code/Java/Servlets/JDBCandServlet.htm

http://www.journaldev.com/1997/servlet-jdbc-database-connection-example

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
