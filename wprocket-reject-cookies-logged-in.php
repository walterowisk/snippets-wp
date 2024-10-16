<!-- DESATIVAR CACHE PARA USUÁRIOS LOGADOS

Na versão 3.17.0.2 do WP Rocket, a opção de cache para usuários logados foi removida do painel, 
mas ela ainda pode ser controlada por meio de um código manual no arquivo de configuração ou diretamente via PHP.

Acesse o painel de administração do WordPress.
=> Aparência => Editor de temas => functions.php => Adicione o código abaixo.

Este código faz com que o WP Rocket rejeite o cache para qualquer usuário que tenha o cookie wordpress_logged_in_, 
ou seja, aqueles que estão logados no WordPress. -->

<?php

add_filter( 'rocket_cache_reject_cookies', function( $cookies ) {
    $cookies[] = 'wordpress_logged_in_';
    return $cookies;
});
