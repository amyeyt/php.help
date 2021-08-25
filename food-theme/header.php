<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Main Page</title>
    <?php 
        wp_head();
        ?>
</head>




<!-- Main Content Start -->
<body>
    <!-- Nav start -->
    <header>
        
    <div class="logo"> <a href="main.html"><img src="./images/Untitled design (1).png" alt="logo"></a></div>
    
        <nav>
        <?php
                    wp_nav_menu( array(
                        'theme_location' => 'headerMenuLocation',
                    )); 
                ?>
    <div class="container">
        <div class="search-box">
            <input class="search-txt" type="text" name="" placeholder="Type to search">
            <a class="search-btn" href="#">
                <i class="fas fa-search"></i>
    
            </a>
        </div>    </div>
        </nav></header>
        <!-- Nav end -->