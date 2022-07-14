<?php

use MapasCulturais\i;

date_default_timezone_set('America/Fortaleza');

$base_domain = @$_SERVER['HTTP_HOST'];
$base_url = 'https://' . $base_domain . '/';

return [
    'app.siteName' => env('SITE_NAME', 'Mapa Cultural do Ceará'),
    'app.siteDescription' => i::__("O Mapa Cultural do Ceará é a plataforma livre, gratuita e colaborativa de mapeamento da Secretaria da Cultura do Estado do Ceará sobre cenário cultural cearense. Ficou mais fácil se programar para conhecer as opções culturais que as cidades cearenses oferecem: shows musicais, espetáculos teatrais, sessões de cinema, saraus, entre outras. Além de conferir a agenda de eventos, você também pode colaborar na gestão da cultura do estado: basta criar seu perfil de agente cultural. A partir deste cadastro, fica mais fácil participar dos editais e programas da Secretaria e também divulgar seus eventos, espaços ou projetos."),

    'themes.active' => env('ACTIVE_THEME', 'Ceara'),
    'base.assetUrl' => $base_url . 'assets/',
    'base.url' => $base_url,

    'app.lcode' => env('APP_LCODE', 'pt_BR,es_ES'),

    /* Habilitar configurações importantes da aplicação: [development, staging, production] */
    'app.mode' => 'production',
    'app.enabled.seals'   => true,
    'app.enabled.apps' => false,
    'api.accessControlAllowOrigin' => '*',
    'app.offline' => false,
    'app.offlineUrl' => '/offline',
    'app.offlineBypassFunction' => null,

    /* Doctrine configurations */
    'doctrine.isDev' => false,
    
    ## Esse módulo é para configurar a funcionalidade de denúncia e/ou sugestões
    'google-recaptcha-sitekey' => 'env_key',
    'google-recaptcha-secret' => 'env_secret',

    /* ==================== LOGS ================== */
    'slim.debug' => true,

    'plugins.enabled' => array('agenda-singles', 'endereco', 'notifications', 'em-cartaz', 'mailer'),

    'namespaces' => array(
        'MapasCulturais\Themes' => THEMES_PATH,
        'Ceara' => THEMES_PATH . '/Ceara/',
        'Subsite' => THEMES_PATH . '/Subsite/'
    ),

    'doctrine.database' => [
        'host'           => env('DB_HOST', 'db'),
        'dbname'         => env('DB_NAME', 'mapas'),
        'user'           => env('DB_USER', 'mapas'),
        'password'       => env('DB_PASS', 'mapas'),
        'server_version' => env('DB_VERSION', 10),
    ],
    'module.CompliantSuggestion' => [
        'compliant' => true,
        'compliantUrl' => 'https://cearatransparente.ce.gov.br/portal-da-transparencia/ouvidoria',
        'suggestion' => true,

    ],

];
