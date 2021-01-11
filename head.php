<?php
    global $selectedNavPoint;
    global $nav;
    $nav = array(
        array("name" => "Home", "link" => "/"),
        array("name" => "New Products", "link" => "/new-products"),
        array("name" => "Featured Products", "link" => "/featured-products"),
        array("name" => "About Us", "link" => "/about-us"),
        array("name" => "Pages", "link" => "/pages"),
        array("name" => "Blog", "link" => "/blog"),
        array("name" => "Contact Us", "link" => "/contact"),
    );
?>
<!DOCTYPE html>
<html>

<head>
    <title>Gambo!</title>


    <!-- Import stylesheets -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="/css/main.css">

    <!-- Import scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/df656fafb1.js" crossorigin="anonymous"></script>
    <script src="/js/script.js"></script>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/img/favicon.png">

</head>

<body>
    <div class="header-mobile"> text</div>
    <div class="header">
        <div class="header-top">
            <div class="header-left">
                <div class="logo-wrapper">
                    <a href="#">
                        <img src="/img/logo.svg" alt="Gambo">
                    </a>
                </div>
                <div class="location-wrapper">
                    <div class="location">
                        <select name="location" id="location">
                            <option value="Skopje">Skopje</option>
                            <option value="Shtip">Shtip</option>
                            <option value="Ohrid">Ohrid</option>
                        </select>
                    </div>
                </div>
                <div class="search-wrapper">
                    <div class="search">
                        <span class="search-icon"><i class="fas fa-search"></i></span>
                        <input type="text" placeholder="Type here and press ENTER to search">

                    </div>
                </div>
            </div>
            <div class="header-right">
                <div class="top-header-menu">
                    <a href="#" class="top-header-menu-item">
                        <span class="menu-item-icon"><i class="fas fa-phone-alt"></i></span>
                        <span class="menu-item-text">+389 70 265 990</span>
                    </a>
                    <a href="#" class="top-header-menu-item">
                        <span class="menu-item-icon"><i class="fas fa-gift"></i></span>
                        <span class="menu-item-text">Offers</span>
                    </a>
                    <a href="#" class="top-header-menu-item">
                        <span class="menu-item-icon"><i class="far fa-question-circle"></i></span>
                        <span class="menu-item-text">Help</span>
                    </a>
                </div>
                <div class="header-wishlist">
                    <a href="#" class="wishlist-icon-wrapper">
                        <i class="far fa-heart"></i>

                        <div class="wishlist-counter">
                            <span>3</span>
                        </div>
                    </a>
                </div>
                <div class="profile-menu">
                    <div class="profile-avatar">
                        <img src="/img/avatar.jpg" alt="John Doe">
                    </div>
                    <div class="profile-name">
                        <span class="name-text">John Doe</span>
                        <span class="name-chevron"><i class="fas fa-chevron-down"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="header-categories-wrapper" id="category-popup-btn">
                <span class="header-categories-icon-wrapper">
                    <i class="fas fa-th-large"></i>
                </span>
                <span class="header-categories-text-wrapper">
                    Select Category
                </span>
            </div>
            <div class="main-navigation-wrapper">
                <ul class="main-menu">
                    <?php 
                    foreach ($nav as $item){
                        echo ' <li> <a href="'.$item['link'].'"> '.$item['name'].' </a> </li>';
                    }

                    ?>
                    <li><a class="<?php if ($selectedNavPoint == 'home') {echo 'active';} ?>" href="/">Home</a></li>
                    <li><a class="<?php if ($selectedNavPoint == 'new-products') {echo 'active';} ?>" href="/new-products">New Products</a></li>
                    <li><a class="<?php if ($selectedNavPoint == 'featured-products') {echo 'active';} ?>" href="/featured-products">Featured Products</a></li>+
                    <li><a class="<?php if ($selectedNavPoint == 'about') {echo 'active';} ?>" href="/about-us">About Us</a></li>
                    <li><a class="<?php if ($selectedNavPoint == 'pages') {echo 'active';} ?>" href="/pages">Pages</a></li>
                    <li><a class="<?php if ($selectedNavPoint == 'blog') {echo 'active';} ?>" href="/blog">Blog</a></li>
                    <li><a class="<?php if ($selectedNavPoint == 'contact') {echo 'active';} ?>" href="/contact-us">Contact Us</a></li>
                </ul>
            </div>
            <div class="header-cart-wrapper">
                <span class="header-cart-icon-wrapper">
                    <i class="fas fa-shopping-cart"></i>
                </span>
                <span class="header-cart-text-wrapper">
                    Cart
                </span>
                <span class="header-cart-chevron">
                    <i class="fas fa-chevron-down"></i>
                </span>
            </div>
        </div>
    </div>