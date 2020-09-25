<?php 

include ('conn.php'); 

include "query.php";
// var_dump($results3);
include "header.php";


$pages = '';
if(isset($_GET['pages']))
    $pages = $_GET['pages'];

switch ($pages) {
  case "content":
    include "pages/content.php";
    break;
  case "home":
    include "pages/home.php";
    break;
  default:    
    include "pages/home.php";
}

include "footer.php";

?>

