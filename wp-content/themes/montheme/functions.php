<?php
function montheme_supports(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    //on rajoute le post-thumbnails afin de poster une image avec nos articles lors de la création de ces derniere avec letableau de bord -> créer une article au sein de la barré latérale droite
    add_theme_support('menus');
    //on ajoute la gestion des menus -> sera affiché dans le tableau de bord -> add_theme_support -> permettra l'activation des supoorts des menus
    register_nav_menu('header', 'En tête du menu');
    //permet de créer un menu + 'création de 'En-tête de menu' 
    register_nav_menu('footer', 'Pied de page');

}
function montheme_register_assets(){
    //on créé ici notre fonction qui chargera bootstrap avec son adresse CDN
    wp_register_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css');
    // on utilise le 'wp_enqueue_style' pour utiliser le style enregistré au dessus soit bootstrap
    //IMPORTANT = on execute de cette maniere car une personne pourrait ensuite choisir de retirer ce css la
    wp_enqueue_style('bootstrap');

    wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
    //ce qui est intéressant avec ce systeme la [popper, jquery] 
    wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', [], false, true);
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', [],false, true);
    //puis on finaliser avec ce code pour le script de bootstrap -> IMPORTANT automatiquement il va détecter que bootstrap dépent de popper et de jquery, il va charger ces scripts dans le bon ordre
    wp_enqueue_script('bootstrap');
}
add_action('after_setup_theme', 'montheme_supports');
//after_setup_theme = Se déclenche une fois le thème chargé avec le clef 'bootstrap'
add_action('wp_enqueue_scripts', 'montheme_register_assets');
//wp_enqueue scripts = wp_enqueue_scripts => est le crochet/hook approprié à utiliser lors de la mise en file d'attente de scripts et de styles destinés à apparaître sur le front-end. Malgré son nom, il est utilisé pour mettre en file d'attente à la fois des scripts et des styles .

function bonjour_theme($title){
    //on utilise en argument $title qui est présent dans le général_template.php généré par wordpress
    return 'Hello';
}
add_filter('wp_title', 'bonjour_theme');
//wp_title est une fonction crée par wordpress -> on spécifie sur quel élément de wordpress on veut se brancher soit la fonction wp_title présente dans la page 'general-template.php' , 'bonjour_theme' le nom de notre fonction à utiliser avec un argument présent dans la fonction soit $title

function montheme_title_separator(){
    return '|';
}
add_filter('document_title_separator', 'montheme_title_separator');
//on se branche sur la fonction 'document_title_separator puis on lui rattache la fonction 'mon_theme_title_separator'

//avec le code ci-dessous on aura la bonne apparence voulu
function montheme_menu_class($classes){
    $classes[]= 'nav-item';
    return $classes;
}
add_filter('nav_menu_css_class', 'montheme_menu_class');

function montheme_menu_link_class($attrs){
    $attrs['class']= 'nav-link';
    return $attrs;
}
add_filter('nav_menu_link_attributes', 'montheme_menu_link_class');