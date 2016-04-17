<?php

/*
Resources:

http://code.tutsplus.com/tutorials/creating-an-api-centric-web-application--net-23417
http://stackoverflow.com/questions/21959312/creating-a-rest-api-using-php
https://docs.phalconphp.com/en/latest/reference/tutorial-rest.html
http://code.tutsplus.com/tutorials/laravel-4-a-start-at-a-restful-api-updated--net-29785
https://www.apigility.org/

Try:
https://www.hurl.it/#top

*/

include "functions.php";

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: *");
header("Content-type: application/json");



$debug = false;

$filename = "recipes.txt";
$fileContents = file_get_contents($filename) or die("Server error!");

$rows = explode("\n", $fileContents);
$data = array();

// Get contents from file into data array
foreach ($rows as $key => $value) {
  list($apiKey, $name, $url, $recipe, $totalRating, $numberOfVotes) = explode("|", $value );
  $data[$key]['apiKey'] = $apiKey;
  $data[$key]['name'] = $name;
  $data[$key]['url'] = $url;
  $data[$key]['recipe'] = $recipe;
  $data[$key]['totalRating'] = $totalRating;
  $data[$key]['numberOfVotes'] = $numberOfVotes;
}

// Remove last empty element
array_pop($data);

if($debug)
  print_r($data);

// Göra vad?
$method = $_SERVER['REQUEST_METHOD']; // $_REQUEST['request'] $_SERVER['HTTP_ORIGIN']

// PUT eller GET


// ETT RECEPTAPI

/*
    Rösta på ett recept

*/
// TODO: Change from GET to PUT
if($method == 'GET' && isset($_GET['rating'])) {
  $recipeFound = false;
  $apiKey = sanitize($_GET['api_key']);
  $recipe = sanitize($_GET['recipe']);
  $rating = sanitize($_GET['rating']);

  foreach ($data as $key => $array) {
    if ($array['apiKey'] == $apiKey && myEncode($array['recipe']) == myEncode($recipe)) {
      $recipeFound = true;

      // Add rating
      $data[$key]['totalRating'] += $rating;
      $data[$key]['numberOfVotes']++;
    }
  }

  // Write back new data to file
  if($recipeFound) {
    $file = fopen($filename, "w");

    $contentToWrite = "";
    foreach ($data as $array) {
      $contentToWrite .= implode("|", $array) . "\n";
    }

    fwrite($file, $contentToWrite);
    fclose($file);

    echo json_encode(["status"=>"ok"]);
    $status = 200;
    header("HTTP/1.1 " . $status . " " . $statusMessages[$status]);
  } else {
    echo json_encode(["status"=>"error", "message"=>"No recipe found with the name $recipe"]);
    $status = 404;
    header("HTTP/1.1 " . $status . " " . $statusMessages[$status]);
  }

}

//header("HTTP/1.1 " + $status + " " + $status_message);



/*
    Hämta resultat

*/

if($method == 'GET') {
  $apiKey = sanitize($_GET['api_key']);
  $recipe = sanitize($_GET['recipe']);

  foreach ($data as $key => $array) {
    if ($array['apiKey'] == $apiKey && myEncode($array['recipe']) == myEncode($recipe)) {

      if($data[$key]['numberOfVotes'] > 0) {
        $averageRating =  $data[$key]['totalRating'] / $data[$key]['numberOfVotes'];
      } else {
        $averageRating = 0;
      }

      $result['recipe'] = $recipe;
      $result['votes'] = $data[$key]['numberOfVotes'];
      $result['rating'] =   $averageRating;
      echo json_encode($result);

    }

    # code...
  }


}

// json_encode / json_decode
/*
{name: "Semla", votes:23, rating:3.5}
*/




 ?>
