<?php

 class SponsoMetaBox{

    const META_KEY = 'montheme_sponso';


    public static function register(){
        add_action('add_meta_boxes', [self::class, 'add']);
        //rappel self :: permet de cibler cette classe
        add_action('save_post', [self::class, 'save']);
    }

    public static function add(){
        add_meta_box(self::META_KEY, 'Sponsoring', [self::class, 'render'], 'post', 'side');
        //self::META_KEY -> pour accéder à cette variable référencé
    }

    public static function render(){
        ?>
            <input type="hidden" value="0" name="<?= self::META_KEY?>">
            <!-- dans le cas ou la personne n'a pas cocher cette case -->
            <input type="checkbox" value="1" name="<?= self::META_KEY?>">
            <label for="montheme_sponso">Cet article est-il sponsorisé?</label> 
        <?php
    }

    public static function save($post){
        if(array_key_exists(self::META_KEY, $_POST)&& current_user_can('edit_post', $post)){
        //rappel : montheme_sponso -> ref de la fonction montheme_render_sponso_box + une condition supplémentaire est ce que l'utilisateur à le droit d'éditer cet article 
        if($_POST[self::META_KEY] === '0'){
            delete_post_meta($post, self::META_KEY);
             //pour eviter que cette clef entre en colissio ave d'autre on va la spécifier via 'montheme_sponso'
        }else{
            update_post_meta($post, self::META_KEY, 1);
            //update_post_meta -> permet de mettre à jour la donnée si elle existe deja et d'en ajouter une si elle n'existe pas -> 1 pour spécifier que cet article est sponsorisé
                }
            }
        }
}

