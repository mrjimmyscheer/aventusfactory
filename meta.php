<?php
$pageTitle = "";
$metaDescription = "";
$pageHeader = "";
$pageImage = "";

if ($parts[1] == 'home') {
    $pageTitle = "testing vanuit home";
    $metaDescription = "Description home";
    $pageHeader = "Welkom, ICT student";
    $pageImage = "";

} elseif ($parts[1] == 'stagebedrijven') {
    $pageTitle = "testing vanuit stagebedrijven";
    $metaDescription = "stagebedrijven description";
    $pageHeader = "Een stage is een win-win situatie";
    $pageImage = "";
    
} elseif ($parts[1] == 'huidigestudenten') {
    $pageTitle = "Testing vanuit huidigestudenten";
    $metaDescription = "Testing vanuit huidigestudenten";
    $pageHeader = "Huidige studenten";
    $pageImage = "";

}

if (!isset($parts[1]) || $parts[1] == '') {
    /// Fallback title ///
    $pageTitle = "WeDoTech - De studie voor ICTers!";
    $metaDescription = "Bij WeDoTech leiden we creatieve studenten en programmeurs op doormiddel van code. ";
    $pageHeader = "";
    $pageImage = "";
}

?>