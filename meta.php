<?php
$pageTitle = "";
$metaDescription = "";

if ($parts[1] == 'home') {
    $pageTitle = "testing vanuit home";
    $metaDescription = "Description home";
} elseif ($parts[1] == 'stagebedrijven') {
    $pageTitle = "testing vanuit stagebedrijven";
    $metaDescription = "stagebedrijven description";
} elseif ($parts[1] == 'huidigestudenten') {
    $pageTitle = "Testing vanuit huidigestudenten";
    $metaDescription = "Testing vanuit huidigestudenten";
}

if (!isset($parts[1]) || $parts[1] == '') {
    /// Fallback title ///
    $pageTitle = "WeDoTech - De studie voor ICTers!";
    $metaDescription = "Bij WeDoTech leiden we creatieve studenten en programmeurs op doormiddel van code. ";
}

?>