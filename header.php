<?php 

include ('conn.php'); 

include "query.php";
// var_dump($results3);

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="assets/libs/bootstrap-4.5.0-dist/css/bootstrap.min.css" rel="stylesheet">

     <!-- Fontawesome CSS -->
     <link rel="stylesheet" href="assets/libs/fontawesome/css/all.min.css">

    <title>web company</title>
    
  </head>
  <body>
    
    <!-- Start Navbar -->
    <div class="navbar navbar-expand-md navbar-dark fixed-top bg-success">
        <div class="container">
            <a class="navbar-brand" href="#">web company</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php foreach($results as $result) : ?>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">

                        <?php

                            $menuroute = 'home';
                            if($result['menu_title']!='Home')
                                $menuroute = 'content';

                        ?>
             
                        <a class="nav-link" href="index.php?pages=<?php echo  $menuroute; ?>&menuid=<?php echo $result['menu_id'] ?>"><?php echo $result['menu_title'] ?> <span class="sr-only"></span></a>
                                     
                    </li>                
                </ul>
               
            </div>
            <?php endforeach ?>
        </div>
    </div>
    <!-- End Navbar -->