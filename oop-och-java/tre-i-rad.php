<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,  initial-scale=1.0">
<title>Spelprojekt 1: Tre-i-rad</title>
<?php 
include_once "../includes/header.php";
?>
</head>
<body><div class="container"><h1 id="spelprojekt-1-tre-i-rad">Spelprojekt 1: Tre-i-rad</h1>



<h2 id="uppgift">Uppgift</h2>

<p>Skapa ett text-baserat Tre-i-rad-spel i Java som spelas av två mänskliga spelare i terminalen/kommandotolken. Varje spelare turas om att ange var i ett 3x3-rutnät spelaren önskar placera X (eller O). När en spelare har tre X (eller O) i rad horisontellt, vertikalt eller diagonalt meddelar spelet vem som vann. Har ingen spelare tre i rad när inga tomma rutor längre kvarstår slutar spelet oavgjort. Efter att ett spel är klart börjar spelet om med ett nytt tomt rutnät.</p>



<h2 id="exempel">Exempel</h2>



<pre class="prettyprint prettyprinted"><code><span class="pln"> X </span><span class="pun">|</span><span class="pln"> O </span><span class="pun">|</span><span class="pln">  
</span><span class="pun">---+---+---</span><span class="pln">
   </span><span class="pun">|</span><span class="pln"> O </span><span class="pun">|</span><span class="pln">
</span><span class="pun">---+---+---</span><span class="pln">
   </span><span class="pun">|</span><span class="pln">   </span><span class="pun">|</span><span class="pln"> X 

</span><span class="typ">Spelare</span><span class="pln"> X</span><span class="pun">,</span><span class="pln"> vilken ruta </span><span class="pun">(</span><span class="lit">1</span><span class="pun">-</span><span class="lit">9</span><span class="pun">)?</span><span class="pln">
</span><span class="pun">&gt;</span><span class="pln"> </span><span class="lit">8</span><span class="pln">

 X </span><span class="pun">|</span><span class="pln"> O </span><span class="pun">|</span><span class="pln">  
</span><span class="pun">---+---+---</span><span class="pln">
   </span><span class="pun">|</span><span class="pln"> O </span><span class="pun">|</span><span class="pln">
</span><span class="pun">---+---+---</span><span class="pln">
   </span><span class="pun">|</span><span class="pln"> X </span><span class="pun">|</span><span class="pln"> X 

</span><span class="typ">Spelare</span><span class="pln"> O</span><span class="pun">,</span><span class="pln"> vilken ruta </span><span class="pun">(</span><span class="lit">1</span><span class="pun">-</span><span class="lit">9</span><span class="pun">)?</span><span class="pln">   
</span><span class="pun">&gt;</span></code></pre>



<h2 id="frivilligt">Frivilligt</h2>

<ul>
<li>Du väljer själv om du för spelaren vill representera rutorna i rutnätet med siffror (1–9) eller koordinater (a1, a2, a3, b1, b2 o.s.v.) eller på annat motiverat sätt. </li>
<li>Spelplanen behöver inte se ut som i exemplet ovan utan du väljer själv hur spelplanen ska se ut i terminalen/kommandotolken. Du ska kunna motivera hur designen av din spelplan antingen gjort det enklare för dig att skriva kod eller lättare för spelaren att ta till sig spelet.</li>
</ul>



<h2 id="krav">Krav</h2>

<p>För <strong>godkänt</strong> ska spelet minst uppfylla följande krav:</p>

<ul>
<li>Spelet ska vara spelbart mellan två människor som turas om att ge indata till terminalen/kommandotolken där spelet visas med text-baserad grafik.</li>
<li>Spelet ska kontrollera och meddela vilken spelare som vunnit eller om spelet slutat oavgjort</li>
<li>Spelet ska vid varje drag kontrollera att indata motsvarar en tom ruta i rutnätet</li>
<li>När en spelare vunnit börjar spelet om från början</li>
</ul>

<p>Dessutom ska koden vara strukturerad och du ska visa på att du förstår och kan använda dig av variabler, strängar, tal, villkorssatser, repetitionssatser, funktioner och vektorer i Java. Onödig kodupprepning ska i största mån undvikas. </p>

<p>För betyget <strong>väl godkänt</strong> ska spelet, utöver kraven för godkänt, minst uppfylla nedan två krav</p>

<ul>
<li>Spelet ska fråga om spelarnas namn och vid varje drag skriva ut vems tur det är</li>
<li>Spelet ska räkna hur många vinster varje spelare har</li>
</ul>

<p>samt minst ett av följande krav</p>

<ul>
<li>Spelet ska ha stöd för att spela mot datorspelare som slumpar fram sina drag</li>
<li>Spelet ska vara flexibelt så att det enkelt går att ändra i koden eller med indata hur många rutor spelplanen är </li>
</ul>

<p>Dessutom ska koden vara strukturerad och tydligt följa en etablerad stilguide. Du visar på att du förstår och hanterar grundläggande programmering i Java samt kan redogöra och argumentera för att din kod är av hög kvalitet. </p>



<h2 id="redovisning">Redovisning</h2>

<p>Preliminärt ska du vara redo att redovisa din lösning till torsdag 24 september.</p></div></body>
</html>