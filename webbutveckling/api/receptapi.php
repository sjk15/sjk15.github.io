<?php
include "functions.php";


$student = sanitize($_POST['student']);
$url     = sanitize($_POST['url']);
$recipe  = sanitize($_POST['recipe']);

if($student) {
  $filename = "recipes.txt";
  $file = fopen($filename, "a") or die("ERROR!");

  $key = uniqid();
//  $key = md5(microtime() . rand());

  fwrite($file, $key . "|" . $student . "|" . $url . "|" . $recipe . "|0|0\n");
  fclose($file);
}

?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Receptbetyg API</title>
<link rel="stylesheet" href="https://stackedit.io/res-min/themes/base.css" />
<link rel="stylesheet" href="http://edu.oscarb.se/SJK15/stylesheet.css" />
<script type="text/javascript" src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS_HTML"></script></head>
<body><div class="container">
<h1 id="receptbetyg-api">Receptbetyg API</h1>


<form action="<?=htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
Namn: <br/>
<input type="text" name="student" /> <br/>
Länk till recepthemsida: <br/>
<input type="text" name="url" /> <br/>
Vad är ditt recept för? <br/>
<input type="text" name="recipe" /> <br/>

<input type="submit" />
</form>

<?php
echo $key; ?>
<br>

</div></body>
</html>
