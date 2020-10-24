<?php 

function base_url($dir = ''){

    $protocol = ((!empty($_SERVER['HTTPS']) && 'off' !== $_SERVER['HTTPS'] || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) || isset($_SERVER['HTTP_X_APPSERVICE_PROTO']))) || 443 == $_SERVER['SERVER_PORT'] ? 'https' : 'http';
    $host = ($_SERVER['SERVER_NAME'] = 'localhost') ? $_SERVER['SERVER_NAME'] = "$protocol://{$_SERVER['SERVER_NAME']}/estrutura-basica-site/{$dir}" : "$protocol://{$_SERVER['SERVER_NAME']}/{$dir}";

    return $host;
}