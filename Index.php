<?php
include 'meta.php';

$baseLocalPage = 'http://localhost/wedotech/pages/';
$baseLocal = 'http://localhost/wedotech/';

$baseSecure = 'https://wedotech.nl/';

// Router
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = trim($uri, '/');

$parts = explode('/', $uri);

$views = 'views/';

if (!isset($parts[1]) || $parts[1] == '') {
  $parts[1] = 'home';
}

$path = "views/" . $parts[1] . ".php";

require_once "$views/partials/header.php";

if (file_exists($path)) {
  require_once $path;
} else {
  require_once "$views/404.php";
}

require_once "$views/partials/footer.php";
?>