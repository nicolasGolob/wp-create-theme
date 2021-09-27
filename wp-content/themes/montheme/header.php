<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark mb-4 bg-primary">
            <a class="navbar-brand" href="#"><?php bloginfo('name')?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php wp_nav_menu([
                'theme_location' => 'header',
                //issu de la doc pour enregistrer l'emplacement du theme
                'container' => false,
                //container : false -> permettra de retirer le container et de ne plus avoir cette div autour de l'ul
                'menu_class' => 'navbar-nav mr-auto'
                //navbar-nav mr-auto afin de rajouter cette class
                ]) ?>
            <!--  au dessus on précise que le theme location à utiliser est le header soit notre page personnalisée -->
            <!-- <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            </ul> -->
           <?= get_search_form() ?>
        </div>
    </nav>
    <div class="container">
