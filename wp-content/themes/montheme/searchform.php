<form class="form-inline my-2 my-lg-0" action="<?= esc_url(home_url('/'))?>"> 
    <!-- ci-dessus on rajoute l'url de notre page de recherche dans esc_url on fait un home_url et on lui donne le chemin racine -->
    <!-- home_url = est une fonction qui va permettre de générer le chemin à partir de la page d'accueil soit dans notre cas génére le chemin racine -->
    <input class="form-control mr-sm-2" type="search" placeholder="Recherche" aria-label="Search" value="<?= get_search_query()?>" name='search'>
    <!-- dans notre exemple on execute d'un echo directemment avec la fonction 'get_search_query' mais si on veut echapper des attributs html exemple (esc_attr) -> mais ici c'est deja inclus -->
    <!-- on rajoute le name search -> le nom de notre champ -->
    <button class="btn btn-outline my-2 my-sm-0" type="submit">Rechercher</button>
</form>